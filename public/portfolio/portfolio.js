const navigation = document.getElementById('navigation');
const menuButton = document.getElementById('menu-toggle');
const mobileQuery = window.matchMedia('(max-width: 800px)');
function setMenu(open) {
    navigation.hidden = mobileQuery.matches && !open;
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
}
function resetMenu() { setMenu(false); }
resetMenu();
mobileQuery.addEventListener('change', resetMenu);
menuButton.addEventListener('click', () => setMenu(menuButton.getAttribute('aria-expanded') !== 'true'));
navigation.addEventListener('click', (event) => {
    if (event.target.closest('a')) setMenu(false);
});
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
        setMenu(false);
        menuButton.focus();
    }
});
const themeButton = document.getElementById('theme-toggle');
function applyTheme(theme) {
    document.documentElement.dataset.theme = theme;
    themeButton.textContent = theme === 'dark' ? 'Thème clair' : 'Thème sombre';
    themeButton.setAttribute('aria-label', `Activer le thème ${theme === 'dark' ? 'clair' : 'sombre'}`);
    themeButton.setAttribute('aria-pressed', String(theme === 'light'));
}
try { applyTheme(localStorage.getItem('pf-theme') === 'light' ? 'light' : 'dark'); }
catch { applyTheme('dark'); }
themeButton.addEventListener('click', () => {
    const theme = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
    applyTheme(theme);
    try { localStorage.setItem('pf-theme', theme); } catch { /* Theme still works without storage. */ }
});
const filters = document.querySelectorAll('[data-filter]');
const projects = document.querySelectorAll('[data-category]');
filters.forEach((button) => button.addEventListener('click', () => {
    filters.forEach((item) => item.setAttribute('aria-pressed', String(item === button)));
    let count = 0;
    projects.forEach((project) => {
        project.hidden = button.dataset.filter !== 'all' && project.dataset.category !== button.dataset.filter;
        if (!project.hidden) count += 1;
    });
    document.getElementById('filter-status').textContent = `${count} réalisation${count > 1 ? 's' : ''} affichée${count > 1 ? 's' : ''}.`;
}));
const form = document.getElementById('contact-form');
// Without JavaScript the form remains usable through the direct email link.
form.addEventListener('submit', async (event) => {
    event.preventDefault();
    if (!form.reportValidity()) return;
    const data = new FormData(form);
    const status = document.getElementById('contact-status');
    const submit = form.querySelector('button[type="submit"]');
    if (form.dataset.server === 'true') {
        if (submit.disabled) return;
        submit.disabled = true;
        status.textContent = 'Transmission en cours…';
        try {
            const response = await fetch(form.action, {
                method: 'POST', body: data, credentials: 'same-origin',
                headers: { Accept: 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            });
            let result;
            try { result = await response.json(); } catch { throw new Error('invalid-response'); }
            if (response.status === 422) {
                status.textContent = Object.values(result.errors || {}).flat().join(' ');
            } else if (response.status === 429) {
                status.textContent = 'Trop de demandes. Veuillez patienter une minute avant de réessayer.';
            } else if (!response.ok) {
                throw new Error('delivery-failed');
            } else {
                status.textContent = result.message;
                form.reset();
            }
        } catch {
            status.textContent = 'La transmission n’a pas pu être confirmée. Votre saisie est conservée. Vous pouvez me contacter directement par e-mail ou téléphone.';
        } finally { submit.disabled = false; }
        return;
    }
    // Static GitHub Pages fallback: no server or SMTP is available here.
    const name = data.get('name').trim();
    const email = data.get('email').trim();
    const subject = data.get('subject').trim();
    const message = data.get('message').trim();
    if (!name || !subject || !message) {
        status.textContent = 'Veuillez renseigner votre nom, un objet et un message.';
        return;
    }
    const body = `${message}\n\n${name}\nAdresse de réponse : ${email}`;
    const uri = `mailto:lionelconcept1@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    document.getElementById('email-fallback').href = uri;
    status.textContent = 'Un brouillon est préparé dans votre messagerie. Envoyez-le depuis cette application. Si elle ne s’ouvre pas, utilisez le lien ci-dessous.';
    window.location.href = uri;
});

function updateClock() {
    document.getElementById('libreville-clock').textContent = new Intl.DateTimeFormat('fr-FR', {
        timeZone: 'Africa/Libreville', hour: '2-digit', minute: '2-digit', second: '2-digit'
    }).format(new Date());
}
updateClock();
setInterval(updateClock, 1000);
document.getElementById('year').textContent = new Date().getFullYear();
if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            navigation.querySelectorAll('a').forEach((link) => {
                if (link.hash === `#${entry.target.id}`) link.setAttribute('aria-current', 'location');
                else link.removeAttribute('aria-current');
            });
        });
    }, { rootMargin: '-15% 0px -60% 0px' });
    document.querySelectorAll('main section[id]').forEach((section) => observer.observe(section));
}
