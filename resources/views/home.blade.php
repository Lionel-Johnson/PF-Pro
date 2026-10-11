<!doctype html>
<html lang="fr" data-theme="dark">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Portfolio de Lionel Brice NGOUVI MOUKENDOU à Libreville : systèmes et réseaux, développement Web et Mobile, communication digitale et expérience RGPL 2026.">
  <meta name="theme-color" content="#081f5c">
  <meta property="og:title" content="Lionel Brice NGOUVI MOUKENDOU — Portfolio professionnel">
  <meta property="og:description" content="Découvrez mon parcours, mes domaines d’expertise et la refonte du site du SCIPT INTERNATIONAL.">
  <meta property="og:type" content="website">
  <link rel="icon" href="{{ asset('portfolio/logo-lionel-concept.jpeg') }}" type="image/jpeg">
  <title>Lionel Brice NGOUVI MOUKENDOU — Portfolio professionnel</title>
  
  <link rel="stylesheet" href="{{ asset('portfolio/portfolio.css') }}">
  <script src="{{ asset('portfolio/portfolio.js') }}" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Aller au contenu</a>
<svg class="icon-definitions" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
  <symbol id="i-code" viewBox="0 0 24 24"><path d="m8 5-7 7 7 7m8-14 7 7-7 7m-3-17-2 20"/></symbol>
  <symbol id="i-monitor" viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M12 17v4M7 21h10"/></symbol>
  <symbol id="i-pen" viewBox="0 0 24 24"><path d="m15 3 6 6-12 12H3v-6Zm-3 3 6 6"/></symbol>
  <symbol id="i-video" viewBox="0 0 24 24"><rect x="2" y="5" width="14" height="14" rx="2"/><path d="m16 9 6-4v14l-6-4"/></symbol>
  <symbol id="i-book" viewBox="0 0 24 24"><path d="M12 5C8 2 4 2 2 3v16c4-1 7-1 10 2 3-3 6-3 10-2V3c-3-1-6-1-10 2Zm0 0v16"/></symbol>
  <symbol id="i-data" viewBox="0 0 24 24"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 4 18 4 18 0V5M3 12c0 4 18 4 18 0"/></symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-6-6 6 6-6 6"/></symbol>
  <symbol id="i-download" viewBox="0 0 24 24"><path d="M12 2v13m-5-5 5 5 5-5M3 16v6h18v-6"/></symbol>
  <symbol id="i-mail" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 5 10 8L22 5"/></symbol>
</svg>
<header class="navbar">
  <div class="container nav-inner">
    <a class="brand" href="#hero"><img src="{{ asset('portfolio/logo-lionel-concept.jpeg') }}" alt="" width="42" height="42"><span>Lionel <b>Concept</b></span></a>
    <button class="menu-toggle" id="menu-toggle" type="button" aria-expanded="false" aria-controls="navigation" aria-label="Ouvrir le menu"><span></span><span></span><span></span></button>
    <nav id="navigation" aria-label="Navigation principale">
      <a href="#about">Profil</a><a href="#experience">Parcours</a><a href="#services">Expertises</a><a href="#portfolio">Réalisations</a><a href="#contact">Formulaire de contact</a>
    </nav>
    <button class="theme-toggle" type="button" id="theme-toggle" aria-label="Activer le thème clair" aria-pressed="false">Thème clair</button>
  </div>
