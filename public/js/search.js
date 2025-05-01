document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const advancedSearchToggle = document.getElementById('advancedSearchToggle');
    const advancedSearchPanel = document.getElementById('advancedSearchPanel');
    const minPriceInput = document.getElementById('minPrice');
    const maxPriceInput = document.getElementById('maxPrice');
    const locationCards = document.querySelectorAll('.location-card');

    // Toggle advanced search panel
    advancedSearchToggle.addEventListener('click', () => {
        advancedSearchPanel.classList.toggle('show');
    });

    // Function to filter locations
    function filterLocations() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value.toLowerCase();
        const minPrice = parseFloat(minPriceInput.value) || 0;
        const maxPrice = parseFloat(maxPriceInput.value) || Infinity;

        locationCards.forEach(card => {
            const title = card.querySelector('.card-title').textContent.toLowerCase();
            const description = card.querySelector('.card-text').textContent.toLowerCase();
            const category = card.querySelector('.location-stats .h6:last-child').textContent.toLowerCase();
            const price = parseFloat(card.querySelector('.location-price').textContent.replace('$', ''));

            const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);
            const matchesCategory = !selectedCategory || category.includes(selectedCategory);
            const matchesPrice = price >= minPrice && price <= maxPrice;

            if (matchesSearch && matchesCategory && matchesPrice) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Add event listeners
    searchInput.addEventListener('input', filterLocations);
    categoryFilter.addEventListener('change', filterLocations);
    minPriceInput.addEventListener('input', filterLocations);
    maxPriceInput.addEventListener('input', filterLocations);

    // Toggle advanced search panel
    advancedSearchToggle.addEventListener('click', () => {
        advancedSearchPanel.classList.toggle('show');
    });

    // Function to filter locations
    function filterLocations() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value.toLowerCase();
        const minPrice = parseFloat(minPriceInput.value) || 0;
        const maxPrice = parseFloat(maxPriceInput.value) || Infinity;

        locationCards.forEach(card => {
            const name = card.querySelector('.card-title').textContent.toLowerCase();
            const description = card.querySelector('.card-text').textContent.toLowerCase();
            const category = card.querySelector('.location-stats .h6:last-child').textContent.toLowerCase();
            const price = parseFloat(card.querySelector('.location-price').textContent.replace('$', ''));
            const address = card.querySelector('.location-stats .h6:first-child').textContent.toLowerCase();
            const city = card.querySelector('.location-stats .h6:nth-child(2)').textContent.toLowerCase();

            const matchesSearch = name.includes(searchTerm) || 
                                description.includes(searchTerm) || 
                                address.includes(searchTerm) || 
                                city.includes(searchTerm);

            const matchesCategory = !selectedCategory || category.includes(selectedCategory);
            const matchesPrice = price >= minPrice && price <= maxPrice;

            if (matchesSearch && matchesCategory && matchesPrice) {
                card.style.display = '';
                // Add fade-in animation
                card.style.animation = 'fadeIn 0.3s ease';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Add event listeners for real-time filtering
    searchInput.addEventListener('input', filterLocations);
    categoryFilter.addEventListener('change', filterLocations);
    minPriceInput.addEventListener('input', filterLocations);
    maxPriceInput.addEventListener('input', filterLocations);

    // Add keyframe animation for fade-in effect
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    `;
    document.head.appendChild(style);
});