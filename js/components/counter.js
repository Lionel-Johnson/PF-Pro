/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Compteurs animés
 */

class Counter {
    constructor() {
        this.counters = document.querySelectorAll(
            "[data-counter]"
        );

        this.init();
    }

    init() {
        this.counters.forEach(counter => {
            this.animate(counter);
        });
    }

    animate(counter) {
        const target =
            parseInt(counter.dataset.counter);

        let current = 0;

        const step = () => {
            current += Math.ceil(target / 100);

            if (current > target) {
                current = target;
            }

            counter.textContent =
                current + "+";

            if (current < target) {
                requestAnimationFrame(step);
            }
        };

        step();
    }
}