</header>
<main id="main">
<section id="hero" class="hero">
  <div class="container hero-grid">
    <div>
      <div class="eyebrow"><span class="status-dot"></span> Libreville, Gabon · Disponibilité à convenir</div>
      <h1>Lionel Brice<br><span>NGOUVI MOUKENDOU</span></h1>
      <p class="hero-role">Administrateur Systèmes &amp; Réseaux<br>Développeur Web &amp; Mobile · Communication digitale</p>
      <p class="hero-intro">Concevoir, sécuriser et accompagner la transformation numérique. Une expérience de terrain, des compétences techniques et le sens de la transmission.</p>
      <div class="actions"><a class="btn primary" href="{{ asset('cv/CV_Lionel_Brice_NGOUVI_MOUKENDOU.pdf') }}" download><svg class="icon"><use href="#i-download"/></svg>Télécharger mon CV</a><a class="btn outline" href="#contact">Me contacter <svg class="icon"><use href="#i-arrow"/></svg></a></div>
      <p class="small">CV actualisé en octobre 2026 · PDF, 3 pages</p>
    </div>
    <aside class="portrait-card">
      <img class="portrait" src="{{ asset('portfolio/portrait-lionel.jpeg') }}" alt="Portrait de Lionel Brice NGOUVI MOUKENDOU" width="188" height="250" fetchpriority="high">
      <div class="portrait-caption"><span>POSTE ACTUEL</span><strong>Chargé du Développement et de la Communication Digitale</strong><p>SCIPT INTERNATIONAL<br>Depuis le 14 septembre 2026</p></div>
    </aside>
  </div>
</section>
<section id="about" class="section">
  <div class="container about-grid">
    <div><p class="eyebrow">MON PROFIL</p><h2>La technique au service<br>des organisations.</h2></div>
    <div><p>Professionnel de l’informatique, de l’administration et de la communication digitale, j’accompagne les organisations dans la modernisation de leurs outils, la création de solutions numériques et la formation des utilisateurs.</p><p>Au SCIPT INTERNATIONAL, je travaille actuellement à la refonte du site institutionnel sur WordPress et en HTML, CSS et JavaScript. Mon expérience de contrôleur TIC au RGPL 2026 m’a également amené à contrôler la qualité des données et à assister les équipes de terrain.</p><div class="tags"><span>Rigueur</span><span>Polyvalence</span><span>Esprit d’équipe</span><span>Autonomie</span></div></div>
  </div>
</section>
<section id="experience" class="section alternate">
  <div class="container"><div class="section-heading"><div><p class="eyebrow">EXPÉRIENCES PROFESSIONNELLES</p><h2>Mon parcours.</h2></div><a class="text-link" href="{{ asset('cv/CV_Lionel_Brice_NGOUVI_MOUKENDOU.pdf') }}" target="_blank" rel="noopener">Consulter le CV complet <svg class="icon"><use href="#i-arrow"/></svg></a></div>
  <div class="timeline">
    <article><time datetime="2026-09-14">Septembre 2026 – à ce jour</time><div><h3>Chargé du Développement et de la Communication Digitale</h3><p class="company">SCIPT INTERNATIONAL</p><p>Refonte du site sur WordPress et en HTML, CSS et JavaScript. Missions de suivi des prospects, production de contenus, campagnes de recrutement et reporting collectif.</p></div></article>
    <article><time datetime="2026-02-13">Février – mai 2026</time><div><h3>Contrôleur TIC</h3><p class="company">RGPL 2026 · Ministère de la Planification</p><p>Contrôle qualité des données, supervision de leur transmission au serveur central, rapports journaliers, formation des agents recenseurs et assistance technique aux équipes de terrain.</p></div></article>
    <article><time datetime="2024-07">Juillet 2024 – avril 2025</time><div><h3>Infographiste et créateur multimédia</h3><p class="company">LOCASER · Port-Gentil</p><p>Supports commerciaux, réseaux sociaux, photographie, vidéo et représentation auprès des administrations.</p></div></article>
    <article><span class="timeline-date">Freelance</span><div><h3>Consultant en informatique</h3><p class="company">LIONEL CONCEPT</p><p>Développement Web et Mobile, maintenance, assistance, formation en bureautique, création graphique et digitalisation des PME.</p></div></article>
    <article><span class="timeline-date">2022 – 2023</span><div><h3>Développeur Web et Mobile</h3><p class="company">École 241 · Port-Gentil</p><p>Front-End, Back-End, interfaces utilisateurs, bases de données et déploiement d’applications.</p></div></article>
    <article><span class="timeline-date">2016 – 2024</span><div><h3>Maçon · Électricien bâtiment · Coffrage · Chef d’équipe</h3><p class="company">CMS · NUEZ ET FILS · ELBRAG</p><p>Coordination d’équipes, installations et maintenance électriques, réhabilitation d’infrastructures et sécurité sur chantier.</p></div></article>
    <article><span class="timeline-date">2012 – 2015</span><div><h3>Agent administratif</h3><p class="company">DELICAT &amp; FILS</p><p>Gestion administrative et documentaire, contrats, planification, organisation des réunions et suivi des dossiers.</p></div></article>
  </div>
  <details class="education"><summary>Formations, certifications et langues</summary><div class="education-grid"><div><h3>Formations</h3><ul><li>2024 · Cybersécurité — Alphorm</li><li>2023 · Entrepreneuriat — Cabinet Actif Conseil</li><li>2022 · Développement Web et Mobile — École 241</li><li>2012 · Infographie et Audiovisuel — Jasp Speed Management</li><li>2002 · Communication Administrative et Bureautique — École Nationale de Commerce de Port-Gentil</li></ul></div><div><h3>Langues</h3><p>Français : courant<br>Anglais : intermédiaire</p><h3>Outils</h3><p>Microsoft Office, Microsoft 365, Windows, Linux, MySQL, Git, GitHub, SAGE et outils Adobe.</p></div></div></details>
  </div>
