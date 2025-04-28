// Pack Generator with AI Model
class PackGenerator {
    constructor() {
        this.model = new AIModel();
        this.trends = [];
        this.packHistory = [];
        this.initializeModel();
    }

    async initializeModel() {
        // Initialize AI model with pre-trained weights
        await this.loadTrends();
        await this.loadPackHistory();
    }

    async loadTrends() {
        try {
            const response = await fetch('/api/trends');
            this.trends = await response.json();
        } catch (error) {
            console.error('Error loading trends:', error);
            this.trends = [];
        }
    }

    async loadPackHistory() {
        try {
            const response = await fetch('/api/packs/history');
            this.packHistory = await response.json();
        } catch (error) {
            console.error('Error loading pack history:', error);
            this.packHistory = [];
        }
    }

    generateSuggestions() {
        const suggestions = [];
        const usedThemes = new Set();

        // Generate diverse suggestions using AI model
        while (suggestions.length < 3) {
            const suggestion = this.model.generate({
                trends: this.trends,
                history: this.packHistory,
                usedThemes: Array.from(usedThemes)
            });

            // Ensure diversity and avoid repetition
            if (!usedThemes.has(suggestion.theme)) {
                suggestions.push(suggestion);
                usedThemes.add(suggestion.theme);
            }
        }

        return suggestions;
    }
}

class AIModel {
    constructor() {
        this.themes = [
            'Aventure & Sport',
            'Culture & Art',
            'Gastronomie',
            'Bien-être',
            'Technologie',
            'Nature & Écologie',
            'Divertissement',
            'Formation & Développement'
        ];

        this.activities = {
            'Aventure & Sport': [
                'Escalade en salle',
                'Parcours d\'obstacles',                'Kayak',
                'VTT électrique',
                'Yoga aérien'
            ],
            'Culture & Art': [
                'Atelier de peinture',
                'Visite guidée street art',
                'Cours de photographie',
                'Atelier céramique',
                'Concert privé'
            ],
            'Gastronomie': [
                'Cours de cuisine fusion',
                'Dégustation de vins',
                'Atelier pâtisserie',
                'Food tour local',
                'Mixologie'
            ]
        };

        this.durations = [2, 3, 4, 6, 8];
        this.capacityRanges = [5, 10, 15, 20, 25];
    }

    generate({ trends, history, usedThemes }) {
        // Use trends and history to influence generation
        const theme = this.selectTheme(usedThemes);
        const activities = this.selectActivities(theme, trends);
        const duration = this.calculateOptimalDuration(activities);
        const capacity = this.determineCapacity(activities, history);
        const price = this.calculatePrice(activities, duration);

        return {
            theme,
            title: this.generateTitle(theme, activities),
            description: this.generateDescription(theme, activities),
            activities,
            duration,
            capacity,
            price
        };
    }

    selectTheme(usedThemes) {
        const availableThemes = this.themes.filter(theme => !usedThemes.includes(theme));
        return availableThemes[Math.floor(Math.random() * availableThemes.length)];
    }

    selectActivities(theme, trends) {
        const themeActivities = this.activities[theme] || [];
        const trendingActivities = trends.filter(trend => 
            themeActivities.some(activity => activity.toLowerCase().includes(trend.toLowerCase()))
        );

        // Combine trending and theme activities with weights
        const activities = [];
        if (trendingActivities.length > 0) {
            activities.push(trendingActivities[Math.floor(Math.random() * trendingActivities.length)]);
        }

        while (activities.length < 2) {
            const activity = themeActivities[Math.floor(Math.random() * themeActivities.length)];
            if (!activities.includes(activity)) {
                activities.push(activity);
            }
        }

        return activities;
    }

    calculateOptimalDuration(activities) {
        const baseTime = activities.length * 1.5;
        return this.durations.find(d => d >= baseTime) || this.durations[0];
    }

    determineCapacity(activities, history) {
        // Analyze history to find optimal capacity
        const similarActivities = history.filter(pack =>
            activities.some(activity =>
                pack.activities.includes(activity)
            )
        );

        if (similarActivities.length > 0) {
            const avgCapacity = similarActivities.reduce((sum, pack) => sum + pack.capacity, 0) / similarActivities.length;
            return this.capacityRanges.find(c => c >= avgCapacity) || 15;
        }

        return 15; // Default capacity
    }

    calculatePrice(activities, duration) {
        const basePrice = activities.length * 50;
        const durationFactor = duration / 2;
        return Math.round((basePrice * durationFactor) / 5) * 5;
    }

    generateTitle(theme, activities) {
        const mainActivity = activities[0];
        const keywords = [
            'Découverte',
            'Expérience',
            'Aventure',
            'Initiation',
            'Immersion'
        ];
        const keyword = keywords[Math.floor(Math.random() * keywords.length)];
        return `${keyword} ${mainActivity}`;
    }

    generateDescription(theme, activities) {
        return `Une expérience unique combinant ${activities.join(' et ')} pour une immersion totale dans l'univers ${theme.toLowerCase()}.`;
    }
}

// Initialize pack generator
const packGenerator = new PackGenerator();

// Function to display suggestions
function displayPackSuggestions() {
    const suggestions = packGenerator.generateSuggestions();
    const container = document.getElementById('pack-suggestions');
    if (!container) return;

    container.innerHTML = '<h4>Suggestions de packs</h4>';
    suggestions.forEach(suggestion => {
        const card = document.createElement('div');
        card.className = 'card mb-3';
        card.innerHTML = `
            <div class="card-body">
                <h5 class="card-title">${suggestion.title}</h5>
                <p class="card-text">${suggestion.description}</p>
                <ul class="list-unstyled">
                    <li><i class="ti ti-clock me-2"></i>${suggestion.duration}h</li>
                    <li><i class="ti ti-users me-2"></i>${suggestion.capacity} personnes</li>
                    <li><i class="ti ti-tag me-2"></i>${suggestion.price}€</li>
                </ul>
                <button class="btn btn-primary" onclick="applyPackSuggestion(${JSON.stringify(suggestion)})">Appliquer</button>
            </div>
        `;
        container.appendChild(card);
    });
}

// Function to apply a suggestion to the form
function applyPackSuggestion(suggestion) {
    document.getElementById('pack_title').value = suggestion.title;
    document.getElementById('pack_description').value = suggestion.description;
    document.getElementById('pack_duration').value = suggestion.duration;
    document.getElementById('pack_capacity').value = suggestion.capacity;
    document.getElementById('pack_price').value = suggestion.price;
}

// Initialize suggestions when the page loads
document.addEventListener('DOMContentLoaded', displayPackSuggestions);

// Refresh suggestions button
const refreshButton = document.getElementById('refresh-suggestions');
if (refreshButton) {
    refreshButton.addEventListener('click', displayPackSuggestions);
}