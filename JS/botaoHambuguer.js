const hamburgerMenu = document.querySelector('.hamburger-menu');
        const navLinks = document.querySelector('.nav');

        hamburgerMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });