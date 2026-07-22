const words=[

"Applications Web",

"Sites Internet",

"Solutions Cloud",

"Expériences Digitales",

"Plateformes Modernes"

];

let i=0;

let j=0;

let current="";

let isDeleting=false;

const target=document.getElementById("typed-text");

function type(){

if(!target) return;

current=words[i];

if(isDeleting){

target.textContent=current.substring(0,j--);

}else{

target.textContent=current.substring(0,j++);

}

if(!isDeleting && j===current.length+1){

isDeleting=true;

setTimeout(type,1200);

return;

}

if(isDeleting && j===0){

isDeleting=false;

i=(i+1)%words.length;

}

setTimeout(type,isDeleting?45:90);

}

type();

const words = [

    "Applications Web",

    "Sites Internet",

    "Solutions Cloud",

    "Cybersécurité",

    "Transformation Digitale",

    "Intelligence Artificielle",

    "Infrastructure Réseau",

    "Développement Laravel",

    "Production Audiovisuelle"

];

const typed = document.getElementById("typed-text");

let word = 0;
let letter = 0;
let deleting = false;

function typingEffect(){

    if(!typed) return;

    const current = words[word];

    typed.textContent = current.substring(0, letter);

    if(!deleting){

        letter++;

        if(letter > current.length){

            deleting = true;

            setTimeout(typingEffect,1600);

            return;

        }

    }else{

        letter--;

        if(letter < 0){

            deleting = false;

            word++;

            if(word >= words.length){

                word = 0;

            }

        }

    }

    setTimeout(

        typingEffect,

        deleting ? 40 : 85

    );

}

typingEffect();


/*==========================
    VIDEO
==========================*/

const heroVideo = document.getElementById("hero-video");

if(heroVideo){

    document.addEventListener("visibilitychange",()=>{

        if(document.hidden){

            heroVideo.pause();

        }else{

            heroVideo.play();

        }

    });

}


/*==========================
    PARALLAX
==========================*/

const hero = document.querySelector(".hero");

document.addEventListener("mousemove",(e)=>{

    if(!hero) return;

    const x = (window.innerWidth/2 - e.clientX)/70;

    const y = (window.innerHeight/2 - e.clientY)/70;

    hero.style.backgroundPosition =
        `${x}px ${y}px`;

});