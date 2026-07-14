const translations = {
    fr: {
        home: "Accueil",
        about: "À propos",
        skills: "Compétences",
        timeline: "Parcours",
        portfolio: "Portfolio",
        services: "Services",
        contact: "Contact"
    },
    en: {
        home: "Home",
        about: "About",
        skills: "Skills",
        timeline: "Journey",
        portfolio: "Portfolio",
        services: "Services",
        contact: "Contact"
    }
};

document
.querySelectorAll(".lang-btn")
.forEach(btn => {

    btn.addEventListener(
        "click",
        () => {

            const lang =
                btn.dataset.lang;

            document
            .querySelectorAll(
                "[data-i18n]"
            )
            .forEach(el => {

                const key =
                    el.dataset.i18n;

                el.textContent =
                    translations[
                        lang
                    ][key];
            });
        }
    );
});       