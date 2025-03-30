document.addEventListener('DOMContentLoaded', function() {
    // Sticky Navigation
    const packNav = document.getElementById('packNav');
    const headerHeight = document.querySelector('.pack-header').offsetHeight;

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerHeight - 100) {
            packNav.classList.add('scrolled');
        } else {
            packNav.classList.remove('scrolled');
        }
    });

    // Like Button Functionality
    const likeBtn = document.getElementById('likeBtn');
    let isLiked = false;

    likeBtn.addEventListener('click', () => {
        isLiked = !isLiked;
        likeBtn.classList.toggle('liked');
        const icon = likeBtn.querySelector('i');
        icon.className = isLiked ? 'ti ti-heart-filled me-1' : 'ti ti-heart me-1';
        
        // Animate the like count
        const likeCount = document.querySelector('.like-count');
        if (likeCount) {
            const currentCount = parseInt(likeCount.textContent);
            likeCount.textContent = isLiked ? currentCount + 1 : currentCount - 1;
            likeCount.classList.add('animate__animated', 'animate__heartBeat');
            setTimeout(() => {
                likeCount.classList.remove('animate__animated', 'animate__heartBeat');
            }, 1000);
        }
    });

    // Share Button Functionality
    const shareBtn = document.getElementById('shareBtn');
    shareBtn.addEventListener('click', async () => {
        try {
            if (navigator.share) {
                await navigator.share({
                    title: document.title,
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const tempInput = document.createElement('input');
                tempInput.value = window.location.href;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                
                // Show toast notification
                const toast = document.createElement('div');
                toast.className = 'toast-notification';
                toast.textContent = 'Link copied to clipboard!';
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }
        } catch (err) {
            console.error('Error sharing:', err);
        }
    });

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Initialize Tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});