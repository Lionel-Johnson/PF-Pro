/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Filtrage Portfolio
 */

class PortfolioFilter {
    constructor() {
        this.buttons =
            document.querySelectorAll(
                "[data-filter]"
            );

        this.projects =
            document.querySelectorAll(
                ".project-card"
            );

        this.init();
    }

    init() {
        if (!this.buttons.length) return;

        this.buttons.forEach(button => {
            button.addEventListener(
                "click",
                () => {

                    const filter =
                        button.dataset.filter;

                    this.filterProjects(
                        filter
                    );
                }
            );
        });
    }

    filterProjects(filter) {
        this.projects.forEach(project => {

            if (
                filter === "all" ||
                project.dataset.category === filter
            ) {

                project.style.display =
                    "block";

            } else {

                project.style.display =
                    "none";

            }
        });
    }
}