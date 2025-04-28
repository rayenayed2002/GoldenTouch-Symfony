// Hugging Face Pack Generator
(function(global) {
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

    // Attach to the global object (window in browsers)
    global.HuggingFacePackGenerator = HuggingFacePackGenerator;
    // Optionally, create a default instance
    if (!global.huggingFacePackGeneratorInstance) {
        global.huggingFacePackGeneratorInstance = new HuggingFacePackGenerator();
    }
})(typeof window !== 'undefined' ? window : this);