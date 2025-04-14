// Notification Management
const NotificationManager = {
    init() {
        this.unreadCount = 5; // Initial count from template
        this.bindEvents();
        this.updateNotificationCount();
    },

    bindEvents() {
        // Mark all as read
        document.querySelector('.dropdown-notifications-all')?.addEventListener('click', () => this.markAllAsRead());

        // Individual notification actions
        document.querySelectorAll('.dropdown-notifications-item').forEach(item => {
            const archiveBtn = item.querySelector('.dropdown-notifications-archive');
            if (archiveBtn) {
                archiveBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.deleteNotification(item);
                });
            }
        });
    },

    updateNotificationCount() {
        const badges = document.querySelectorAll('.badge-notifications');
        badges.forEach(badge => {
            badge.textContent = this.unreadCount;
            if (this.unreadCount === 0) {
                badge.style.display = 'none';
            } else {
                badge.style.display = 'inline-block';
            }
        });
    },

    markAllAsRead() {
        const items = document.querySelectorAll('.dropdown-notifications-item:not(.marked-as-read)');
        items.forEach(item => {
            item.classList.add('marked-as-read');
            const dot = item.querySelector('.badge-dot');
            if (dot) dot.style.display = 'none';
        });
        this.unreadCount = 0;
        this.updateNotificationCount();

        // Show success message
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'All notifications marked as read',
            showConfirmButton: false,
            timer: 1500
        });
    },

    deleteNotification(item) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-primary me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then((result) => {
            if (result.isConfirmed) {
                if (!item.classList.contains('marked-as-read')) {
                    this.unreadCount--;
                    this.updateNotificationCount();
                }
                item.remove();
                
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted!',
                    text: 'Notification has been deleted.',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    }
};

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => NotificationManager.init());