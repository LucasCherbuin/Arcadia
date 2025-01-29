#### Arcadia Zoo ####

Site web servant de vitrine pour le zoo Arcadia, offrant également des espaces utilisateurs pour la gestion des différents services et tâches associées au fonctionnement du zoo.

### Table des matières ###

1. Aperçu du projet

2. Mise en place de l'environnement de travail

3. Technologies utilisées

4. Installation

5. Utilisation

6. Structure du projet

7. Contributions

8. Auteur

# 1. Aperçu du projet #

Le site web permet :

Aux visiteurs : de consulter les animaux et habitats du zoo, et d'interagir avec le personnel via un formulaire de contact ou en laissant un avis.

Aux utilisateurs connectés (administrateurs, employés et vétérinaires) : de gérer leurs tâches spécifiques via des espaces dédiés.

Rôles des utilisateurs

Admin : Gère les utilisateurs et les entités (CRUD), consulte des rapports vétérinaires et visualise des statistiques via un tableau de bord.

Employé : Valide les avis des visiteurs, enregistre les repas des animaux et gère les services du zoo.

Vétérinaire : Remplit des rapports sur les animaux, évalue les habitats, et consulte les données d'alimentation saisies par les employés.

# 2. Mise en place de l'environnement de travail #

L'environnement de travail a été configuré en tenant compte des besoins de développement local et collaboratif :

XAMPP : Serveur local pour exécuter PHP et MySQL.

Symfony CLI : Pour gérer et démarrer facilement le serveur Symfony.

Composer : Pour la gestion des dépendances PHP.

Node.js et npm : Pour inclure Bootstrap et gérer les dépendances front-end.

Git : Pour la gestion du versionnement et la collaboration via GitHub.

Visual Studio Code : IDE choisi pour sa flexibilité, ses extensions dédiées au développement PHP et front-end.

Ces outils assurent un workflow fluide, de la configuration initiale à la maintenance du projet.

# 3. Technologies utilisées #

## Front-end ##
Bootstrap :
Framework open-source sous licence MIT, accessible gratuitement et compatible avec tout type de projet web. Bootstrap offre une bibliothèque de composants et de styles CSS préconçus, ce qui simplifie la création d'interfaces utilisateurs réactives et modernes. Il permet de gagner du temps dans le développement tout en garantissant une expérience utilisateur uniforme sur tous les appareils.

CSS et JavaScript natifs :
Langages standard pris en charge par tous les navigateurs modernes sans restrictions de licence. Ces langages sont utilisés pour personnaliser d'avantage les styles et l'interactivité, complétant les fonctionnalités offertes par Bootstrap pour répondre à des besoins spécifiques.

## Back-end ##
Symfony 7.1 (PHP) :
Framework open-source sous licence MIT, bien adapté aux projets commerciaux et non commerciaux. Symfony fournit une structure solide pour le développement back-end, avec des outils intégrés pour la sécurité, les bases de données, et la gestion des API. Il est également largement documenté et soutenu par une communauté active, ce qui facilite la résolution de problèmes.

Composer :
Conditions d'utilisation : Gestionnaire de dépendances open-source pour PHP, sous licence MIT.
Pourquoi ce choix : Composer simplifie l'installation et la mise à jour des bibliothèques nécessaires, garantissant ainsi la compatibilité et la cohérence des dépendances tout au long du projet.

Base de données

MySQL :

Système de gestion de bases de données open-source sous licence GPL (pour les usages communautaires) ou commerciale. MySQL est performant, fiable, et bien intégré avec Symfony. Il permet de gérer efficacement les relations complexes entre les données tout en offrant une compatibilité avec des outils tels que phpMyAdmin pour une administration simplifiée.

## Outils de développement ##

XAMPP :

Conditions d'utilisation : Distribution gratuite comprenant Apache, PHP, et MySQL.
Pourquoi ce choix : XAMPP fournit un environnement de serveur local facile à configurer, permettant de tester le site web en local avant son déploiement en production.

Git :
Système de gestion de version open-source sous licence GPL.
Git permet un suivi précis des modifications du code, favorise la collaboration entre développeurs, et facilite le déploiement grâce à une intégration fluide avec des plateformes comme GitHub.

## Outils de maquettage et conception ##
Figma :
Conditions d'utilisation : Application en ligne gratuite pour des projets de petite envergure, avec des abonnements payants pour des fonctionnalités avancées.
Figma permet de créer des maquettes interactives, offrant une visualisation claire du design avant le développement, et favorisant la collaboration avec les parties prenantes.

PlantUML :
Outil open-source pour la création de diagrammes, compatible avec une utilisation locale ou en ligne. PlantUML est utilisé pour concevoir des diagrammes de séquence et d'architecture, facilitant ainsi la planification et la documentation des flux de données dans le projet.

Configurer les variables d'environnement :

Modifier le fichier .env de Symfony avec l'URL de la base de données locale.

Lancer le serveur :

symfony server:start

# 5. Utilisation #

En tant que visiteur

Parcourir les pages vitrines du site.

Soumettre un avis ou une demande de contact.

En tant qu'administrateur

Gérer les utilisateurs, les animaux, les habitats, les services et les horaires.

Consulter les statistiques et rapports vétérinaires.

En tant qu'employé

Valider les avis des visiteurs.

Enregistrer les repas des animaux.

Modifier les services.

En tant que vétérinaire

Remplir des rapports sur les animaux.

Évaluer l'état des habitats.

Consulter les données d'alimentation.

# 6. Structure du projet #

Arcadia/
│
├── config/           # Configuration des routes et services
├── src/              # Code source principal
│   ├── Controller/   # Contrôleurs Symfony
│   ├── Entity/       # Entités Doctrine
│   ├── Form/         # Formulaires Symfony
│   ├── Repository/   # Requêtes spécifiques à la base de données
│   └── Twig/         # Templates Twig
├── templates/        # Vues front-end
│   ├── admin/        # Pages administratives
│   ├── employee/     # Pages employé
│   ├── veterinaire/  # Pages vétérinaire
│   └── security/     # Pages de connexion et sécurité
└── public/           # Fichiers accessibles publiquement

# 7. Contributions #

Pour contribuer :

Forkez le dépôt.

Clonez le fork localement.

Créez une nouvelle branche pour vos modifications :

git checkout -b feature/nomDeLaFonctionnalité

# 8. Auteur #

Lucas Cherbuin

Contributeurs : Mentionnez-vous dans vos Pull Requests !
