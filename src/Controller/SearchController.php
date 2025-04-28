<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function search(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Get the search query from the request
        $query = $request->query->get('q');
        
        if (empty($query)) {
            return new JsonResponse([
                'results' => []
            ]);
        }
        
        $results = [];
        
        // Search users by email or name
        $userResults = $this->searchUsers($entityManager, $query);
        if (!empty($userResults)) {
            $results = array_merge($results, $userResults);
        }
        
        // You can add more search functions for other entities here
        // For example:
        // $productResults = $this->searchProducts($entityManager, $query);
        // if (!empty($productResults)) {
        //     $results = array_merge($results, $productResults);
        // }
        
        // Limit the number of results to return
        $results = array_slice($results, 0, 10);
        
        return new JsonResponse([
            'results' => $results
        ]);
    }
    
    /**
     * Search for users matching the query
     */
    private function searchUsers(EntityManagerInterface $entityManager, string $query): array
    {
        $userRepository = $entityManager->getRepository(User::class);
        
        // Get User entity metadata to check which fields exist
        $classMetadata = $entityManager->getClassMetadata(User::class);
        $fields = $classMetadata->getFieldNames();
        
        $qb = $userRepository->createQueryBuilder('u')
            ->where('u.email LIKE :query');
        
        // Add name fields to search if they exist in the entity
        if (in_array('firstName', $fields)) {
            $qb->orWhere('u.firstName LIKE :query');
        }
        
        if (in_array('lastName', $fields)) {
            $qb->orWhere('u.lastName LIKE :query');
        }
        
        // If neither firstName nor lastName are available, but 'name' is, use that
        if (!in_array('firstName', $fields) && !in_array('lastName', $fields) && in_array('name', $fields)) {
            $qb->orWhere('u.name LIKE :query');
        }
        
        $users = $qb->setParameter('query', '%' . $query . '%')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
        
        $results = [];
        foreach ($users as $user) {
            $userData = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'type' => 'user',
            ];
            
            // Add name information if available
            if (in_array('firstName', $fields) && method_exists($user, 'getFirstName')) {
                $userData['firstName'] = $user->getFirstName();
            }
            
            if (in_array('lastName', $fields) && method_exists($user, 'getLastName')) {
                $userData['lastName'] = $user->getLastName();
            }
            
            if (in_array('name', $fields) && method_exists($user, 'getName')) {
                $userData['name'] = $user->getName();
            }
            
            $results[] = $userData;
        }
        
        return $results;
    }
} 