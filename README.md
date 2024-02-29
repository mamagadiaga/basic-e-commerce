## Découvrez Laravel


Laravel représente bien plus qu'un simple framework pour le développement web. Il incarne une approche où la créativité rencontre l'efficacité, offrant une expérience de développement fluide et enrichissante. Laravel simplifie les tâches récurrentes dans la création d'applications web, offrant des fonctionnalités telles que :

Un système de routage simple et performant.
Un conteneur d'injection de dépendances puissant.
Prise en charge de plusieurs back-ends pour le stockage de session et le cache.
ORM de base de données expressif et intuitif, connu sous le nom d'Eloquent.
Migrations de schéma indépendantes de la base de données.
Gestion robuste des tâches en arrière-plan.
Diffusion en temps réel des événements avec Broadcasting.
Laravel offre la puissance nécessaire pour les projets les plus ambitieux, tout en restant accessible à tous les niveaux d'expérience.

Apprendre et Maîtriser
La documentation de Laravel est l'une des plus complètes et des plus détaillées, accompagnée d'une vaste bibliothèque de tutoriels vidéo. Cela rend l'apprentissage et la maîtrise du framework à la portée de tous.

Contribuer au Projet
Vous êtes encouragés à contribuer au développement continu de Laravel ! Consultez le guide de contribution pour savoir comment participer.

Installation
Clonez le dépôt :

git clone https://github.com/mamagadiaga/laravel-api.git
Installez Composer (si ce n'est pas déjà fait) en suivant les instructions sur getcomposer.org.

Mettez à jour/installer les dépendances avec Composer :

composer update
ou

composer install
Installez Node.js (si ce n'est pas déjà fait) en suivant les instructions sur nodejs.org.

Installez les dépendances Node.js :

npm install
Lancez Vite :

npm run dev
Allez dans le fichier .env et modifiez les informations de base de données et de messagerie électronique selon vos propres identifiants. Ensuite, configurez certaines configurations avec vos propres informations d'identification.

Exécutez la migration pour créer les tables de base de données :

php artisan migrate
ou si vous souhaitez également remplir la base de données avec des données de test :

php artisan migrate --seed
Générez une nouvelle clé d'application Laravel :

php artisan key:generate
Créez un lien symbolique pour le stockage :

php artisan storage:link
