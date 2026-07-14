/**
 * Project: Portfolio Lionel Concept
 * Version: 1.0.0
 * Author: Lionel Concept
 * Description: Détection automatique de la langue
 */

class BrowserLanguage {
    constructor() {
        this.detect();
    }

    detect() {

        const lang =
            navigator.language
                .toLowerCase()
                .startsWith("fr")
            ? "fr"
            : "en";

        const button =
            document.querySelector(
                `[data-lang="${lang}"]`
            );

        if (button) {
            button.click();
        }
    }
}