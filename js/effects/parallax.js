class Parallax {

    constructor() {

        this.photo =
            document.querySelector(
                ".photo-circle"
            );

        if (!this.photo) return;

        window.addEventListener(
            "mousemove",
            e => {

                const x =
                    (
                        e.clientX /
                        window.innerWidth
                    ) *
                    20;

                const y =
                    (
                        e.clientY /
                        window.innerHeight
                    ) *
                    20;

                this.photo.style.transform =
                    `translate(${x}px, ${y}px)`;
            }
        );
    }
}