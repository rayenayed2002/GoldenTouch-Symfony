import { gsap } from 'https://unpkg.com/gsap@3.12.5/index.js';

export default {
  template: `
    <div class="ai-panel-card gpu-accelerated">
      <div class="ai-header">
        <h3 class="ai-title">AI Recommendations</h3>
        <div class="loading-indicator" v-if="loading"></div>
      </div>
      
      <ul class="suggestion-list">
        <li v-for="(suggestion, index) in activeSuggestions" 
            :key="index"
            @click="applySuggestion(suggestion)"
            class="suggestion-item">
          {{ suggestion.description }}
          <span class="prediction-confidence">{{ suggestion.confidence }}%</span>
        </li>
      </ul>

      <div class="prediction-history" v-if="showHistory">
        <div v-for="(entry, index) in predictionHistory" 
             :key="index"
             class="history-entry">
          {{ entry.timestamp }} - {{ entry.predictionType }}
        </div>
      </div>
    </div>
  `,

  data() {
    return {
      loading: false,
      activeSuggestions: [],
      predictionHistory: [],
      showHistory: false
    };
  },

  mounted() {
    window.addEventListener('ai-suggestion', this.handleAISuggestion);
    this.setupAnimations();
  },

  methods: {
    setupAnimations() {
      gsap.from('.ai-panel-card', {
        duration: 0.8,
        y: 40,
        opacity: 0,
        ease: 'power3.out',
        delay: 0.4
      });
    },

    async handleAISuggestion(event) {
      this.loading = true;
      const recommendation = await this.processPrediction(event.detail.recommendation);
      
      this.activeSuggestions = this.rankSuggestions(recommendation);
      this.predictionHistory.unshift({
        timestamp: new Date().toLocaleTimeString(),
        predictionType: recommendation.type
      });
      
      this.loading = false;
    },

    applySuggestion(suggestion) {
      this.$emit('ai-apply', suggestion);
      gsap.to(`.suggestion-item:nth-child(${suggestion.index + 1})`, {
        duration: 0.3,
        backgroundColor: 'var(--success-color)',
        autoAlpha: 0.6,
        yoyo: true,
        repeat: 1
      });
    },

    rankSuggestions(predictions) {
      return predictions
        .map(p => ({
          ...p,
          confidence: Math.round(p.confidence * 100)
        }))
        .sort((a, b) => b.confidence - a.confidence)
        .slice(0, 5);
    }
  }
};