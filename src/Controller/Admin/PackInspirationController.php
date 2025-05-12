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
                'title' => 'Soirée Plage Tropicale',
                'description' => 'Ambiance estivale avec palmiers, feu de camp, musique reggae et cocktails exotiques.',
                'keywords' => 'plage, tropical, reggae, feu de camp, cocktails',
                'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Anniversaire Super-Héros',
                'description' => 'Un pack pour les fans de comics, avec décors thématiques, animations costumées et gâteau personnalisé.',
                'keywords' => 'super-héros, anniversaire, comics, costumes, enfants',
                'image' => 'https://images.unsplash.com/photo-1581349482768-13a1f5bdfd05?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Enterrement de Vie de Jeune Fille Luxe',
                'description' => 'Moment glamour avec spa, limousine, photobooth et champagne à volonté.',
                'keywords' => 'EVJF, luxe, spa, limousine, fête',
                'image' => 'https://images.unsplash.com/photo-1618375528999-98c8e398b437?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Baby Shower Pastel',
                'description' => 'Décor pastel, jeux de devinettes, bar à douceurs et cadeaux pour la future maman.',
                'keywords' => 'baby shower, pastel, douceurs, maman, naissance',
                'image' => 'https://images.unsplash.com/photo-1618375528881-f1ecdefe7824?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Noël Scandi Chic',
                'description' => 'Un Noël minimaliste et chaleureux avec sapin en bois, guirlandes naturelles et buffet nordique.',
                'keywords' => 'Noël, scandinave, chic, minimaliste, hiver',
                'image' => 'https://images.unsplash.com/photo-1608889175726-bfa9ef6e9a1e?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Cérémonie de Remise de Diplômes',
                'description' => 'Pack académique avec estrade, décor officiel, buffet et animation photo.',
                'keywords' => 'diplôme, cérémonie, étudiants, officiel, fête',
                'image' => 'https://images.unsplash.com/photo-1596495577886-d920f1fb7238?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Astronomie',
                'description' => 'Soirée à la belle étoile avec télescopes, planétarium mobile et musique ambiante.',
                'keywords' => 'étoiles, astronomie, nuit, planètes, science',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Fête Médiévale',
                'description' => 'Décors d’époque, chevaliers costumés, spectacles de feu et buffet rustique.',
                'keywords' => 'médiéval, chevalier, feu, époque, spectacle',
                'image' => 'https://images.unsplash.com/photo-1587815073086-512da14e49c0?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Cinéma en Plein Air',
                'description' => 'Pack cinéma rétro avec écran géant, pop-corn, transats et ambiance nocturne.',
                'keywords' => 'cinéma, plein air, rétro, film, nuit',
                'image' => 'https://images.unsplash.com/photo-1512069772997-dfde6f8a1d26?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Espace Zen Détente',
                'description' => 'Ambiance relaxation avec tentes bohèmes, fontaines, musique douce et yoga.',
                'keywords' => 'zen, détente, yoga, bohème, relaxation',
                'image' => 'https://images.unsplash.com/photo-1519741491051-52974c1a3a0d?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Déjeuner d’Entreprise Décontracté',
                'description' => 'Pack pro mais chill avec buffet, zone networking et animation musicale soft.',
                'keywords' => 'entreprise, networking, buffet, musique, pro',
                'image' => 'https://images.unsplash.com/photo-1573164574572-cb89e39749b4?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Mexicaine',
                'description' => 'Un pack coloré avec tacos, margaritas, sombreros et musique mariachi.',
                'keywords' => 'mexicain, tacos, margaritas, musique, sombrero',
                'image' => 'https://images.unsplash.com/photo-1581578017426-ec4974ebff64?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pique-nique Romantique',
                'description' => 'Un pack intimiste avec paniers gourmets, plaid et vue sur la nature.',
                'keywords' => 'pique-nique, romantique, nature, intimiste, gourmand',
                'image' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Black & Gold',
                'description' => 'Pack glamour avec décorations noires et dorées, dress code élégant et DJ live.',
                'keywords' => 'black gold, glamour, soirée, élégant, DJ',
                'image' => 'https://images.unsplash.com/photo-1559628233-b6b3df98a89c?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Fête Médiévale',
                'description' => 'Voyagez dans le temps avec châteaux gonflables, costumes d’époque et banquets rustiques.',
                'keywords' => 'médiéval, costumes, banquet, château, fête',
                'image' => 'https://images.unsplash.com/photo-1562531992-d1127c5aef0c?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Déjeuner Green Éco-Friendly',
                'description' => 'Pack respectueux de l’environnement avec matériaux biodégradables et produits locaux.',
                'keywords' => 'éco, green, environnement, local, durable',
                'image' => 'https://images.unsplash.com/photo-1588665481434-50302cb1ab7b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Halloween Party',
                'description' => 'Ambiance effrayante avec décors sombres, animations frissons et buffet horrifique.',
                'keywords' => 'halloween, effrayant, buffet, déguisement, frissons',
                'image' => 'https://images.unsplash.com/photo-1506023917040-42cc13d4539d?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Cinéma en Plein Air',
                'description' => 'Un pack pour une projection de films sous les étoiles avec pop-corn et coussins XXL.',
                'keywords' => 'cinéma, plein air, film, pop-corn, soirée',
                'image' => 'https://images.unsplash.com/photo-1525286116112-b59af11adad1?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Fête Foraine Vintage',
                'description' => 'Retrouvez la magie des fêtes foraines avec stands de jeux, barbe à papa et manèges rétro.',
                'keywords' => 'fête foraine, vintage, jeux, barbe à papa, manège',
                'image' => 'https://images.unsplash.com/photo-1575320181282-cd1e48ef2d30?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée White Party',
                'description' => 'Événement tout blanc avec dress code immaculé, déco épurée et ambiance lounge.',
                'keywords' => 'white party, blanc, lounge, épuré, soirée',
                'image' => 'https://images.unsplash.com/photo-1526401485004-2fda9f6f26c2?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Années 80',
                'description' => 'Pack rétro avec néons, disques vinyles et tubes mythiques des années 80.',
                'keywords' => 'années 80, rétro, néon, vinyle, musique',
                'image' => 'https://images.unsplash.com/photo-1558981403-c5f9891d0c5b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pack Deuil Élégant',
                'description' => 'Un pack respectueux pour célébrer la mémoire avec fleurs sobres, buffet discret et ambiance apaisante.',
                'keywords' => 'deuil, hommage, cérémonie, sobre, respectueux',
                'image' => 'https://images.unsplash.com/photo-1607013251365-05da7c913f07?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pool Party Tropicale',
                'description' => 'Fête au bord de la piscine avec cocktails exotiques, palmiers gonflables et DJ ensoleillé.',
                'keywords' => 'pool party, tropical, piscine, été, cocktail',
                'image' => 'https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Cocktail Rooftop',
                'description' => 'Soirée chic sur les toits avec vue panoramique, cocktails signature et DJ lounge.',
                'keywords' => 'rooftop, cocktail, chic, vue, soirée',
                'image' => 'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&w=600&q=80'
            ]
            ,
            [
                'title' => 'Soirée Blanche Élégante',
                'description' => 'Soirée full-white avec dress code, mobilier lumineux et ambiance lounge.',
                'keywords' => 'blanche, élégance, lounge, chic, dress code',
                'image' => 'https://images.unsplash.com/photo-1541534401786-82c91c406b1b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pack Éco-Responsable',
                'description' => 'Événement zéro déchet avec déco recyclée, produits bio et ateliers green.',
                'keywords' => 'écologie, bio, durable, green, nature',
                'image' => 'https://images.unsplash.com/photo-1542834369-f10ebf06d3cb?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Déjeuner Familial Champêtre',
                'description' => 'Pack pour des retrouvailles familiales avec longues tables, nappe à carreaux et barbecue.',
                'keywords' => 'famille, champêtre, barbecue, nature, retrouvailles',
                'image' => 'https://images.unsplash.com/photo-1610909735085-3c2ce732103e?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Fête de Divorce Positive',
                'description' => 'Un nouveau départ avec rires, champagne et messages inspirants.',
                'keywords' => 'divorce, nouveau départ, fête, liberté, vibes',
                'image' => 'https://images.unsplash.com/photo-1605723166411-bfc94c9cda5f?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Soirée Années 80',
                'description' => 'Ambiance rétro, boule disco, synthpop et tenues flashy au programme.',
                'keywords' => 'années 80, disco, rétro, musique, fun',
                'image' => 'https://images.unsplash.com/photo-1560464024-54e4b39f8ba5?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Afterwork Rooftop',
                'description' => 'Vue imprenable, DJ set, tapas et ambiance décontractée pour finir la journée.',
                'keywords' => 'rooftop, afterwork, DJ, vue, chill',
                'image' => 'https://images.unsplash.com/photo-1590959915941-210dfdeb5c7b?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pique-nique Romantique',
                'description' => 'Tapis, panier raffiné, lanternes et coucher de soleil pour une escapade à deux.',
                'keywords' => 'romantique, pique-nique, couple, coucher de soleil, intimité',
                'image' => 'https://images.unsplash.com/photo-1535392432937-a27c6d1d3b28?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Pack Décès et Recueillement',
                'description' => 'Organisation sobre et respectueuse avec espace floral, musique douce et service traiteur discret.',
                'keywords' => 'deuil, cérémonie, recueillement, hommage, respect',
                'image' => 'https://images.unsplash.com/photo-1609993017410-b1b6c1137c93?auto=format&fit=crop&w=600&q=80'
            ],
            [
                'title' => 'Cérémonie Engagement Intime',
                'description' => 'Cérémonie minimaliste avec proches, décor délicat et échanges de vœux sincères.',
                'keywords' => 'engagement, intime, minimaliste, amour, vœux',
                'image' => 'https://images.unsplash.com/photo-1495567720989-cebdbdd97913?auto=format&fit=crop&w=600&q=80'
            ],
        ];
        
        $ideas = null;
        // --- SWITCHED BACK TO HUGGINGFACE FOR AI GENERATION ---
        $hfKey = $_ENV['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'] ?? null;
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