</section>
<section id="services" class="section">
  <div class="container"><p class="eyebrow">DOMAINES D’EXPERTISE</p><h2>Des compétences complémentaires.</h2>
  @if($services->isNotEmpty())
  <div class="cards expertise-grid">
  @foreach($services as $service)
    <article class="card">
      <svg class="card-icon"><use href="#i-{{ ['code'=>'code','shield'=>'monitor','palette'=>'pen','video'=>'video','graduation-cap'=>'book','briefcase'=>'data'][$service->icon] ?? 'monitor' }}"/></svg>
      <h3>{{ $service->title }}</h3><p>{{ $service->excerpt ?: $service->description }}</p>
      <a class="text-link" href="#contact">Me contacter</a>
    </article>
  @endforeach
  </div>
  @else
    @include('front.home.expertise-defaults')
  @endif
  </div>
</section>
<section id="portfolio" class="section alternate">
  <div class="container"><p class="eyebrow">RÉALISATIONS</p><h2>Du projet à la pratique.</h2><p class="section-intro">Une sélection de travaux et de missions issus de mon parcours.</p>
  <div class="filters" role="group" aria-label="Filtrer les réalisations"><button type="button" data-filter="all" aria-pressed="true">Toutes</button><button type="button" data-filter="web" aria-pressed="false">Web</button><button type="button" data-filter="data" aria-pressed="false">Données</button><button type="button" data-filter="communication" aria-pressed="false">Communication</button></div>
  <p id="filter-status" class="sr-only" role="status" aria-live="polite"></p>
  <div class="cards project-grid">
    <article class="card project-card" data-category="web"><div class="project-art"><svg><use href="#i-code"/></svg><span>SCIPT INTERNATIONAL</span></div><div class="project-content"><span class="project-label">WEB · PROJET EN COURS</span><h3>Refonte du site institutionnel</h3><p>Organisation des pages et des programmes, actualisation des contenus et harmonisation de la charte graphique. Travail sur WordPress et version HTML, CSS et JavaScript.</p><div class="tags"><span>WordPress</span><span>HTML / CSS / JS</span><span>GitHub</span></div><a class="text-link" href="https://github.com/Lionel-Johnson/scipt-refonte" target="_blank" rel="noopener noreferrer">Voir le dépôt GitHub <svg class="icon"><use href="#i-arrow"/></svg></a><a class="text-link" href="https://sciptinternational.com" target="_blank" rel="noopener noreferrer">Consulter le site de l’école <svg class="icon"><use href="#i-arrow"/></svg></a></div></article>
    <article class="card project-card" data-category="data"><div class="project-art data-art"><svg><use href="#i-data"/></svg><span>RGPL 2026</span></div><div class="project-content"><span class="project-label">DONNÉES · MISSION RÉALISÉE</span><h3>Appui aux opérations de recensement</h3><p>Contrôle qualité des données, supervision de leur transmission, reporting et assistance aux agents recenseurs.</p><div class="tags"><span>Qualité</span><span>Formation</span><span>Terrain</span></div><details><summary>Voir les missions</summary><p>Formation aux outils de collecte, suivi des équipements, rapports journaliers et coordination avec la hiérarchie, du 13 février au 30 mai 2026.</p></details></div></article>
    <article class="card project-card" data-category="communication"><div class="project-art communication-art"><svg><use href="#i-pen"/></svg><span>LOCASER</span></div><div class="project-content"><span class="project-label">COMMUNICATION · 2024–2025</span><h3>Création de supports et de contenus</h3><p>Conception d’affiches, de flyers et de supports commerciaux, animation des réseaux sociaux et production photo et vidéo.</p><div class="tags"><span>Graphisme</span><span>Photo / Vidéo</span></div><details><summary>Voir la mission</summary><p>Infographiste et créateur multimédia à Port-Gentil de juillet 2024 à avril 2025, avec représentation auprès des organismes externes.</p></details></div></article>
  </div></div>
