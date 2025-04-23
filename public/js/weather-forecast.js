// Weather Forecast Integration for Booking Form

const OPENWEATHER_API_KEY = '588de2d7fdb6d5138f737397d84367bb';
const WEATHER_CONTAINER_ID = 'weather-forecast';

class WeatherForecast {
    constructor() {
        this.coordinates = null;
        this.setupEventListeners();
        this.requestGeolocation();
    }

    requestGeolocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    this.coordinates = {
                        lat: position.coords.latitude,
                        lon: position.coords.longitude
                    };
                    
                    // Store coordinates in cookies
                    document.cookie = `user_lat=${this.coordinates.lat}; path=/`;
                    document.cookie = `user_lon=${this.coordinates.lon}; path=/`;
                    
                    // Log location data to console
                    console.log('User location:', this.coordinates);
                },
                (error) => {
                    console.error('Geolocation error:', error.message);
                    // Fallback to Tunis, Tunisia coordinates if geolocation fails
                    this.coordinates = { lat: 36.8065, lon: 10.1815 };
                }
            );
        } else {
            console.log('Geolocation is not supported by this browser.');
            // Fallback to Tunis, Tunisia coordinates
            this.coordinates = { lat: 36.8065, lon: 10.1815 };
        }
    }

    setupEventListeners() {
        document.addEventListener('DOMContentLoaded', () => {
            const datePicker = document.querySelector('.js-datepicker');
            if (datePicker) {
                datePicker.addEventListener('change', (e) => this.handleDateChange(e));
            }
        });
    }

    async handleDateChange(event) {
        const selectedDate = event.target.value;
        if (!selectedDate) return;

        // Parse the date (assuming format dd/mm/yyyy)
        const [day, month, year] = selectedDate.split('/');
        const date = new Date(year, month - 1, day);
        
        // Only fetch weather if date is within 5 days (API limitation)
        const daysFromNow = Math.ceil((date - new Date()) / (1000 * 60 * 60 * 24));
        
        if (daysFromNow > 5) {
            this.showWeatherUnavailable();
            return;
        }

        await this.fetchAndDisplayWeather(date);
    }

    async fetchAndDisplayWeather(date) {
        const weatherContainer = this.getOrCreateWeatherContainer();
        this.showLoading(weatherContainer);

        try {
            // Use user's coordinates or fall back to default
            const { lat, lon } = this.coordinates || { lat: 36.8065, lon: 10.1815 };

            const response = await fetch(`https://api.openweathermap.org/data/2.5/forecast?lat=${lat}&lon=${lon}&appid=${OPENWEATHER_API_KEY}&units=metric`);
            const data = await response.json();

            if (!response.ok) {
                throw new Error('Weather data unavailable');
            }

            // Find forecast for selected date
            const forecast = this.findForecastForDate(data.list, date);
            if (!forecast) {
                this.showWeatherUnavailable();
                return;
            }

            this.displayWeather(forecast, weatherContainer);
            console.log('Weather forecast:', forecast); // Console output as requested

        } catch (error) {
            console.error('Error fetching weather:', error);
            this.showError(weatherContainer);
        }
    }

    findForecastForDate(forecastList, targetDate) {
        const targetDay = targetDate.getDate();
        const targetMonth = targetDate.getMonth();
        
        return forecastList.find(forecast => {
            const forecastDate = new Date(forecast.dt * 1000);
            return forecastDate.getDate() === targetDay && 
                   forecastDate.getMonth() === targetMonth;
        });
    }

    getOrCreateWeatherContainer() {
        let container = document.getElementById(WEATHER_CONTAINER_ID);
        if (!container) {
            container = document.createElement('div');
            container.id = WEATHER_CONTAINER_ID;
            container.className = 'weather-forecast-container mt-3';
            
            const formGroup = document.querySelector('.date-picker-container');
            if (formGroup) {
                formGroup.parentNode.insertBefore(container, formGroup.nextSibling);
            }
        }
        return container;
    }

    showLoading(container) {
        container.innerHTML = `
            <div class="text-center p-3">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading weather data...</span>
                </div>
            </div>
        `;
    }

    displayWeather(forecast, container) {
        const temp = Math.round(forecast.main.temp);
        const description = forecast.weather[0].description;
        const icon = forecast.weather[0].icon;

        container.innerHTML = `
            <div class="weather-info p-3 border rounded bg-light">
                <div class="d-flex align-items-center">
                    <img src="https://openweathermap.org/img/wn/${icon}@2x.png" alt="${description}" class="weather-icon">
                    <div class="ms-3">
                        <div class="temperature">${temp}°C</div>
                        <div class="description text-capitalize">${description}</div>
                    </div>
                </div>
            </div>
        `;
    }

    showWeatherUnavailable() {
        const container = this.getOrCreateWeatherContainer();
        container.innerHTML = `
            <div class="alert alert-info" role="alert">
                Weather forecast is only available for dates within the next 5 days.
            </div>
        `;
    }

    showError(container) {
        container.innerHTML = `
            <div class="alert alert-danger" role="alert">
                Unable to fetch weather data. Please try again later.
            </div>
        `;
    }
}

// Initialize weather forecast functionality
new WeatherForecast();