class Reveal {

    constructor() {

        this.elements =
            document.querySelectorAll(
                "section"
            );

        this.init();
    }

    init() {

        const observer =
            new IntersectionObserver(
                entries => {

                    entries.forEach(
                        entry => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    "active"
                                );

                            }
                        }
                    );

                },
                {
                    threshold: .15
                }
            );

        this.elements.forEach(
            el => {

                el.classList.add(
                    "reveal"
                );

                observer.observe(
                    el
                );
            }
        );
    }
}