</section>
<section id="contact" class="section">
  <div class="container"><p class="eyebrow">CONTACT</p><h2>Échangeons sur votre besoin.</h2>
  <div class="contact-grid"><div class="contact-information"><h3>Lionel Brice NGOUVI MOUKENDOU</h3><p>Libreville, Gabon<br>Disponibilité à convenir</p><a href="mailto:lionelconcept1@gmail.com">lionelconcept1@gmail.com</a><a href="tel:+24165367641">+241 65 36 76 41</a><a href="tel:+24174129812">+241 74 12 98 12</a><div class="actions"><a class="btn outline" href="https://wa.me/24165367641" target="_blank" rel="noopener noreferrer">WhatsApp</a><a class="btn outline" href="https://github.com/Lionel-Johnson" target="_blank" rel="noopener noreferrer">GitHub</a></div><p class="small">Heure à Libreville : <time id="libreville-clock"></time></p></div>
  <form id="contact-form" class="contact-form" action="{{ route('contact.store') }}" method="post" data-server="true">
@csrf
<div class="honeypot" aria-hidden="true"><label for="website">Ne pas remplir</label><input id="website" name="website" tabindex="-1" autocomplete="off"></div>
@if($errors->any())<ul role="alert">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif
@if(session('contact_status'))<p role="status">{{ session('contact_status') }}</p>@endif<div><label for="contact-name">Nom complet</label><input id="contact-name" name="name" value="{{ old('name') }}" autocomplete="name" maxlength="100" required></div><div><label for="contact-email">Adresse e-mail</label><input id="contact-email" name="email" value="{{ old('email') }}" type="email" autocomplete="email" maxlength="150" required></div><div><label for="contact-subject">Objet</label><input id="contact-subject" name="subject" value="{{ old('subject') }}" maxlength="150" required></div><div><label for="contact-message">Votre message</label><textarea id="contact-message" name="message" rows="5" maxlength="2000" required>{{ old('message') }}</textarea></div><button class="btn primary" type="submit"><svg class="icon"><use href="#i-mail"/></svg>Envoyer le message</button><p class="small">Votre demande est enregistrée et transmise par e-mail au responsable du site.</p><p id="contact-status" role="status" aria-live="polite"></p><a id="email-fallback" href="mailto:lionelconcept1@gmail.com">Écrire directement par e-mail</a><noscript><p>Ce formulaire fonctionne aussi sans JavaScript.</p></noscript></form>
  </div></div>
</section>
</main>
<footer><div class="container footer-inner"><div><strong>Lionel Concept</strong><p>Informatique · Développement · Communication</p></div><a href="{{ asset('cv/CV_Lionel_Brice_NGOUVI_MOUKENDOU.pdf') }}" download>Télécharger le CV</a><p>© <span id="year">2026</span> Lionel Brice NGOUVI MOUKENDOU</p></div></footer>
<a id="back-top" href="#hero" aria-label="Revenir en haut de page">↑</a>
</body>
</html>
