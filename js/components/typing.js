class Typing {

    constructor() {

        this.element =
            document.getElementById(
                "typing-text"
            );

        this.words = [
            "Administrateur Systèmes & Réseaux",
            "Développeur Web & Mobile",
            "Consultant en Informatique",
            "Contrôleur TIC",
            "UI/UX Designer",
            "Créateur Digital",
            "Formateur en bureautique"
        ];

        this.index = 0;

        this.start();
    }

    start() {

        if (!this.element) return;

        setInterval(() => {

            this.element.textContent =
                this.words[
                    this.index
                ];

            this.index =
                (
                    this.index + 1
                ) %
                this.words.length;

        }, 3000);
    }
}