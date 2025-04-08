/**
 * Admin Pack Creation Enhancement
 * This script enhances the 'Create New Pack' button to trigger the futuristic pack creation panel
 */

document.addEventListener('DOMContentLoaded', function() {
    // Find the 'Create New Pack' button
    const createPackBtn = document.querySelector('button[data-bs-target="#createPackModal"]');
    
    if (createPackBtn) {
        // Override the default behavior
        createPackBtn.removeAttribute('data-bs-toggle');
        createPackBtn.removeAttribute('data-bs-target');
        
        // Add click event listener
        createPackBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add a subtle animation before redirecting
            createPackBtn.classList.add('animate__animated', 'animate__pulse');
            
            // Create a ripple effect
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.style.position = 'absolute';
            ripple.style.width = '1px';
            ripple.style.height = '1px';
            ripple.style.borderRadius = '50%';
            ripple.style.transform = 'scale(0)';
            ripple.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.style.animation = 'ripple 0.6s linear';
            
            createPackBtn.appendChild(ripple);
            
            // Redirect to the new create pack page after a short delay
            setTimeout(function() {
                window.location.href = '/admin/pack/create';
            }, 300);
        });
        
        // Add ripple animation style
        if (!document.getElementById('ripple-style')) {
            const style = document.createElement('style');
            style.id = 'ripple-style';
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(70);
                        opacity: 0;
                    }
                }
                
                .btn {
                    position: relative;
                    overflow: hidden;
                }
            `;
            document.head.appendChild(style);
        }
        
        console.log('Enhanced Create Pack button with futuristic UI trigger');
    }
});