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

const photo=document.querySelector(".glass-photo");

document.addEventListener("mousemove",(e)=>{

    const x=(window.innerWidth/2-e.clientX)/40;

    const y=(window.innerHeight/2-e.clientY)/40;

    photo.style.transform=

        `rotateY(${x}deg) rotateX(${-y}deg)`;

});




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
