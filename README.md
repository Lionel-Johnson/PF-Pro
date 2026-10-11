# Lionel Concept — Portfolio professionnel

Portfolio de Lionel Brice NGOUVI MOUKENDOU, basé à Libreville. Parcours actualisé avec le poste au SCIPT INTERNATIONAL depuis le 14 septembre 2026, la refonte WordPress et HTML/CSS/JavaScript, et l'expérience de contrôleur TIC au RGPL 2026. Le CV PDF complet est téléchargeable.

## État du projet — 11 octobre 2026

Le code Laravel, le portfolio, le CV PDF, la photo et le logo Lionel Concept sont disponibles sur la branche `main` de [PF-Pro](https://github.com/Lionel-Johnson/PF-Pro). La publication du code sur GitHub ne déploie pas automatiquement le site Laravel.

| Élément | État |
| --- | --- |
| Rubriques publiques et menu mobile | Implémentés |
| CV, portrait et logo | Intégrés |
| Enregistrement des messages et transmission SMTP | Implémentés ; SMTP à configurer sur l’hébergement |
| Administration et relance des messages | Implémentées |
| Hébergement Laravel en production | À mettre en place |
| Envoi réel d’un e-mail en production | À vérifier après configuration SMTP |

## Fonctions disponibles

- Profil, parcours, formations, expertises et réalisations affichés.
- Menu mobile avec accès au formulaire, navigation clavier et fermeture par Échap.
- Filtrage des réalisations, thème clair/sombre mémorisé, heure de Libreville et liens téléphone, WhatsApp et e-mail.
- Formulaire Laravel : validation, CSRF, limitation des requêtes, enregistrement en base et transmission SMTP.
- Messages accessibles au Super Admin, avec statut de transmission et relance en cas d'échec.
- Authentification, profil, récupération du mot de passe et vérification de l'e-mail.
- Écrans d'administration des services et entreprises. Les services actifs de la base sont affichés sur le portfolio.

## Installation Laravel

Laravel 13, PHP 8.3+, Composer 2 et SQLite par défaut (ou une autre base configurée). Activer notamment les extensions PHP `pdo_sqlite`, `mbstring`, `dom`, `xml`, `fileinfo` et `curl`. Node.js 24 est utilisé par le workflow pour l’export statique.

Depuis le dossier du projet, sous Linux/macOS ou Git Bash :

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

Sous Windows PowerShell, remplacer `cp .env.example .env` par `Copy-Item .env.example .env` et `touch database/database.sqlite` par `New-Item -ItemType File database/database.sqlite` si le fichier n’existe pas. Avec Herd, lancer les commandes dans le terminal du projet ; `php artisan serve` reste utilisable pour un test local.

Ouvrir `http://localhost:8000`, puis `/login` pour se connecter. Le compte Super Admin accède à `/administration` ; les demandes se trouvent dans `/administration/contacts`.

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

## SMTP gratuit : configuration Brevo intégrée

[Brevo](https://www.brevo.com/products/transactional-email/) propose actuellement une offre gratuite avec relais SMTP et jusqu’à **300 e-mails par jour**. Les limites et conditions peuvent évoluer : consulter l’offre avant inscription. Le projet inclut un transport `brevo` utilisant `smtp-relay.brevo.com` sur le port 587 ; aucune dépendance supplémentaire n’est nécessaire.

1. Créer un compte Brevo et suivre sa procédure d’activation de l’envoi transactionnel.
2. Ajouter et valider une adresse d’expéditeur. Authentifier le domaine selon les instructions Brevo pour améliorer la délivrabilité.
3. Dans **Paramètres > SMTP & API > SMTP**, relever le login SMTP et générer une clé SMTP dédiée à `PF-Pro`.
4. Renseigner ces valeurs dans le `.env` du serveur Laravel, sans les publier sur GitHub :

```dotenv
MAIL_MAILER=brevo
BREVO_SMTP_LOGIN=login-affiche-dans-brevo
BREVO_SMTP_KEY=cle-smtp-secrete
MAIL_FROM_ADDRESS=expediteur-valide@votre-domaine.example
MAIL_FROM_NAME="Lionel Concept"
PORTFOLIO_CONTACT_EMAIL=lionelconcept1@gmail.com
```

Utiliser la **clé SMTP**, pas une clé API ni le mot de passe du compte. Le login SMTP n’est pas nécessairement l’adresse de connexion au compte Brevo. Les paramètres génériques `MAIL_HOST` et `MAIL_PORT` ne sont pas utilisés lorsque `MAIL_MAILER=brevo`.

Exécuter `php artisan config:cache`, envoyer une demande depuis le formulaire, puis vérifier la réception et le statut dans `/administration/contacts`. Une connexion SMTP acceptée ne garantit pas le placement dans la boîte principale. Aucun compte, secret ou expéditeur Brevo n’est fourni par le dépôt ; l’intégration est préparée, mais l’envoi réel n’est pas activé tant que ces étapes ne sont pas effectuées. Un hébergement Laravel est toujours nécessaire, y compris avec ce service gratuit.

Documentation : [envoi via Brevo SMTP](https://help.brevo.com/hc/en-us/articles/7924908994450-Send-transactional-emails-using-Brevo-SMTP), [création des clés SMTP](https://help.brevo.com/hc/en-us/articles/7959631848850-Create-and-manage-your-SMTP-keys).

## Mise en production Laravel

Après installation des dépendances et configuration du fichier `.env` sur le serveur :

```sh
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan view:cache
```

Lors de la première installation, ajouter `php artisan db:seed` et créer le compte avec `php artisan portfolio:admin`. Pour une mise à jour existante, sauvegarder la base avant les migrations et conserver la clé `APP_KEY` ainsi que les données. Les messages sont envoyés directement pendant la requête ; aucun worker de file d’attente n’est requis pour ce formulaire.

Tester le formulaire depuis le site hébergé, consulter son statut dans l’administration et vérifier la réception dans la boîte du destinataire. Les tests automatisés utilisent des envois simulés ; ils ne valident pas les identifiants SMTP de production.

## Version statique et GitHub Pages

```sh
node scripts/build-pages.mjs
```

GitHub Pages héberge des fichiers statiques et n’exécute pas Laravel/PHP. GitHub ne fournit pas de service SMTP utilisable par ce formulaire. Pour l’envoi réel, connecter le serveur Laravel à un prestataire SMTP externe.

Le dossier `dist/` contient une version autonome avec les mêmes contenus, les assets et le CV. Cette version ne possède pas de serveur PHP : le formulaire ouvre un brouillon dans la messagerie du visiteur. Pour bénéficier de l'enregistrement et de l'envoi SMTP, utiliser la version Laravel sur un hébergement PHP. Le workflow vérifie Laravel et produit la version statique comme artifact ; il ne déploie pas automatiquement sur un hébergement tiers.

## Vérifications

```sh
php artisan test
php artisan view:cache
node --check public/portfolio/portfolio.js
node scripts/build-pages.mjs
```

Lors de la vérification locale du 11 octobre 2026 : **36 tests réussis, 125 assertions**, vues Blade compilées, JavaScript vérifié et export statique généré. Les routes publiques, les assets et le CV ont répondu HTTP 200. La vérification visuelle dans un navigateur reste à effectuer.

## Fichiers principaux

| Chemin | Rôle |
| --- | --- |
| `resources/views/home.blade.php` | Rubriques et formulaire du portfolio |
| `public/portfolio/` | Styles, scripts, portrait et logo |
| `public/cv/` | CV PDF téléchargeable |
| `routes/web.php` | Routes publiques et administration |
| `app/Http/Controllers/ContactController.php` | Validation et enregistrement des demandes |
| `app/Services/ContactDelivery.php` | Transmission et statut des e-mails |
| `config/mail.php` et `config/portfolio.php` | Transport et destinataire |
| `scripts/build-pages.mjs` | Export statique avec brouillon e-mail |
| `.github/workflows/portfolio.yml` | Tests Laravel et génération de l’export statique |

## Dépannage

- **Demande enregistrée, mais transmission échouée** : vérifier les paramètres SMTP, l’adresse d’expéditeur autorisée et la connectivité du serveur. Exécuter `php artisan config:cache`, puis relancer depuis l’administration.
- **Services absents ou différents** : contrôler leur activation et leur ordre dans l’administration. Si aucun service actif n’existe, des cartes d’expertise par défaut s’affichent.
- **Erreur de base de données** : vérifier la connexion dans `.env`, l’existence de la base SQLite si utilisée, puis l’état des migrations avec `php artisan migrate:status`.
- **Erreur 419 au formulaire** : recharger la page et vérifier la configuration des sessions et de l’URL du site.
- **Le formulaire ouvre la messagerie** : il s’agit de l’export statique ; déployer Laravel pour obtenir l’enregistrement et la transmission côté serveur.

## Déploiement statique sur Vercel

Le fichier `vercel.json` configure l’export du portfolio avec `node scripts/build-pages.mjs` et le dossier de sortie `dist`. L’export ne nécessite pas les dépendances Vite : l’étape d’installation vérifie uniquement la disponibilité de Node.js.

Dans le projet Vercel lié à `PF-Pro`, utiliser la racine du dépôt comme **Root Directory** et Node.js 24.x. Les réglages de build et de sortie sont fournis par `vercel.json`. Les pushes sur la branche de production déclenchent un déploiement si l’intégration Git est activée.

Si le message « No Output Directory named dist found » apparaît sur un ancien commit, ouvrir **Deployments** et lancer le déploiement du dernier commit de `main`, qui contient cette configuration. Si l’erreur persiste, vérifier la racine du projet et les journaux de build.

Cette configuration publie la version statique : le formulaire prépare un brouillon e-mail, sans enregistrement en base ni SMTP. Ne pas ajouter de clé Brevo dans le JavaScript ou les fichiers exportés. Pour le formulaire Laravel, héberger le backend PHP avec une base persistante.
