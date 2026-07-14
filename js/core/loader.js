/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Gestion du Loader
 */

class Loader {
    constructor() {
        this.loader = document.querySelector(".loader");
        this.init();
    }

    init() {
        window.addEventListener("load", () => {
            setTimeout(() => {
                if (this.loader) {
                    this.loader.classList.add("hide");
                }
            }, 1000);
        });
    }
}