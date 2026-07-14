/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Effet Tilt 3D
 */

class Tilt {
    constructor() {

        this.cards =
            document.querySelectorAll(
                ".glass"
            );

        this.init();
    }

    init() {

        this.cards.forEach(card => {

            card.addEventListener(
                "mousemove",
                e => {

                    const rect =
                        card.getBoundingClientRect();

                    const x =
                        e.clientX - rect.left;

                    const y =
                        e.clientY - rect.top;

                    const rotateX =
                        (
                            y /
                            rect.height -
                            0.5
                        ) * -20;

                    const rotateY =
                        (
                            x /
                            rect.width -
                            0.5
                        ) * 20;

                    card.style.transform =
                        `
                        perspective(1000px)
                        rotateX(${rotateX}deg)
                        rotateY(${rotateY}deg)
                        `;
                }
            );

            card.addEventListener(
                "mouseleave",
                () => {

                    card.style.transform =
                        `
                        perspective(1000px)
                        rotateX(0)
                        rotateY(0)
                        `;
                }
            );
        });
    }
}