class Navbar {

    constructor() {

        this.navbar = document.querySelector('.lc-navbar');

        this.init();

    }

    init() {

        if (!this.navbar) return;

        window.addEventListener('scroll', () => {

            if (window.scrollY > 40) {

                this.navbar.classList.add('scrolled');

            } else {

                this.navbar.classList.remove('scrolled');

            }

        });

    }

}

new Navbar();