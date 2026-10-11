# Lionel Concept — Portfolio professionnel

Portfolio de Lionel Brice NGOUVI MOUKENDOU, basé à Libreville. Parcours actualisé avec le poste au SCIPT INTERNATIONAL depuis le 14 septembre 2026, la refonte WordPress et HTML/CSS/JavaScript, et l'expérience de contrôleur TIC au RGPL 2026. Le CV PDF complet est téléchargeable.

## Fonctions disponibles

- Profil, parcours, formations, expertises et réalisations affichés.
- Menu mobile avec accès au formulaire, navigation clavier et fermeture par Échap.
- Filtrage des réalisations, thème clair/sombre mémorisé, heure de Libreville et liens téléphone, WhatsApp et e-mail.
- Formulaire Laravel : validation, CSRF, limitation des requêtes, enregistrement en base et transmission SMTP.
- Messages accessibles au Super Admin, avec statut de transmission et relance en cas d'échec.
- Authentification, profil, récupération du mot de passe et vérification de l'e-mail.
- Écrans d'administration des services et entreprises. Les services actifs de la base sont affichés sur le portfolio.

## Installation Laravel

PHP 8.3+, Composer 2 et SQLite (ou une autre base configurée).

```sh
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan storage:link
php artisan portfolio:admin
php artisan serve
```

Aucun mot de passe administrateur partagé n'est créé par les seeders. La commande `portfolio:admin` demande un mot de passe personnel. Un compte créé via l'inscription publique n'obtient aucun rôle d'administration.

Les styles et scripts de la page publique et de l'administration sont servis depuis `public/portfolio`. Aucune compilation Vite n'est nécessaire pour ces écrans. Les anciens composants Vite sont conservés dans le dépôt.

## Transmission réelle des messages

Sur l'hébergement Laravel, renseigner les valeurs fournies par le prestataire SMTP dans `.env` :

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=https://votre-domaine.example
MAIL_MAILER=smtp
MAIL_SCHEME=smtp
MAIL_HOST=smtp.votre-prestataire.example
MAIL_PORT=587
MAIL_USERNAME=votre-identifiant
MAIL_PASSWORD=votre-mot-de-passe
MAIL_FROM_ADDRESS=adresse-expediteur-validee@votre-domaine.example
MAIL_FROM_NAME="Lionel Concept"
PORTFOLIO_CONTACT_EMAIL=lionelconcept1@gmail.com
```

Pour TLS implicite, utiliser `MAIL_SCHEME=smtps` et le port indiqué par le prestataire (souvent 465). L'adresse d'expéditeur doit être validée par le prestataire ; l'adresse du visiteur est utilisée uniquement dans `Reply-To`.

```sh
php artisan config:cache
```

Le serveur enregistre d'abord la demande. Si le transport SMTP accepte l'envoi, le statut devient `sent`. Cela ne garantit pas la réception dans la boîte principale. Si SMTP est indisponible ou si le pilote reste `log`, le message demeure enregistré avec le statut `failed` et aucune confirmation de transmission n'est affichée. Le Super Admin peut le consulter et relancer l'envoi après correction de la configuration. Ne pas versionner `.env`.

L'hébergement doit faire pointer son dossier public vers `public/`, utiliser HTTPS et autoriser l'écriture dans `storage` et `bootstrap/cache`.

## Version statique et GitHub Pages

```sh
node scripts/build-pages.mjs
```

Le dossier `dist/` contient une version autonome avec les mêmes contenus, les assets et le CV. Cette version ne possède pas de serveur PHP : le formulaire ouvre un brouillon dans la messagerie du visiteur. Pour bénéficier de l'enregistrement et de l'envoi SMTP, utiliser la version Laravel sur un hébergement PHP. Le workflow vérifie Laravel et produit la version statique comme artifact ; il ne déploie pas automatiquement sur un hébergement tiers.

## Vérifications

```sh
php artisan test
php artisan view:cache
node --check public/portfolio/portfolio.js
node scripts/build-pages.mjs
```
