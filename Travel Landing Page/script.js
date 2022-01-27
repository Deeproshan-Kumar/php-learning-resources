function toggleMenu() {
            let navbarToggler = document.getElementById('navbar-toggler');
            navbarToggler.classList.toggle('active');
        }

        window.addEventListener('scroll', function () {
            let header = document.getElementById('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });