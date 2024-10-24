document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const navItems = document.querySelectorAll('.nav-item');

    menuToggle.addEventListener('click', function () {
        navMenu.classList.toggle('active');
    });

    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if(window.innerWidth <= 768) {
                const submenu = this.querySelector('.submenu');
                if(submenu) {
                    e.preventDefault();
                    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                }
            }
        });
    });
});