// Smooth element interactions and dynamic updates
document.addEventListener('DOMContentLoaded', () => {
    // Material selection handler
    document.getElementById('addMaterialBtn').addEventListener('click', () => {
        const materialSelect = document.getElementById('materialSelect');
        const quantityInput = document.getElementById('materialQuantity');
        
        if (!materialSelect.value || !quantityInput.value) {
            showToast('Please select a material and specify quantity', 'error');
            return;
        }

        const selectedOption = materialSelect.options[materialSelect.selectedIndex];
        addComponentCard({
            type: 'Material',
            name: selectedOption.text,
            id: materialSelect.value,
            quantity: quantityInput.value
        });
        updatePricing();
    });

    // Location selection handler
    document.getElementById('addLocationBtn').addEventListener('click', () => {
        const locationSelect = document.getElementById('locationSelect');
        
        if (!locationSelect.value) {
            showToast('Please select a location', 'error');
            return;
        }

        const selectedOption = locationSelect.options[locationSelect.selectedIndex];
        addComponentCard({
            type: 'Location',
            name: selectedOption.text,
            id: locationSelect.value
        });
        updatePricing();
    });

    // Personnel selection handler
    document.getElementById('addPersonnelBtn').addEventListener('click', () => {
        const personnelSelect = document.getElementById('personnelSelect');
        
        if (!personnelSelect.value) {
            showToast('Please select staff member', 'error');
            return;
        }

        const selectedOption = personnelSelect.options[personnelSelect.selectedIndex];
        addComponentCard({
            type: 'Personnel',
            name: selectedOption.text,
            id: personnelSelect.value
        });
        updatePricing();
    });

    // Dynamic component cards
    function addComponentCard(data) {
        const grid = document.getElementById('selectedItemsGrid');
        
        // Remove existing location if adding new one
        if (data.type === 'Location') {
            document.querySelectorAll('.component-card[data-type="Location"]').forEach(card => card.remove());
        }

        const card = document.createElement('div');
        card.className = 'component-card group';
        card.dataset.type = data.type;
        card.dataset.id = data.id;
        card.innerHTML = `
            <div class="card-content">
                <span class="type-badge">${data.type}</span>
                <h4 class="component-name">${data.name}</h4>
                ${data.quantity ? `<div class="quantity-controls">
                    <input type="number" value="${data.quantity}" min="1" 
                        class="quantity-input" onchange="updateComponentQuantity(this)">
                </div>` : ''}
            </div>
            <button class="remove-btn" onclick="this.closest('.component-card').remove(); updatePricing();">
                <i class="ti ti-x"></i>
            </button>
        `;
        
        grid.querySelector('.empty-state')?.remove();
        grid.appendChild(card);
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        setTimeout(() => {
            card.style.transition = 'all 0.3s ease-out';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 10);
    }

    // Price calculation
    window.updatePricing = async () => {
        const priceElement = document.getElementById('packPrice');
        let total = parseFloat(priceElement.value) || 0;
        
        // Animate price update
        priceElement.parentElement.classList.add('updating');
        await new Promise(resolve => setTimeout(resolve, 300));
        
        // Calculate new total
        document.querySelectorAll('.component-card').forEach(card => {
            // In real implementation, fetch actual prices from data attributes
            const type = card.dataset.type;
            const quantity = card.querySelector('.quantity-input')?.value || 1;
            total += type === 'Material' ? 50 * quantity : 
                    type === 'Location' ? 200 :
                    75; // Personnel
        });

        // Animate value change
        priceElement.value = total.toFixed(2);
        priceElement.parentElement.classList.remove('updating');
    };

    // Toast notifications
    window.showToast = (message, type = 'success') => {
        const toast = document.createElement('div');
        toast.className = `toast-notification ${type}`;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.transform = 'translateY(100%)';
            setTimeout(() => toast.remove(), 500);
        }, 3000);
    };
});