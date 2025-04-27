// Pack Suggestions Generator
class PackSuggestionGenerator {
    constructor() {
        this.huggingFaceGenerator = new HuggingFacePackGenerator();
        this.categories = ['Festival', 'Soirée', 'Brunch', 'Workshop', 'Team Building', 'Concert'];
        this.themes = ['Gastronomie', 'Culture', 'Sport', 'Bien-être', 'Business', 'Art'];
        this.locations = ['Intérieur', 'Extérieur', 'Urbain', 'Nature', 'Plage', 'Montagne'];
    }

    async generateSuggestions() {
        const prompt = `Générer des suggestions de packs événementiels innovants avec les thèmes suivants :\n\n${this.categories.join(', ')}\n${this.themes.join(', ')}\n\nFormat pour chaque pack :\nTitre créatif\nDescription détaillée\nMots-clés pertinents`;
        
        const aiSuggestions = await this.huggingFaceGenerator.generatePackIdeas(prompt);
        return aiSuggestions.length > 0 ? aiSuggestions : this.generateFallbackSuggestions();
    }

    createPackSuggestion(category, theme, location) {
        const descriptions = {
            Festival: {
                Gastronomie: 'Un festival culinaire avec des chefs renommés et des ateliers de dégustation',
                Culture: 'Un festival multiculturel avec des spectacles et des expositions',
                Sport: 'Un festival sportif avec des démonstrations et des initiations',
                'Bien-être': 'Un festival zen avec yoga, méditation et ateliers bien-être',
                Business: 'Un festival de l\'innovation avec conférences et networking',
                Art: 'Un festival artistique avec performances live et installations'
            },
            Soirée: {
                Gastronomie: 'Une soirée dégustation avec accord mets et vins',
                Culture: 'Une soirée thématique autour d\'une culture spécifique',
                Sport: 'Une soirée sports et jeux avec animations dynamiques',
                'Bien-être': 'Une soirée relaxation avec spa et soins',
                Business: 'Une soirée networking avec cocktail dînatoire',
                Art: 'Une soirée vernissage avec performances artistiques'
            },
            Brunch: {
                Gastronomie: 'Un brunch gourmet avec produits locaux et bio',
                Culture: 'Un brunch culturel avec animations traditionnelles',
                Sport: 'Un brunch énergisant suivi d\'activités sportives',
                'Bien-être': 'Un brunch healthy avec yoga matinal',
                Business: 'Un brunch business avec workshop inspirant',
                Art: 'Un brunch créatif avec atelier d\'art'
            }
        };

        const basePrice = {
            Festival: { min: 2500, max: 5000 },
            Soirée: { min: 1500, max: 3000 },
            Brunch: { min: 800, max: 1500 }
        };

        const price = Math.floor(
            basePrice[category]?.min + 
            Math.random() * (basePrice[category]?.max - basePrice[category]?.min)
        ) || 1000;

        const description = descriptions[category]?.[theme] || 
            `Un ${category.toLowerCase()} ${theme.toLowerCase()} unique dans un cadre ${location.toLowerCase()}`;

        const keywords = [
            category.toLowerCase(),
            theme.toLowerCase(),
            location.toLowerCase(),
            'événement',
            'expérience'
        ];

        return {
            title: `${category} ${theme}`,
            description: description,
            price: price,
            location: location,
            keywords: keywords,
            duration: Math.floor(Math.random() * 4) + 2, // 2-6 heures
            capacity: Math.floor(Math.random() * 50) + 10 // 10-60 personnes
        };
    }
}

// Initialize and handle suggestions
document.addEventListener('DOMContentLoaded', () => {
    const generator = new PackSuggestionGenerator();
    const refreshBtn = document.getElementById('refresh-inspiration-btn');
    const suggestionsContainer = document.getElementById('pack-suggestions');

    function displaySuggestions(suggestions) {
        suggestionsContainer.innerHTML = suggestions.map(suggestion => `
            <div class="suggestion-card mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">${suggestion.title}</h5>
                        <p class="card-text">${suggestion.description}</p>
                        <div class="pack-details">
                            <span class="badge bg-primary me-2">${suggestion.price}€</span>
                            <span class="badge bg-info me-2">${suggestion.duration}h</span>
                            <span class="badge bg-success">${suggestion.capacity} pers.</span>
                        </div>
                        <div class="keywords mt-3">
                            ${suggestion.keywords.map(keyword => 
                                `<span class="badge bg-light text-dark me-1">${keyword}</span>`
                            ).join('')}
                        </div>
                        <button class="btn btn-primary mt-3 create-pack-btn" 
                                data-suggestion='${JSON.stringify(suggestion)}'>
                            Créer ce pack
                        </button>
                    </div>
                </div>
            </div>
        `).join('');

        // Add event listeners to create pack buttons
        document.querySelectorAll('.create-pack-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const suggestionData = JSON.parse(e.target.dataset.suggestion);
                createPackFromSuggestion(suggestionData);
            });
        });
    }

    function createPackFromSuggestion(suggestion) {
        // Prepare form data
        const formData = {
            'pack[nom]': suggestion.title,
            'pack[description]': suggestion.description,
            'pack[prix]': suggestion.price,
            'pack[duree]': suggestion.duration,
            'pack[capacite]': suggestion.capacity
        };

        // Send to server
        fetch('/admin/pack/new', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = data.redirect;
            } else {
                console.error('Erreur lors de la création du pack:', data.error);
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
    }

    // Initial suggestions
    displaySuggestions(generator.generateSuggestions());

    // Refresh button handler
    refreshBtn.addEventListener('click', () => {
        displaySuggestions(generator.generateSuggestions());
    });
});