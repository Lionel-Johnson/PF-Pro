/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Animations Hero
 */

class Hero {
    constructor() {
        this.hero = document.querySelector(".hero");
        this.init();
    }

    init() {
        this.heroAnimation();
    }

    heroAnimation() {
        if (!this.hero) return;

        this.hero.classList.add("hero-loaded");
    }
}