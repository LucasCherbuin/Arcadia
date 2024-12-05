Aracadia

Site web servant de vitrine pour le zoo Arcida ainsi que des espaces Utilisateurs pour la gestion des différents services du zoo et taches des metier.

- [Aperçu du projet](#aperçu-du-projet)
- [Technologies utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Structure du projet](#structure-du-projet)
- [Contributions](#contributions)
- [Licence](#licence)
- [Auteurs](#auteurs)

##appercue du projet

Le site web permet aux visiteurs de consulter les animaux et habitats du zoo et peux interagir avec le personnel via un formulaire de contact ou en laissant un avis.
Du coté espace utilisateur, Ces derniers sont triés en 3 types: 

Admin: Il peut créer les utilisateurs en dessous, intéragire avec des entités sous form de CRUD, avoir un compte rendu des différents rapport du vétérinaire et consulter un dashboard avec un statistique sur le nombre de consulation dun animal.

Employé: Ses fontions permettent de vakider un avis d'un visiteur ou non. modifier un service et, le plus important, remplir un formulaire sur la consommation faite d'un animal en y indiquant la quantité fournie ainsi de la date de passage.

Vétérinaire: Son espace permet de remplir un rapport sur l'etat d'un animal, Donner son avis sur l'etat d'un Habitat, il a aussi un espace sur les informations de l'animal notamment du repas donnée par l'employé

##Technologie utilisée

- Front End: React, CSS, JavaScript
- Back-end: PHP, Symfony
- Base de données: MySQL
- Maquettages: FE: Figma BE:  BDD:

##Installation pour serveur local

### Prérequis

-[Node.js] (https://nodejs.org/)
-[Git](https://git-scm.com/)
-[Symfony](https://symfony.com) (version 7.1)
-[composer](https://getcomposer.org) (version 2.7.9)

### Etapes d'installations

1. Clonez le dépôt :
'''bash
git clone https://github.com/LucasCherbuin/Arcadia
cd Arcadia
'''

2. Installez les dépendances Front end et Back end

   back end:
   [composer]
   - Installer XAMPP pour avoiR php 8.2
   - Télécharger les dépendances de Composer(https://getcomposer.org/Composer-Setup.exe)
   - Dans la fenêtre php qui s'ouvre, spécifier le chemin avec C:/xampp/php/php.exe
   - Appuyez sur ctrl + r , écrivez "cmd" puis ok
   - Taper la commande "composer"
   
   [symfony]
   ouvrez votre cmd et taper: "symfony new my_project_directory --version="7.1.*" "

   Front end:
   - Initialiser NPM (npm install -g npm) et installer node.js(https://nodejs.org/en)
   - Tapper les commandes de configuration de react(et Boostrap(npm i bootstrap@5.3.3)

   
      
4. Configurer les variables d'envrionnement

   Modifier le fichier .env de Symfony en y ajoutant les variables nécessaire (URL de la base de donnée local)

5. Lancer le serveur

Taper "symfony server:start" sur le terminal de votre éditeur de code pour avoir l'application en local

###Utilisation




