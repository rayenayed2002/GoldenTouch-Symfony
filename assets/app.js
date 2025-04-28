import './bootstrap.js';

// Import Chart.js
import { Chart } from 'chart.js/auto';
import 'chartjs-adapter-date-fns';
import { fr } from 'date-fns/locale';

// Configure Chart.js defaults
Chart.defaults.locale = fr;
Chart.defaults.responsive = true;
Chart.defaults.maintainAspectRatio = false;

// Import Stimulus controllers
import './controllers/dashboard_controller.js';

console.log('This log comes from assets/app.js - welcome to AssetMapper! ');
