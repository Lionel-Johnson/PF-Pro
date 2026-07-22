import gsap from "gsap";

document.addEventListener('DOMContentLoaded', () => {

    gsap.from(".hero-title",{

        opacity:0,

        y:60,

        duration:1

    });

    gsap.from(".hero-subtitle",{

        opacity:0,

        y:30,

        duration:1,

        delay:.3

    });

    gsap.from(".hero-buttons",{

        opacity:0,

        y:20,

        duration:1,

        delay:.6

    });

});