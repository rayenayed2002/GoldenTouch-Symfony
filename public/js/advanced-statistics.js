// Show Advanced Stat Details Modal
function showAdvancedStatDetails(type) {
  // Only 'packs' is implemented for now
  if (type === 'packs') {
    const modal = document.getElementById('statDetailsModal');
    if (modal) {
      const bsModal = new bootstrap.Modal(modal);
      bsModal.show();
    }
  }
  // Add more types (e.g., 'users') if needed
}
