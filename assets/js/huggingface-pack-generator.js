// Hugging Face Pack Generator
class HuggingFacePackGenerator {
    constructor() {
        this.apiKey = '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';
        this.apiEndpoint = 'https://api-inference.huggingface.co/models/gpt2';
    }

    async generatePackIdeas(prompt) {
        try {
            const response = await fetch(this.apiEndpoint, {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${this.apiKey}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    inputs: prompt,
                    parameters: {
                        max_length: 200,
                        num_return_sequences: 3,
                        temperature: 0.8,
                        top_k: 50
                    }
                })
            });

            if (!response.ok) {
                throw new Error('Erreur lors de la génération des suggestions');
            }

            const data = await response.json();
            return this.formatGeneratedPacks(data);
        } catch (error) {
            console.error('Erreur:', error);
            return [];
        }
    }

    formatGeneratedPacks(data) {
        return data[0].generated_text.split('\n\n')
            .filter(text => text.trim())
            .map(text => this.parsePackText(text));
    }

    parsePackText(text) {
        const lines = text.split('\n');
        const title = lines[0] || 'Pack Événement';
        const description = lines[1] || 'Description non disponible';
        const keywords = (lines[2] || '').split(',').map(k => k.trim());

        return {
            title: title,
            description: description,
            keywords: keywords.length ? keywords : ['événement', 'expérience'],
            price: Math.floor(Math.random() * 2000) + 500,
            duration: Math.floor(Math.random() * 4) + 2,
            capacity: Math.floor(Math.random() * 50) + 10
        };
    }
}

// Intégration avec le générateur existant
document.addEventListener('DOMContentLoaded', async () => {
    const huggingFaceGenerator = new HuggingFacePackGenerator();
    const refreshBtn = document.getElementById('refresh-inspiration-btn');
    const suggestionsContainer = document.getElementById('pack-suggestions');

    async function displayAISuggestions() {
        const prompt = `Générer des idées de packs événementiels créatifs:\n\nPack 1:\nTitre\nDescription détaillée\nMots-clés`;
        
        const suggestions = await huggingFaceGenerator.generatePackIdeas(prompt);
        
        suggestionsContainer.innerHTML = suggestions.map(suggestion => `
            <div class="suggestion-card mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">${suggestion.title}</h5>
                        <p class="card-text">${suggestion.description}</p>
                        <div class="keywords mt-3">
                            ${suggestion.keywords.map(keyword => 
                                `<span class="badge bg-primary me-1">${keyword}</span>`
                            ).join('')}
                        </div>
                        <div class="mt-3">
                            <p class="mb-1"><i class="fas fa-clock"></i> ${suggestion.duration}h</p>
                            <p class="mb-1"><i class="fas fa-users"></i> ${suggestion.capacity} personnes</p>
                            <p class="price">À partir de ${suggestion.price}€</p>
                        </div>
                    </div>
                </div>
            </div>
        `).join('');
    }

    if (refreshBtn) {
        refreshBtn.addEventListener('click', displayAISuggestions);
    }

    // Générer les premières suggestions
    await displayAISuggestions();
});