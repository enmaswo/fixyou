import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const wrappers = document.querySelectorAll('.image-wrapper');
    
    // Handle click/touch effect
    wrappers.forEach(wrapper => {
        const originalTilt = wrapper.dataset.tilt;
        
        const addShine = () => {
            wrapper.style.transform = 'rotate(0deg)';
            const shine = document.createElement('div');
            shine.className = 'shine-overlay';
            wrapper.appendChild(shine);
            
            setTimeout(() => {
                shine.remove();
                wrapper.style.transform = `rotate(${originalTilt === 'left' ? '-3' : '3'}deg)`;
            }, 600);
        };
        
        wrapper.addEventListener('mousedown', addShine);
        wrapper.addEventListener('touchstart', (e) => {
            e.preventDefault();
            addShine();
        });
    });
});

 // Scroll Effect
 window.addEventListener('scroll', () => {
    const nav = document.getElementById('navbar');
    nav.classList.toggle('scrolled', window.scrollY > 20);
});

// Mobile Menu Toggle
document.getElementById('mobile-menu-btn').addEventListener('click', () => {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('active');
    document.body.classList.toggle('menu-open');
});
