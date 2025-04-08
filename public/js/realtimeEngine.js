import { gsap } from 'https://unpkg.com/gsap@3.12.5/index.js';
import * as tf from 'https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@4.12.0/dist/tf.min.js';

const REAL_TIME_CONFIG = {
  WS_ENDPOINT: `wss://${window.location.host}/ws/customization`,
  RECONNECT_INTERVAL: 3000,
  PREDICTION_THROTTLE: 1500
};

class RealtimeEngine {
  constructor() {
    this.socket = null;
    this.aiModel = null;
    this.lastPrediction = Date.now();
    this.initWebSocket();
    this.loadAIModel();
  }

  initWebSocket() {
    this.socket = new WebSocket(REAL_TIME_CONFIG.WS_ENDPOINT);
    
    this.socket.onmessage = (event) => {
      const update = JSON.parse(event.data);
      this.handleDOMUpdates(update);
      this.triggerAIAnalysis(update);
    };

    this.socket.onclose = () => {
      setTimeout(() => this.initWebSocket(), REAL_TIME_CONFIG.RECONNECT_INTERVAL);
    };
  }

  async loadAIModel() {
    this.aiModel = await tf.loadLayersModel('/models/ai_customizer/model.json');
  }

  handleDOMUpdates(update) {
    gsap.to(`[data-update-id="${update.id}"]`, {
      duration: 0.35,
      opacity: 1,
      y: 0,
      ease: 'power2.out',
      overwrite: true
    });
  }

  triggerAIAnalysis(update) {
    if (Date.now() - this.lastPrediction > REAL_TIME_CONFIG.PREDICTION_THROTTLE) {
      const tensorData = this.preprocessData(update);
      const prediction = this.aiModel.predict(tensorData);
      this.dispatchAISuggestion(prediction);
      this.lastPrediction = Date.now();
    }
  }

  dispatchAISuggestion(prediction) {
    const event = new CustomEvent('ai-suggestion', {
      detail: {
        recommendation: prediction,
        timestamp: new Date().toISOString()
      }
    });
    window.dispatchEvent(event);
  }
}

export function initRealtimeEngine() {
  return new RealtimeEngine();
}