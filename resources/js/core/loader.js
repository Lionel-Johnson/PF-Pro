class Loader {

    constructor() {

        window.addEventListener('load', () => {

            this.hide();

        });

    }

    hide() {

        const loader = document.querySelector('.lc-loader');

        if (!loader) return;

        loader.classList.add('hide');

        setTimeout(() => {

            loader.remove();

        }, 500);

    }

}

new Loader();