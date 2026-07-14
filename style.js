/* ===========================
   LOADER
   =========================== */
window.addEventListener('load', () => {
    const loader = document.querySelector('.loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('hidden');
        }, 500);
    }
});

/* ===========================
   THEME TOGGLE
   =========================== */
const themeBtn = document.getElementById('theme-btn');
const html = document.documentElement;

// Check for saved theme preference or default to light mode
const currentTheme = localStorage.getItem('theme') || 'light';
html.setAttribute('data-theme', currentTheme);
updateThemeButton(currentTheme);

themeBtn?.addEventListener('click', () => {
    const theme = html.getAttribute('data-theme');
    const newTheme = theme === 'light' ? 'dark' : 'light';
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateThemeButton(newTheme);
});

function updateThemeButton(theme) {
    themeBtn.textContent = theme === 'light' ? '🌙' : '☀️';
}

/* ===========================
   LANGUAGE SWITCHING
   =========================== */
const translations = {
    fr: {
        home: 'Accueil',
        about: 'À propos',
        skills: 'Compétences',
        timeline: 'Parcours',
        portfolio: 'Portfolio',
        services: 'Services',
        contact: 'Contact'
    },
    en: {
        home: 'Home',
        about: 'About',
        skills: 'Skills',
        timeline: 'Journey',
        portfolio: 'Portfolio',
        services: 'Services',
        contact: 'Contact'
    }
};

const langBtns = document.querySelectorAll('.lang-btn');
langBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const lang = e.target.getAttribute('data-lang');
        document.documentElement.setAttribute('lang', lang);
        localStorage.setItem('language', lang);
    });
});

/* ===========================
   PHOTO PARALLAX EFFECT
   =========================== */

window.addEventListener("load",()=>{

const left=document.querySelector(".left-door");

const right=document.querySelector(".right-door");

setTimeout(()=>{

window.addEventListener("load",()=>{

    const left=document.querySelector(".left-door");
    const right=document.querySelector(".right-door");

    if(left && right){

        setTimeout(()=>{

            left.classList.add("open-left");
            right.classList.add("open-right");

        },800);

    }

});

right.style.transform="perspective(1200px) rotateY(115deg)";

},1200);

});

const glass = document.querySelector(".glass-photo");
const leftDoor = document.querySelector(".left-door");
const rightDoor = document.querySelector(".right-door");

if(glass && leftDoor && rightDoor){

    function openDoors(){

        leftDoor.classList.add("open-left");
        rightDoor.classList.add("open-right");

    }

    function closeDoors(){

        leftDoor.classList.remove("open-left");
        rightDoor.classList.remove("open-right");

    }

    window.addEventListener("load",()=>{

        setTimeout(openDoors,1200);

    });

    glass.addEventListener("mouseenter",openDoors);

    glass.addEventListener("mouseleave",closeDoors);

}

const photo = document.querySelector(".glass-photo");

if(photo){

photo.addEventListener("mousemove",(e)=>{

const rect=photo.getBoundingClientRect();

const x=e.clientX-rect.left;

const y=e.clientY-rect.top;

photo.style.setProperty("--x",x+"px");

photo.style.setProperty("--y",y+"px");

});

}

/* ===========================
   TYPING EFFECT
   =========================== */
const typingElement = document.getElementById('typing-text');
if (typingElement) {
    const texts = [
        'Développeur Full Stack',
        'Administrateur Systèmes',
        'Consultant IT',
        'Créateur Digital'
    ];
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        const currentText = texts[textIndex];
        
        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }

        typingElement.textContent = currentText.substring(0, charIndex);

        if (!isDeleting && charIndex === currentText.length) {
            isDeleting = true;
            setTimeout(type, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length;
            setTimeout(type, 500);
        } else {
            setTimeout(type, isDeleting ? 50 : 100);
        }
    }

    type();
}

/* ===========================
   MOUSE GLOW EFFECT
   =========================== */
const mouseGlow = document.querySelector('.mouse-glow');
if (mouseGlow) {
    mouseGlow.style.display = 'block';
    document.addEventListener('mousemove', (e) => {
        mouseGlow.style.left = e.clientX - 150 + 'px';
        mouseGlow.style.top = e.clientY - 150 + 'px';
    });
}

/* ===========================
   SCROLL ANIMATIONS
   =========================== */
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.skill-card, .service-card, .project-card, .timeline-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

/* ===========================
   SMOOTH SCROLL
   =========================== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

/* ===========================
   CONTACT FORM
   =========================== */
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        // Simple validation
        if (data.name && data.email && data.subject && data.message) {
            // Show success message
            alert('Merci! Votre message a été reçu. Je vous répondrai bientôt.');
            contactForm.reset();
        } else {
            alert('Veuillez remplir tous les champs.');
        }
    });
}

/* ===========================
   NAVBAR MOBILE MENU
   =========================== */
const hamburger = document.querySelector('.hamburger');
const navbar = document.querySelector('.navbar');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
}

/* ===========================
   SMOOTH COUNTER ANIMATION
   =========================== */
function animateCounter(element, target, duration = 2000) {
    let current = 0;
    const increment = target / (duration / 16);
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current) + '+';
        }
    }, 16);
}

/* ===========================
   PROGRESS BAR ANIMATION
   =========================== */
const progressBars = document.querySelectorAll('.progress');
progressBars.forEach(bar => {
    const width = bar.style.width;
    bar.style.width = '0%';
    
    setTimeout(() => {
        bar.style.transition = 'width 1.5s ease-out';
        bar.style.width = width;
    }, 100);
});

/* ===========================
   PARALLAX EFFECT
   =========================== */
document.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const aurora = document.querySelector('.aurora');
    if (aurora) {
        aurora.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

/* ===========================
   ACCESSIBILITY
   =========================== */
// Add keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        const navbar = document.querySelector('.navbar');
        if (navbar?.classList.contains('active')) {
            navbar.classList.remove('active');
        }
    }
});

console.log('Portfolio loaded successfully! 🚀');



const projects=[

{

title:"Plateforme RH Nationale",

description:"Développement d'une plateforme RH moderne basée sur Laravel et IA.",

progress:42,

date:"Livraison : Août 2026"

},

{

title:"Application Mobile Santé",

description:"Développement Flutter destiné aux centres de santé.",

progress:81,

date:"Tests utilisateurs"

},

{

title:"Portail e-Gouvernement",

description:"Transformation numérique des services administratifs.",

progress:63,

date:"Déploiement"

},

{

title:"ERP Entreprise",

description:"Gestion RH, Finance, Stock et Comptabilité.",

progress:92,

date:"Validation finale"

},

{

title:"Portfolio Premium",

description:"Nouvelle génération du portfolio Lionel Concept.",

progress:70,

date:"En cours"

}

];

let current=0;


const counter=document.getElementById("widget-counter");

function showProject(){

const p=projects[current];

widget.innerHTML=`

<div class="project-slide">

<h3>${p.title}</h3>

<p>${p.description}</p>

<div class="progress-widget">

<span style="width:${p.progress}%"></span>

</div>

<p style="margin-top:15px;color:#38BDF8;font-weight:bold;">

${p.progress}% terminé

</p>

<p>

${p.date}

</p>

</div>

`;

counter.textContent=`${current+1} / ${projects.length}`;

current++;

if(current>=projects.length){

current=0;

}

}

showProject();

setInterval(showProject,6000);


const widget = document.getElementById("project-widget");

if(widget){

    // tout le code du widget ici

}