<?php
// src/Controller/Admin/PackInspirationController.php
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PackInspirationController extends AbstractController
{
    #[Route('/admin/pack/inspiration', name: 'admin_pack_inspiration', methods: ['GET'])]
    public function inspiration(HttpClientInterface $client): JsonResponse
    {
        // Always return these fallback ideas if AI call fails or is not configured
        $allIdeas = [
            [
                'title' => 'Soirée Futuriste Hologrammes',
                'description' => 'Un pack immersif avec projections holographiques, DJ et cocktails moléculaires.',
                'keywords' => 'futuriste, hologramme, DJ, cocktails, technologie',
                'image' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Garden Party Chic',
                'description' => 'Un pack élégant pour des événements en plein air, décoré de fleurs fraîches, guirlandes lumineuses et mobilier vintage.',
                'keywords' => 'jardin, chic, fleurs, vintage, extérieur',
                'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Mariage Vintage en Plein Air',
                'description' => 'Célébrez l’amour dans un décor rétro en plein air, avec vaisselle ancienne, arche fleurie et ambiance champêtre.',
                'keywords' => 'mariage, vintage, rétro, champêtre, plein air',
                'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Brunch Bohème',
                'description' => 'Un pack pour un brunch en plein air avec tapis, coussins, vaisselle artisanale et musique acoustique.',
                'keywords' => 'brunch, bohème, plein air, musique, artisanal',
                'image' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Casino Chic',
                'description' => 'Ambiance casino avec tables de jeux, croupiers, lumières tamisées et cocktails raffinés.',
                'keywords' => 'casino, chic, jeux, cocktails, soirée',
                'image' => 'https://images.unsplash.com/photo-1519677100203-a0e668c92439?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Festival Food Trucks',
                'description' => 'Pack festif avec food trucks variés, animations musicales et espace chill.',
                'keywords' => 'food truck, festival, musique, animation, chill',
                'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80'
            ]
        ];
        $ideas = null;
        // --- SWITCHED BACK TO HUGGINGFACE FOR AI GENERATION ---
        $hfKey = $_ENV['HUGGINGFACE_API_KEY'] ?? null;
        if ($hfKey) {
            try {
                // Random theme/event/audience for maximum variety
                $themes = ['lumière', 'futur', 'nature', 'voyage', 'mystère', 'cinéma', 'espace', 'steampunk', 'pirates', 'sous-marin', 'japon', 'technologie', 'chocolat', 'fantastique', 'super-héros', 'années 80', 'galaxie', 'polar', 'magie', 'street art', 'circus', 'robotique', 'tropical', 'hiver', 'été', 'manga', 'rock', 'pop', 'vintage', 'luxury', 'zen', 'science', 'animaux', 'explorateurs', 'carnaval', 'sports extrêmes'];
                $eventTypes = ['soirée', 'brunch', 'mariage', 'anniversaire', 'team building', 'festival', 'afterwork', 'cocktail', 'séminaire', 'fête de village', 'bal', 'garden party', 'escape game', 'dîner', 'week-end', 'pique-nique'];
                $audiences = ['adultes', 'enfants', 'ados', 'familles', 'entreprises', 'amis', 'couples', 'célibataires', 'fans de jeux vidéo', 'artistes', 'musiciens', 'sportifs', 'geeks', 'foodies'];
                shuffle($themes); shuffle($eventTypes); shuffle($audiences);
                $chosenTheme = $themes[0];
                $chosenEventType = $eventTypes[0];
                $chosenAudience = $audiences[0];
                $randomizer = uniqid('', true) . ' | ' . date('Y-m-d H:i:s') . ' | ' . rand() . ' | ' . bin2hex(random_bytes(6));
                // New prompt: generate 3 packs in the style/format of $allIdeas, remixing or rewriting fallback ideas if needed, but always making them unique and creative
                $prompt = "Tu es un assistant créatif pour un site d'événementiel. Génère 3 idées de packs pour des événements du type '$chosenEventType' autour du thème '$chosenTheme', destinés à un public de '$chosenAudience'. Pour chaque idée, donne STRICTEMENT ce format JSON (pas de texte hors JSON) : [{\"title\":...,\"description\":...,\"keywords\":...,\"image\":...}, ...]. Chaque idée doit être totalement nouvelle, créative et ne pas répéter d'idées déjà données. Tu peux t'inspirer de ces exemples : Soirée Futuriste Hologrammes, Garden Party Chic, Mariage Vintage en Plein Air, Brunch Bohème, Festival Food Trucks, Soirée Casino Chic, mais tu dois les réécrire, les combiner ou inventer des éléments nouveaux. Sois original, fun, et invente des détails ! Pour chaque image, donne une courte description d'image adaptée au pack. RANDOM: $randomizer";

                // --- DEBUG LOGGING: Write prompt, request, and response to log ---
                $logFile = __DIR__.'/../../../var/log/hf_ai_debug.log';
                file_put_contents($logFile, "\n==== AI REQUEST ====\nPrompt: $prompt\n", FILE_APPEND);
                try {
                    $response = $client->request('POST', 'https://api-inference.huggingface.co/models/meta-llama/Llama-2-7b-chat-hf', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $hfKey,
                            'Content-Type' => 'application/json',
                        ],
                        'json' => [
                            'inputs' => $prompt,
                            'parameters' => ['max_new_tokens' => 512]
                        ]
                    ]);
                    $status = $response->getStatusCode();
                    $headers = json_encode($response->getHeaders(false));
                    $body = $response->getContent(false);
                    file_put_contents($logFile, "Status: $status\nHeaders: $headers\nBody: $body\n", FILE_APPEND);
                } catch (\Throwable $e) {
                    file_put_contents($logFile, "EXCEPTION: ".$e->getMessage()."\n", FILE_APPEND);
                    throw $e;
                }
                $data = $response->toArray(false);
                $text = '';
                if (isset($data[0]['generated_text'])) {
                    $text = $data[0]['generated_text'];
                } elseif (isset($data['generated_text'])) {
                    $text = $data['generated_text'];
                }
                if ($text) {
                    // Try to detect if HuggingFace returned the fallback static ideas as a JSON array
                    $ideas = null;
                    $jsonIdeas = json_decode($text, true);
                    if (is_array($jsonIdeas) && isset($jsonIdeas[0]['title'])) {
                        // Check if these are the static fallback ideas (by title)
                        $staticTitles = [
                            'Soirée Casino Chic',
                            'Mariage Vintage en Plein Air',
                            'Garden Party Chic',
                        ];
                        $allStatic = true;
                        foreach ($jsonIdeas as $idea) {
                            if (!in_array($idea['title'], $staticTitles)) {
                                $allStatic = false;
                                break;
                            }
                        }
                        if ($allStatic) {
                            // Log the response for debugging
                            file_put_contents(__DIR__.'/../../../var/log/hf_ai_debug.log', "STATIC RESPONSE DETECTED:\n".print_r($text, true), FILE_APPEND);
                            // Return error to frontend
                            return $this->json(['error' => 'HuggingFace API is returning static/cached ideas. Please check your API key or model settings.'], 500);
                        } else {
                            $ideas = $jsonIdeas;
                        }
                    }
                    // Otherwise, try to parse as before
                    if (!$ideas) {
                        $ideas = [];
                        $parts = preg_split('/\n\s*\d+\.|\n\s*- /', "\n".$text); // Split on numbered or dash list
                        foreach ($parts as $part) {
                            if (trim($part)) {
                                $title = '';
                                $description = '';
                                $keywords = '';
                                $image = '';
                                if (preg_match('/Titre ?[:\-] ?(.+)/i', $part, $m)) $title = trim($m[1]);
                                if (preg_match('/Description ?[:\-] ?(.+)/i', $part, $m)) $description = trim($m[1]);
                                if (preg_match('/Mots-cl[ée]s? ?[:\-] ?(.+)/i', $part, $m)) $keywords = trim($m[1]);
                                if (preg_match('/image ?[:\-] ?(.+)/i', $part, $m)) $image = trim($m[1]);
                                // Use Unsplash search if no image
                                $imgUrl = $image ? 'https://source.unsplash.com/600x400/?'.urlencode($image) : null;
                                if ($title && $description) {
                                    $ideas[] = [
                                        'title' => $title,
                                        'description' => $description,
                                        'keywords' => $keywords,
                                        'image' => $imgUrl ?: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80'
                                    ];
                                }
                            }
                            if (count($ideas) >= 3) break;
                        }
                    }
                }
            } catch (\Throwable $e) {
                // Optionally log error, fallback to static below
            }
        }
        if (!$ideas || count($ideas) < 3) {
            // Fallback static ideas if AI fails or not enough generated
            $allIdeas = [
                [
                    'title' => 'Soirée Futuriste Hologrammes',
                    'description' => 'Un pack immersif avec projections holographiques, DJ et cocktails moléculaires.',
                    'keywords' => 'futuriste, hologramme, DJ, cocktails, technologie',
                    'image' => 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'title' => 'Garden Party Chic',
                    'description' => 'Un pack élégant pour des événements en plein air, décoré de fleurs fraîches, guirlandes lumineuses et mobilier vintage.',
                    'keywords' => 'jardin, chic, fleurs, vintage, extérieur',
                    'image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'title' => 'Mariage Vintage en Plein Air',
                    'description' => 'Célébrez l’amour dans un décor rétro en plein air, avec vaisselle ancienne, arche fleurie et ambiance champêtre.',
                    'keywords' => 'mariage, vintage, rétro, champêtre, plein air',
                    'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'title' => 'Brunch Bohème',
                    'description' => 'Un pack pour un brunch en plein air avec tapis, coussins, vaisselle artisanale et musique acoustique.',
                    'keywords' => 'brunch, bohème, plein air, musique, artisanal',
                    'image' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'title' => 'Soirée Casino Chic',
                    'description' => 'Ambiance casino avec tables de jeux, croupiers, lumières tamisées et cocktails raffinés.',
                    'keywords' => 'casino, chic, jeux, cocktails, soirée',
                    'image' => 'https://images.unsplash.com/photo-1519677100203-a0e668c92439?auto=format&fit=crop&w=600&q=80'
                ],
                [
                    'title' => 'Festival Food Trucks',
                    'description' => 'Pack festif avec food trucks variés, animations musicales et espace chill.',
                    'keywords' => 'food truck, festival, musique, animation, chill',
                    'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80'
                ]
            ];
            shuffle($allIdeas);
            $ideas = array_slice($allIdeas, 0, 3);
        }
        return $this->json($ideas);
    }
}
