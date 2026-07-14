/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Gestion de la Navbar
 */

class Navbar {
    constructor() {
        this.navbar = document.querySelector(".navbar");
        this.links = document.querySelectorAll("nav a");

        this.init();
    }

    init() {
        this.scrollEffect();
        this.activeLinks();
    }

    scrollEffect() {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                this.navbar.classList.add("navbar-scrolled");
            } else {
                this.navbar.classList.remove("navbar-scrolled");
            }
        });
    }

    activeLinks() {
        this.links.forEach(link => {
            link.addEventListener("click", () => {
                this.links.forEach(item =>
                    item.classList.remove("active")
                );

                link.classList.add("active");
            });
        });
    }
}