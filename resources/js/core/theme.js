class ThemeManager {

    constructor() {

        this.button = document.querySelector('[data-theme-toggle]');

        this.init();

    }

    init() {

        const saved = localStorage.getItem('theme');

        if (saved) {

            document.documentElement.dataset.theme = saved;

        }

        if (!this.button) return;

        this.button.addEventListener('click', () => {

            this.toggle();

        });

    }

    toggle() {

        const current = document.documentElement.dataset.theme;

        const next = current === 'dark' ? 'light' : 'dark';

        document.documentElement.dataset.theme = next;

        localStorage.setItem('theme', next);

    }

}

new ThemeManager();