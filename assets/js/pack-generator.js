// Pack Generator - Système de génération créative de packs

class PackGenerator {
    constructor() {
        this.themes = [
            'Aventure', 'Détente', 'Sport', 'Culture', 'Gastronomie',
            'Nature', 'Bien-être', 'Découverte', 'Sensation forte', 'Art'
        ];
        
        this.activities = {
            'Aventure': ['Escalade', 'Randonnée', 'Spéléologie', 'Canyoning', 'Parcours aventure'],
            'Détente': ['Spa', 'Massage', 'Yoga', 'Méditation', 'Relaxation'],
            'Sport': ['Tennis', 'Golf', 'Natation', 'Fitness', 'Beach-volley'],
            'Culture': ['Visite guidée', 'Musée', 'Théâtre', 'Concert', 'Exposition'],
            'Gastronomie': ['Dégustation', 'Cours de cuisine', 'Wine tasting', 'Restaurant étoilé', 'Food tour'],
            'Nature': ['Safari photo', 'Observation des oiseaux', 'Jardinage', 'Camping', 'Balade nature'],
            'Bien-être': ['Yoga', 'Pilates', 'Aromathérapie', 'Méditation', 'Soins spa'],
            'Découverte': ['City tour', 'Chasse au trésor', 'Escape game', 'Visite historique', 'Atelier local'],
            'Sensation forte': ['Saut en parachute', 'Rafting', 'Tyrolienne', 'Karting', 'Paintball'],
            'Art': ['Peinture', 'Sculpture', 'Photographie', 'Artisanat', 'Street art']
        };

        this.durations = [2, 3, 4, 6, 8];
        this.capacities = [4, 6, 8, 10, 12, 15, 20];
        this.priceRanges = {
            'budget': { min: 50, max: 150 },
            'standard': { min: 150, max: 300 },
            'premium': { min: 300, max: 600 }
        };
    }

    generateRandomPack() {
        const theme = this.themes[Math.floor(Math.random() * this.themes.length)];
        const activities = this.activities[theme];
        const selectedActivities = this.shuffleArray(activities).slice(0, Math.floor(Math.random() * 3) + 1);
        const duration = this.durations[Math.floor(Math.random() * this.durations.length)];
        const capacity = this.capacities[Math.floor(Math.random() * this.capacities.length)];
        const priceCategory = ['budget', 'standard', 'premium'][Math.floor(Math.random() * 3)];
        const price = this.generatePrice(priceCategory);

        return {
            theme,
            name: this.generatePackName(theme, selectedActivities),
            description: this.generateDescription(theme, selectedActivities),
            activities: selectedActivities,
            duration,
            capacity,
            price
        };
    }

    generatePackName(theme, activities) {
        const prefixes = ['Découverte', 'Expérience', 'Aventure', 'Évasion', 'Immersion'];
        const prefix = prefixes[Math.floor(Math.random() * prefixes.length)];
        return `${prefix} ${theme} - ${activities[0]}`;
    }

    generateDescription(theme, activities) {
        const descriptions = {
            'Aventure': 'Une expérience palpitante qui vous fera repousser vos limites',
            'Détente': 'Un moment de pure relaxation pour vous ressourcer',
            'Sport': 'Une activité dynamique pour les passionnés de sport',
            'Culture': 'Une immersion culturelle enrichissante',
            'Gastronomie': 'Un voyage gustatif inoubliable',
            'Nature': 'Une connexion unique avec la nature',
            'Bien-être': 'Un programme complet pour votre bien-être',
            'Découverte': 'Une exploration fascinante de nouveaux horizons',
            'Sensation forte': 'Des sensations fortes garanties',
            'Art': 'Une expression artistique unique'
        };

        return `${descriptions[theme]}. Au programme : ${activities.join(', ')}.`;
    }

    generatePrice(category) {
        const range = this.priceRanges[category];
        return Math.floor(Math.random() * (range.max - range.min + 1) + range.min);
    }

    shuffleArray(array) {
        const newArray = [...array];
        for (let i = newArray.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [newArray[i], newArray[j]] = [newArray[j], newArray[i]];
        }
        return newArray;
    }
}

// Initialisation et export
const packGenerator = new PackGenerator();

// Fonction pour générer et afficher un nouveau pack
function generateAndDisplayPack() {
    const newPack = packGenerator.generateRandomPack();
    const packHtml = `
        <div class="col-md-4 col-lg-3">
            <div class="card pack-card">
                <div class="pack-image d-flex align-items-center justify-content-center bg-light">
                    <i class="ti ti-package text-muted" style="font-size: 3rem;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">${newPack.name}</h5>
                    <p class="card-text text-truncate">${newPack.description}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pack-price">${newPack.price}€</div>
                        <div class="pack-capacity"><i class="ti ti-users"></i> ${newPack.capacity}</div>
                    </div>
                </div>
                <div class="pack-stats">
                    <div class="row g-0 text-center">
                        <div class="col"><div class="h6 mb-0">${newPack.duration}h</div><small>Durée</small></div>
                        <div class="col"><div class="h6 mb-0">${newPack.theme}</div><small>Thème</small></div>
                    </div>
                </div>
                <div class="quick-actions">
                    <div class="btn-group shadow">
                        <button type="button" class="btn btn-primary btn-sm" onclick="savePack(${JSON.stringify(newPack)})"><i class="ti ti-device-floppy"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="this.closest('.col-md-4').remove()"><i class="ti ti-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    `;

    const galleryView = document.querySelector('.gallery-view');
    if (galleryView) {
        galleryView.insertAdjacentHTML('afterbegin', packHtml);
    }
}

// Fonction pour sauvegarder un pack généré
function savePack(packData) {
    // TODO: Implémenter la sauvegarde du pack via une requête AJAX
    console.log('Pack à sauvegarder:', packData);
    // Afficher une notification de succès
    Swal.fire({
        title: 'Pack sauvegardé !',
        text: 'Le nouveau pack a été ajouté avec succès.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
}

// Export des fonctions
window.generateAndDisplayPack = generateAndDisplayPack;
window.savePack = savePack;