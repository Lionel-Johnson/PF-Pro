class Cursor {

    constructor() {

        this.cursor = document.querySelector('.lc-cursor');

        if (!this.cursor) return;

        this.events();

    }

    events() {

        document.addEventListener('mousemove', e => {

            this.cursor.style.left = `${e.clientX}px`;

            this.cursor.style.top = `${e.clientY}px`;

        });

    }

}

new Cursor();