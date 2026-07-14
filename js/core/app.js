class App {
    constructor() {
        this.init();
    }

    init() {
        new Loader();
        new Theme();
        new Navbar();
        new Hero();
        new Typing();
        new Counter();
        new PortfolioFilter();
        new Tilt();
        new Reveal();
        new Aurora();
        new MouseGlow();
        new Parallax();
        new BrowserLanguage();
    }
}

document.addEventListener(
    "DOMContentLoaded",
    () => new App()
);
