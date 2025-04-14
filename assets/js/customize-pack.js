document.addEventListener('DOMContentLoaded', function() {
    // Initialize Select2
    if (typeof $.fn.select2 !== 'undefined') {
        $('.select2').select2();
    }

    // Global variables
    let selectedItems = [];
    const basePrice = parseFloat(document.querySelector('#packPrice').value) || 0;

    // Initialize total price with base price
    updateTotalPrice();

    // Material selection handling
    const materielSelect = document.querySelector('#materielSelect');
    const materielQuantity = document.querySelector('#materielQuantity');
    const addMaterielBtn = document.querySelector('#addMaterielBtn');

    if (addMaterielBtn) {
        addMaterielBtn.addEventListener('click', function() {
            const selectedOption = materielSelect.options[materielSelect.selectedIndex];
            if (!selectedOption.value) return;

            const quantity = parseInt(materielQuantity.value);
            if (quantity < 1) return;

            const available = parseInt(selectedOption.dataset.available);
            if (quantity > available) {
                alert(`Only ${available} items available`);
                return;
            }

            const materiel = {
                id: selectedOption.value,
                type: 'Materiel',
                name: selectedOption.dataset.name,
                details: selectedOption.dataset.details,
                price: parseFloat(selectedOption.dataset.price),
                quantity: quantity
            };

            addItemToSelection(materiel);
            updateUI();
        });
    }

    // Add item to selection
    function addItemToSelection(item) {
        const existingItem = selectedItems.find(i => i.id === item.id && i.type === item.type);
        if (existingItem) {
            existingItem.quantity += item.quantity;
        } else {
            selectedItems.push(item);
        }
        updateTotalPrice();
    }

    // Remove item from selection
    function removeItem(id, type) {
        selectedItems = selectedItems.filter(item => !(item.id === id && item.type === type));
        updateUI();
        updateTotalPrice();
    }

    // Update UI with selected items
    function updateUI() {
        const tbody = document.querySelector('#selectedItemsBody');
        if (!tbody) return;

        if (selectedItems.length === 0) {
            tbody.innerHTML = `
                <tr class="no-items-row">
                    <td colspan="5" class="text-center">Aucun élément sélectionné</td>
                </tr>`;
            return;
        }

        tbody.innerHTML = selectedItems.map(item => `
            <tr>
                <td>${item.type}</td>
                <td>${item.name}</td>
                <td>${item.details}</td>
                <td>${(item.price * item.quantity).toFixed(2)}€</td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="removeItem('${item.id}', '${item.type}')">
                        <i class="ti ti-trash"></i>
                    </button>
                </td>
            </tr>
        `).join('');

        // Update summary section
        updateSummary();
    }

    // Update summary section
    function updateSummary() {
        const summaryItems = document.querySelector('#summaryItems');
        if (!summaryItems) return;

        let summaryHTML = `
            <div class="summary-item">
                <span>Pack de base:</span>
                <span>${basePrice.toFixed(2)}€</span>
            </div>`;

        selectedItems.forEach(item => {
            summaryHTML += `
                <div class="summary-item">
                    <span>${item.name} (${item.quantity}x):</span>
                    <span>${(item.price * item.quantity).toFixed(2)}€</span>
                </div>`;
        });

        summaryItems.innerHTML = summaryHTML;
    }

    // Update total price
    function updateTotalPrice() {
        const total = selectedItems.reduce((sum, item) => sum + (item.price * item.quantity), basePrice);
        const totalPriceElement = document.querySelector('#totalPrice');
        if (totalPriceElement) {
            totalPriceElement.textContent = `${total.toFixed(2)}€`;
        }
    }

    // Form validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                alert('Please fill in all required fields');
                return;
            }

            // Prepare form data
            const formData = new FormData(form);
            formData.append('selectedItems', JSON.stringify(selectedItems));

            // Submit form
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirectUrl;
                } else {
                    alert(data.message || 'An error occurred');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while saving the pack');
            });
        });
    }

    // Make removeItem function globally available
    window.removeItem = removeItem;
});