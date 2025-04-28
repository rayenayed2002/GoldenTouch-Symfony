<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserEditType;
use App\Form\UserAddType;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Writer\Result\PngResult;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/utilisateur')]
class AdminUserController extends AbstractController
{
    private $qrCodeBuilder;

    public function __construct(BuilderInterface $qrCodeBuilder)
    {
        $this->qrCodeBuilder = $qrCodeBuilder;
    }

    #[Route('/', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $query = $userRepository->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')  // Changed from createdAt to id
            ->getQuery();

        $users = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            8
        );

        foreach ($users as $user) {
            if ($this->qrCodeBuilder !== null) {
                $userData = [
                    'id' => $user->getId(),
                    'fullName' => $user->getFullName(),
                    'email' => $user->getEmail(),
                    'role' => $user->getRoleTitle(),
                    'isVerified' => $user->isVerified(),
                    'createdAt' => method_exists($user, 'getCreatedAt') && $user->getCreatedAt() ? 
                        $user->getCreatedAt()->format('Y-m-d H:i:s') : 'N/A'
                ];

                $qrCodeData = json_encode($userData);
                $qrCodeResult = $this->qrCodeBuilder
                    ->data($qrCodeData)
                    ->build();

                $qrCodeString = $this->convertQrCodeResultToString($qrCodeResult);
                $user->setQrCode($qrCodeString);
                
                if (method_exists($user, 'setQrCodeContent')) {
                    $user->setQrCodeContent($qrCodeData);
                }
                
                if (method_exists($user, 'setQrCodeGeneratedAt')) {
                    $user->setQrCodeGeneratedAt(new \DateTime());
                }
            }
        }

        return $this->render('admin/user/index.html.twig', [
            'users' => $users,
        ]);
    }

    private function convertQrCodeResultToString(PngResult $qrCodeResult): string
    {
        return 'data:image/png;base64,' . base64_encode($qrCodeResult->getString());
    }

    #[Route('/add', name: 'admin_user_add', methods: ['GET', 'POST'])]
    public function add(Request $request, UserRepository $userRepository, SluggerInterface $slugger): Response
    {
        $user = new User();
        $form = $this->createForm(UserAddType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $photoFile */
            $photoFile = $form->get('photoFile')->getData();
            
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                
                try {
                    $photoFile->move(
                        $this->getParameter('photos_directory'),
                        $newFilename
                    );
                    $user->setPhoto($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'There was an error uploading your photo');
                }
            }

            $userRepository->save($user, true);

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/user/add.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        User $user, 
        UserRepository $userRepository,
        SluggerInterface $slugger
    ): Response {
        $oldPhoto = $user->getPhoto();
        
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                /** @var UploadedFile $photoFile */
                $photoFile = $form->get('photoFile')->getData();
                
                if ($photoFile) {
                    $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                    
                    try {
                        if ($oldPhoto) {
                            $oldPhotoPath = $this->getParameter('photos_directory').'/'.$oldPhoto;
                            if (file_exists($oldPhotoPath)) {
                                unlink($oldPhotoPath);
                            }
                        }
                        
                        $photoFile->move(
                            $this->getParameter('photos_directory'),
                            $newFilename
                        );
                        
                        $user->setPhoto($newFilename);
                    } catch (FileException $e) {
                        $this->addFlash('error', 'There was an error uploading your photo');
                    }
                }
    
                $userRepository->save($user, true);
                return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
            } else {
                $this->addFlash('error', 'Please correct the errors in the form');
            }
        }
    
        return $this->render('admin/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/{id}/toggle-verify', name: 'admin_user_toggle_verify', methods: ['POST'])]
    public function toggleVerify(User $user, EntityManagerInterface $entityManager): Response
    {
        $user->setIsVerified(!$user->isVerified());
        $entityManager->flush();

        $this->addFlash(
            'success',
            $user->isVerified() ? 'User has been unbanned' : 'User has been banned'
        );

        return $this->redirectToRoute('admin_user_index');
    }

    #[Route('/{id}/suppression', name: 'admin_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $this->addFlash(
                'danger',
                'Token de sécurité invalide. Veuillez réessayer.'
            );
            return $this->redirectToRoute('admin_user_index');
        }

        if ($user->getRoleTitle() === "Administrateur") {
            $this->addFlash(
                'danger',
                sprintf('Vous ne pouvez pas supprimer l\'utilisateur %s car il est administrateur.', 
                    htmlspecialchars($user->getFullName(), ENT_QUOTES, 'UTF-8')
                )
            );
            return $this->redirectToRoute('admin_user_index');
        }

        try {
            $entityManager->remove($user);
            $entityManager->flush();

            $this->addFlash(
                'success',
                sprintf('L\'utilisateur %s a bien été supprimé !', 
                    htmlspecialchars($user->getFullName(), ENT_QUOTES, 'UTF-8')
                )
            );
        } catch (\Exception $e) {
            $this->addFlash(
                'danger',
                'Une erreur est survenue lors de la suppression de l\'utilisateur.'
            );
        }

        return $this->redirectToRoute('admin_user_index');
    }
}