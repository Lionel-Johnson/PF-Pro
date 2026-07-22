/*
|--------------------------------------------------------------------------
| SERVICES PREMIUM
|--------------------------------------------------------------------------
*/

document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".service-card");

    if (!cards.length) return;

    /*
    |--------------------------------------------------------------------------
    | Apparition au scroll
    |--------------------------------------------------------------------------
    */

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {

        threshold: .15

    });

    cards.forEach(card => observer.observe(card));

    /*
    |--------------------------------------------------------------------------
    | Effet 3D souris
    |--------------------------------------------------------------------------
    */

    cards.forEach(card => {

        card.addEventListener("mousemove", e => {

            const rect = card.getBoundingClientRect();

            const x = e.clientX - rect.left;

            const y = e.clientY - rect.top;

            const rotateY = ((x / rect.width) - 0.5) * 10;

            const rotateX = ((0.5 - (y / rect.height))) * 10;

            card.style.transform = `
                perspective(1000px)
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                translateY(-8px)
            `;

        });

        card.addEventListener("mouseleave", () => {

            card.style.transform = "";

        });

    });

});