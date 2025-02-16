#### Arcadia Zoo ####

Site web servant de vitrine pour le zoo Arcadia, offrant également des espaces utilisateurs pour la gestion des différents services et tâches associées au fonctionnement du zoo.

### Table des matières ###

1. Aperçu du projet
2. Mise en place de l'environnement de travail
3. Technologies utilisées
4. Installation
    - Installation locale
    - Installation avec Docker
5. Utilisation
6. Structure du projet
7. Contributions
8. Auteur

# 1. Aperçu du projet #

Le site web permet :

**Aux visiteurs** : de consulter les animaux et habitats du zoo, et d'interagir avec le personnel via un formulaire de contact ou en laissant un avis.

**Aux utilisateurs connectés (administrateurs, employés et vétérinaires)** : de gérer leurs tâches spécifiques via des espaces dédiés.

### Rôles des utilisateurs ###

- **Admin** : Gère les utilisateurs et les entités (CRUD), consulte des rapports vétérinaires et visualise des statistiques via un tableau de bord.
- **Employé** : Valide les avis des visiteurs, enregistre les repas des animaux et gère les services du zoo.
- **Vétérinaire** : Remplit des rapports sur les animaux, évalue les habitats et consulte les données d'alimentation saisies par les employés.

# 2. Mise en place de l'environnement de travail #

L'environnement de travail a été configuré en tenant compte des besoins de développement local et collaboratif :

- **XAMPP** : Serveur local pour exécuter PHP et MySQL.
- **Symfony CLI** : Pour gérer et démarrer facilement le serveur Symfony.
- **Composer** : Pour la gestion des dépendances PHP.
- **Node.js et npm** : Pour inclure Bootstrap et gérer les dépendances front-end.
- **Git** : Pour la gestion du versionnement et la collaboration via GitHub.
- **Visual Studio Code** : IDE choisi pour sa flexibilité, ses extensions dédiées au développement PHP et front-end.

Ces outils assurent un workflow fluide, de la configuration initiale à la maintenance du projet.

# 3. Technologies utilisées #

### Front-end ###
- **Bootstrap** : Framework CSS facilitant la conception d'interfaces réactives.
- **CSS et JavaScript natifs** : Personnalisation supplémentaire des styles et interactivité.

### Back-end ###
- **Symfony 7.1 (PHP)** : Framework robuste pour la gestion du projet.
- **Composer** : Gestionnaire de dépendances PHP.

### Base de données ###
- **MySQL** : Gestion des données relationnelles.
- **MongoDB** : Stockage des consultations et données non relationnelles.

### Outils de développement ###
- **XAMPP** : Environnement de serveur local.
- **Git** : Gestion du code source.
- **Figma** et **PlantUML** : Outils de conception et de documentation.

# 4. Installation #

## **Installation locale** ##

1. **Cloner le projet** :
   ```bash
   git clone https://github.com/votre-repo/arcadia-zoo.git
   cd arcadia-zoo
   ```

2. **Installer les dépendances** :
   ```bash
   composer install
   npm install
   ```

3. **Configurer la base de données (MySQL)** :
   Modifier le fichier `.env` :
   ```env
   DATABASE_URL="mysql://root:root@127.0.0.1:3306/arcadia"
   ```
   Ensuite, exécuter :
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

4. **Démarrer le serveur** :
   ```bash
   symfony server:start
   ```

## **Installation avec Docker** ##

1. **Créer le fichier `docker-compose.yml`** :

   ```yaml
   version: '3.8'
   
   services:
     app:
       build:
         context: .
         dockerfile: Dockerfile
       container_name: symfony_app
       restart: unless-stopped
       working_dir: /var/www
       volumes:
         - .:/var/www
       depends_on:
         - mysql
         - mongodb
       environment:
         DATABASE_URL: mysql://root:root@mysql:3306/symfony?serverVersion=8.0
         MONGODB_URL: mongodb://mongodb:27017
       ports:
         - "8000:8000"

     mysql:
       image: mysql:8.0
       container_name: symfony_mysql
       restart: unless-stopped
       environment:
         MYSQL_ROOT_PASSWORD: root
         MYSQL_DATABASE: symfony
       ports:
         - "3307:3306"
       volumes:
         - mysql_data:/var/lib/mysql

     mongodb:
       image: mongo:6.0
       container_name: symfony_mongodb
       restart: unless-stopped
       ports:
         - "27017:27017"
       volumes:
         - mongodb_data:/data/db
   
   volumes:
     mysql_data:
     mongodb_data:
   ```

2. **Lancer Docker** :
   ```bash
   docker-compose up -d
   ```

3. **Vérifier les conteneurs** :
   ```bash
   docker ps
   ```

# 5. Utilisation #

- **Visiteur** : Parcourir le site, soumettre un avis ou une demande de contact.
- **Administrateur** : Gérer les utilisateurs, les animaux, les habitats et les services.
- **Employé** : Valider les avis, enregistrer les repas et modifier les services.
- **Vétérinaire** : Remplir des rapports, évaluer les habitats et consulter les données d'alimentation.

# 6. Structure du projet #

```
Arcadia/
│
├── config/           # Configuration des routes et services
├── src/              # Code source principal
│   ├── Controller/   # Contrôleurs Symfony
│   ├── Entity/       # Entités Doctrine
│   ├── Document/     # Documents MongoDB
│   ├── Form/         # Formulaires Symfony
│   ├── Repository/   # Requêtes spécifiques à la base de données
│   └── Twig/         # Extensions Twig
├── templates/        # Vues front-end
├── public/           # Fichiers accessibles publiquement
```

# 7. Contributions #

Pour contribuer :

1. Forker le dépôt.
2. Cloner le fork localement.
3. Créer une nouvelle branche :
   ```bash
   git checkout -b feature/nomDeLaFonctionnalité
   ```

# 8. Auteur #

**Lucas Cherbuin**

Contributeurs : Mentionnez-vous dans vos Pull Requests !