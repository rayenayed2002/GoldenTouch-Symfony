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

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/utilisateur')]
class AdminUserController extends AbstractController
{   private $qrCodeBuilder;

    public function __construct(BuilderInterface $qrCodeBuilder)
    {
        $this->qrCodeBuilder = $qrCodeBuilder;
    }

    #[Route('/', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
    
        foreach ($users as $user) {
            if ($this->qrCodeBuilder !== null) {
                // Create an array with all the user data you want to include
                $userData = [
                    'id' => $user->getId(),
                    'fullName' => $user->getFullName(),
                    'email' => $user->getEmail(),
                    'role' => $user->getRoleTitle(), // Using your existing getRoleTitle method
                    'isVerified' => $user->isVerified(),
                    'createdAt' => $user->getCreatedAt() ? $user->getCreatedAt()->format('Y-m-d H:i:s') : null
                ];
    
                // Convert the array to JSON for the QR code
                $qrCodeData = json_encode($userData);
    
                $qrCodeResult = $this->qrCodeBuilder
                    ->data($qrCodeData)
                    ->build();
    
                $qrCodeString = $this->convertQrCodeResultToString($qrCodeResult);
                $user->setQrCode($qrCodeString);
                
                // Optionally also store the raw data if you added that property
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
        // Convert the result to a string (e.g., base64 encode the image)
        // Adjust this logic based on how you want to represent the QR code data
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
                // Handle photo upload
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
                // Form is submitted but not valid
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

    /**
     * Delete user
     *
     * @Route("{id}/suppression", name="admin_user_delete")
     * 
     * @param User $user
     * @return Response
     */
    public function delete(User $user,EntityManagerInterface $entityManager)
    {
        // Check user role and redirect if is admin
        if($user->getRoleTitle() == "Administrateur"){
            $this->addFlash(
                'danger',
                "Vous ne pouvez pas supprimer l'utilisateur <strong>{$user->getFullName()}</strong>."
            );

            return $this->redirectToRoute('admin_user_index');
        }

       $entityManager->remove($user);
       $entityManager->flush();

        $this->addFlash(
            'success',
            "L'utilisateur <strong>{$user->getFullName()}</strong> a bien était supprimé !"
        );

        return $this->redirectToRoute('admin_user_index');
    }
}
