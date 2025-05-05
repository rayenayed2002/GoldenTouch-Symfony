<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SlugExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('slug', [$this, 'slugify']),
        ];
    }

    public function slugify(string $text): string
    {
        // Remplace les caractères spéciaux par des tirets
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
        // Translittération
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // Supprime les caractères non alphanumériques
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // Supprime les tirets au début et à la fin
        $text = trim($text, '-');
        
        // Convertit en minuscules
        $text = strtolower($text);
        
        // Si le texte est vide après le traitement
        if (empty($text)) {
            return 'n-a';
        }
        
        return $text;
    }

    public function getName(): string
    {
        return 'slug_extension';
    }
} 