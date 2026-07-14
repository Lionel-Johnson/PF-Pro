const translations = {

    fr: {
        home: "Accueil",
        about: "À propos",
        skills: "Compétences",
        timeline: "Parcours",
        portfolio: "Portfolio",
        services: "Services",
        contact: "Contact",

        heroBadge: "Bienvenue sur mon portfolio",
        heroTitle: "Lionel Concept",
        heroSubtitle: "Administrateur Systèmes & Réseaux",
        heroDescription: "Concevoir, sécuriser et accompagner la transformation numérique.",

        downloadCV: "Télécharger le CV",
        contactMe: "Me contacter",

        experience: "Années d'expérience",
        projects: "Projets réalisés",
        available: "Disponible"
    },

    en: {
        home: "Home",
        about: "About",
        skills: "Skills",
        timeline: "Experience",
        portfolio: "Portfolio",
        services: "Services",
        contact: "Contact",

        heroBadge: "Welcome to my portfolio",
        heroTitle: "Lionel Concept",
        heroSubtitle: "Systems & Network Administrator",
        heroDescription: "Designing, securing and supporting digital transformation.",

        downloadCV: "Download Resume",
        contactMe: "Contact Me",

        experience: "Years of Experience",
        projects: "Completed Projects",
        available: "Available"
    }

};

function translatePage(lang){

    document.documentElement.lang = lang;

    document
    .querySelectorAll("[data-i18n]")
    .forEach(element=>{

        const key = element.dataset.i18n;

        if(translations[lang] && translations[lang][key]){

            element.textContent = translations[lang][key];

        }

    });

    localStorage.setItem("language",lang);

}

document
.querySelectorAll(".lang-btn")
.forEach(button=>{

    button.addEventListener("click",()=>{

        translatePage(button.dataset.lang);

    });

});

const savedLanguage =
    localStorage.getItem("language");

const browserLanguage =
    navigator.language.startsWith("fr")
        ? "fr"
        : "en";

translatePage(savedLanguage || browserLanguage);