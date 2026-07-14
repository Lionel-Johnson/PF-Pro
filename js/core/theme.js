class Theme {

    constructor() {
        this.button =
            document.getElementById(
                "theme-btn"
            );

        this.events();
    }

    events() {

        if (!this.button) return;

        this.button.addEventListener(
            "click",
            () => {

                document.body.classList.toggle(
                    "light-theme"
                );

            }
        );
    }
}