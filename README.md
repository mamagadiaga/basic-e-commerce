


# Découvrez Laravel

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">

Laravel représente bien plus qu'un simple framework pour le développement web. Il incarne une approche où la créativité rencontre l'efficacité, offrant une expérience de développement fluide et enrichissante. Laravel simplifie les tâches récurrentes dans la création d'applications web, offrant des fonctionnalités telles que :

- [Un système de routage simple et performant](https://laravel.com/docs/routing).
- [Un conteneur d'injection de dépendances puissant](https://laravel.com/docs/container).
- Prise en charge de plusieurs back-ends pour le [stockage de session](https://laravel.com/docs/session) et le [cache](https://laravel.com/docs/cache).
- ORM de base de données expressif et intuitif, connu sous le nom d'[Eloquent](https://laravel.com/docs/eloquent).
- [Migrations de schéma](https://laravel.com/docs/migrations) indépendantes de la base de données.
- Gestion robuste des [tâches en arrière-plan](https://laravel.com/docs/queues).
- Diffusion en temps réel des événements avec [Broadcasting](https://laravel.com/docs/broadcasting).

Laravel offre la puissance nécessaire pour les projets les plus ambitieux, tout en restant accessible à tous les niveaux d'expérience.

## Apprendre et Maîtriser

La documentation de Laravel est l'une des plus complètes et des plus détaillées, accompagnée d'une vaste bibliothèque de tutoriels vidéo. Cela rend l'apprentissage et la maîtrise du framework à la portée de tous.

## Contribuer au Projet

Vous êtes encouragés à contribuer au développement continu de Laravel ! Consultez le [guide de contribution](https://laravel.com/docs/contributions) pour savoir comment participer.


# Guide d'installation

Avant de commencer, assurez-vous d'avoir correctement configuré votre environnement. Vous aurez besoin de MySQL, PHP 8.1 et Composer.

## Installation du site web Laravel + API

1. Téléchargez le projet (ou clonez-le en utilisant GIT).
2. Copiez le fichier `.env.example` et renommez-le en `.env`, puis configurez les identifiants de la base de données.
3. Naviguez jusqu'au répertoire racine du projet à l'aide du terminal.
4. Exécutez la commande suivante pour installer les dépendances PHP :
    ```bash
    composer install
    ```
5. Générez une clé de chiffrement en exécutant la commande suivante :
    ```bash
    php artisan key:generate 
    ```
6. Lancez les migrations avec la commande suivante pour créer les tables de la base de données :
    ```bash
    php artisan migrate --seed
    ```
7. Démarrez le serveur local en exécutant la commande suivante :
    ```bash
    php artisan serve
    ```
8. Ouvrez un nouveau terminal, naviguez jusqu'au répertoire racine du projet, puis exécutez la commande suivante pour installer les dépendances JavaScript :
    ```bash
    npm install
    ```
9. Lancez le serveur Vite pour le frontend Laravel en exécutant la commande suivante :
    ```bash
    npm run dev
    ```

## Installation du panneau d'administration Vue.js

1. Naviguez vers le dossier `backend`.
2. Exécutez la commande suivante pour installer les dépendances JavaScript :
    ```bash
    npm install
    ```
3. Copiez le fichier `.env.example` du dossier `backend` et renommez-le en `.env`.
4. Assurez-vous que la clé `VITE_API_BASE_URL` dans le fichier `.env` du dossier `backend` est définie sur l'hôte de votre API Laravel (par défaut: http://localhost:8000).
5. Exécutez la commande suivante pour démarrer le serveur de développement Vue.js :
    ```bash
    npm run dev
    ```
6. Ouvrez le panneau d'administration Vue.js dans votre navigateur et connectez-vous avec les identifiants suivants :
    ```
    Adresse e-mail : admin@example.com
    Mot de passe : admin123
    ```

N'oubliez pas de vous assurer que tous les prérequis sont installés et configurés correctement avant de commencer l'installation.


## Licence

Laravel est un framework open-source distribué sous la licence [MIT](https://opensource.org/licenses/MIT).
