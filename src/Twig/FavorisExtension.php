<?php

namespace App\Twig;

use App\Repository\FavorisRepository;
use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FavorisExtension extends AbstractExtension
{
    private $favorisRepository;
    private $security;

    public function __construct(FavorisRepository $favorisRepository, Security $security)
    {
        $this->favorisRepository = $favorisRepository;
        $this->security = $security;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_favorited', [$this, 'isFavorited']),
        ];
    }

    public function isFavorited(int $lieuId): bool
    {
        $user = $this->security->getUser();
        if (!$user) {
            return false;
        }

        $favori = $this->favorisRepository->findOneByUserAndLieu($user->getId(), $lieuId);
        return $favori !== null;
    }
} 