/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Animation Aurora
 */

class Aurora {
    constructor() {

        this.aurora =
            document.querySelector(
                ".aurora"
            );

        this.offset = 0;

        this.animate();
    }

    animate() {

        if (!this.aurora) return;

        this.offset += 0.2;

        this.aurora.style.transform =
            `translateY(
                ${Math.sin(
                    this.offset
                ) * 15}px
            )`;

        requestAnimationFrame(
            () => this.animate()
        );
    }
}