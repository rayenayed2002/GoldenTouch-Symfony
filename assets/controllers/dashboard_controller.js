import { Controller } from '@hotwired/stimulus';
import { Chart } from 'chart.js/auto';
import { gsap } from 'gsap';
import AOS from 'aos';
import Swal from 'sweetalert2';

export default class extends Controller {
    static targets = ['purchaseChart', 'sentimentChart', 'heatmapChart', 'stats'];
    static values = {
        refreshUrl: String,
        updateInterval: Number
    };

    connect() {
        this.initializeCharts();
        if (this.hasUpdateIntervalValue) {
            this.startAutoRefresh();
        }
        this.initializeTheme();
    }

    disconnect() {
        if (this.refreshInterval) {
            clearInterval(this.refreshInterval);
        }
    }

    async refreshData(event) {
        const period = event.currentTarget.dataset.period;
        const loadingOverlay = this.element.querySelector('.loading-overlay');
        
        try {
            loadingOverlay.style.display = 'flex';
            const response = await fetch(`${this.refreshUrlValue}?period=${period}`);
            const data = await response.json();
            
            this.updateStats(data.revenueStats);
            this.updateCharts(data);
            
        } catch (error) {
            console.error('Error refreshing data:', error);
        } finally {
            loadingOverlay.style.display = 'none';
        }
    }

    toggleTheme() {
        document.body.classList.toggle('dark-mode');
        const isDark = document.body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDark);
        
        this.updateChartsTheme(isDark);
    }

    initializeTheme() {
        const isDark = localStorage.getItem('darkMode') === 'true';
        if (isDark) {
            document.body.classList.add('dark-mode');
            this.updateChartsTheme(true);
        }
    }

    updateChartsTheme(isDark) {
        const theme = {
            color: isDark ? '#ffffff' : '#666666',
            gridColor: isDark ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)'
        };

        [this.purchaseChartTarget, this.sentimentChartTarget, this.heatmapChartTarget]
            .forEach(canvas => {
                const chart = Chart.getChart(canvas);
                if (chart) {
                    chart.options.scales.x.grid.color = theme.gridColor;
                    chart.options.scales.y.grid.color = theme.gridColor;
                    chart.options.scales.x.ticks.color = theme.color;
                    chart.options.scales.y.ticks.color = theme.color;
                    chart.update();
                }
            });
    }

    updateStats(stats) {
        this.statsTargets.forEach(stat => {
            const key = stat.dataset.stat;
            const value = stats[key];
            
            if (key.includes('revenue') || key.includes('price')) {
                stat.textContent = new Intl.NumberFormat('fr-FR', {
                    style: 'currency',
                    currency: 'EUR'
                }).format(value);
            } else {
                stat.textContent = new Intl.NumberFormat('fr-FR').format(value);
            }
        });
    }

    updateCharts(data) {
        // Update purchase trends chart
        const purchaseChart = Chart.getChart(this.purchaseChartTarget);
        if (purchaseChart && data.trends) {
            purchaseChart.data.labels = data.trends.map(item => item.date);
            purchaseChart.data.datasets[0].data = data.trends.map(item => item.purchases);
            purchaseChart.data.datasets[1].data = data.trends.map(item => item.revenue);
            purchaseChart.update();
        }

        // Update other charts if needed
    }

    startAutoRefresh() {
        this.refreshInterval = setInterval(() => {
            this.refreshData({ currentTarget: { dataset: { period: 'P30D' } } });
        }, this.updateIntervalValue);
    }

    initializeAnimations() {
        // Animate stat cards on load
        gsap.from(this.statCardTargets, {
            duration: 0.8,
            y: 20,
            opacity: 0,
            stagger: 0.2,
            ease: "power2.out"
        });

        // Add hover animations
        this.statCardTargets.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    scale: 1.02,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    scale: 1,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    }

    initializeAOS() {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    }

    showConfirmation(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#7367F0',
            cancelButtonColor: '#82868B',
            confirmButtonText: 'Yes, proceed!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.closest('form').submit();
            }
        });
    }
}
