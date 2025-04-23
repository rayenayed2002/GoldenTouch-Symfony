// Weather Forecast Integration for Booking Form

const OPENWEATHER_API_KEY = '588de2d7fdb6d5138f737397d84367bb';
const OPENUV_API_KEY = 'openuv-2irpsrm9ugj35c-io';
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

            // Fetch weather data
            const weatherResponse = await fetch(`https://api.openweathermap.org/data/2.5/forecast?lat=${lat}&lon=${lon}&appid=${OPENWEATHER_API_KEY}&units=metric`);
            const weatherData = await weatherResponse.json();

            if (!weatherResponse.ok) {
                throw new Error('Weather data unavailable');
            }

            // Find forecast for selected date
            const forecast = this.findForecastForDate(weatherData.list, date);
            if (!forecast) {
                this.showWeatherUnavailable();
                return;
            }

            // Try to fetch UV data (but don't fail if it doesn't work)
            let uvIndex = null;
            try {
                const uvResponse = await fetch(`https://api.openuv.io/api/v1/uv?lat=${lat}&lng=${lon}`, {
                    headers: {
                        'x-access-token': OPENUV_API_KEY
                    }
                });
                
                if (uvResponse.ok) {
                    const uvData = await uvResponse.json();
                    uvIndex = uvData.result.uv_max;
                } else {
                    console.warn('UV data unavailable, using fallback');
                }
            } catch (uvError) {
                console.warn('Error fetching UV data:', uvError);
            }

            // Add UV data to forecast (or null if unavailable)
            forecast.uv = uvIndex;

            this.displayWeather(forecast, weatherContainer);
            console.log('Weather forecast with UV:', forecast);

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
        const feelsLike = Math.round(forecast.main.feels_like);
        const description = forecast.weather[0].description;
        const icon = forecast.weather[0].icon;
        const humidity = forecast.main.humidity;
        const windSpeed = forecast.wind.speed;
        const windGust = forecast.wind.gust || null;
        const visibility = forecast.visibility ? (forecast.visibility / 1000).toFixed(1) : 'N/A';
        const pressure = forecast.main.pressure;
        const clouds = forecast.clouds.all;
        const forecastDate = new Date(forecast.dt * 1000);
        const formattedDate = forecastDate.toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });

        // UV index display logic
        const uvDisplay = forecast.uv !== null ? `
            <div class="col-6">
                <div class="detail-item">
                    <i class="fas fa-sun text-warning"></i>
                    <span>UV Index: ${forecast.uv.toFixed(1)}</span>
                    <small class="ms-2 ${this.getUVIndexClass(forecast.uv)}">${this.getUVIndexLabel(forecast.uv)}</small>
                </div>
            </div>
        ` : `
            <div class="col-6">
                <div class="detail-item">
                    <i class="fas fa-sun text-warning"></i>
                    <span>UV Index: N/A</span>
                </div>
            </div>
        `;

        container.innerHTML = `
            <div class="weather-info p-3 border rounded bg-light shadow-sm">
                <div class="d-flex flex-column">
                    <div class="text-muted mb-2">
                        <i class="far fa-calendar-alt"></i>
                        <span>${formattedDate}</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://openweathermap.org/img/wn/${icon}@2x.png" alt="${description}" class="weather-icon">
                        <div class="ms-3">
                            <div class="temperature h2 mb-0">${temp}°C</div>
                            <div class="description text-capitalize text-muted">${description}</div>
                        </div>
                    </div>
                    <div class="weather-details">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-temperature-low text-primary"></i>
                                    <span>Feels like: ${feelsLike}°C</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-tint text-info"></i>
                                    <span>Humidity: ${humidity}%</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-wind text-success"></i>
                                    <span>Wind: ${windSpeed} m/s</span>
                                    ${windGust ? `<small>(Gusts: ${windGust} m/s)</small>` : ''}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-eye text-warning"></i>
                                    <span>Visibility: ${visibility} km</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-compress-arrows-alt text-danger"></i>
                                    <span>Pressure: ${pressure} hPa</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="detail-item">
                                    <i class="fas fa-cloud text-secondary"></i>
                                    <span>Cloud Cover: ${clouds}%</span>
                                </div>
                            </div>
                            ${uvDisplay}
                        </div>
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

    getUVIndexClass(uvIndex) {
        if (!uvIndex) return '';
        if (uvIndex <= 2) return 'text-success';
        if (uvIndex <= 5) return 'text-warning';
        if (uvIndex <= 7) return 'text-orange';
        if (uvIndex <= 10) return 'text-danger';
        return 'text-purple';
    }

    getUVIndexLabel(uvIndex) {
        if (!uvIndex) return '';
        if (uvIndex <= 2) return 'Low';
        if (uvIndex <= 5) return 'Moderate';
        if (uvIndex <= 7) return 'High';
        if (uvIndex <= 10) return 'Very High';
        return 'Extreme';
    }
}

// Initialize weather forecast functionality
new WeatherForecast();