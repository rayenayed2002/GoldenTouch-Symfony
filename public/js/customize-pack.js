$('#customizePackForm').on('submit', function(e) {
    e.preventDefault();
    
    const formData = {
        packName: $('#packName').val(),
        packCategory: $('#packCategory').val(),
        packDescription: $('#packDescription').val(),
        packPrice: $('#packPrice').val(),
        packCapacity: $('#packCapacity').val(),
        selectedItems: getSelectedItems()
    };

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: JSON.stringify(formData),
        contentType: 'application/json',
        success: function(response) {
            if (response.success) {
                toastr.success(response.message);
                setTimeout(() => {
                    window.location.href = '/admin/notifications';
                }, 1500);
            } else {
                toastr.error(response.message);
            }
        },
        error: function(xhr) {
            toastr.error(xhr.responseJSON?.message || 'An error occurred');
        }
    });
});

function getSelectedItems() {
    const items = [];
    $('#selectedItemsTable tbody tr').each(function() {
        items.push({
            type: $(this).data('type'),
            id: $(this).data('id'),
            quantity: $(this).find('.item-quantity').val() || 1
        });
    });
    return items;
}