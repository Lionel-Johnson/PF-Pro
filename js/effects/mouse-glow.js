class MouseGlow {

    constructor() {

        this.glow =
            document.querySelector(
                ".mouse-glow"
            );

        if (!this.glow) return;

        document.addEventListener(
            "mousemove",
            e => {

                this.glow.style.left =
                    e.clientX + "px";

                this.glow.style.top =
                    e.clientY + "px";

            }
        );
    }
}