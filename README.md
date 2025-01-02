Voici la version modifiée où **React** a été remplacé par **Bootstrap** :  

---

# **Arcadia Zoo**

Site web servant de vitrine pour le zoo Arcadia, offrant également des espaces utilisateurs pour la gestion des différents services et tâches associées au fonctionnement du zoo.

## **Table des matières**
- [Aperçu du projet](#aperçu-du-projet)
- [Technologies utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Structure du projet](#structure-du-projet)
- [Contributions](#contributions)
- [Licence](#licence)
- [Auteurs](#auteurs)

---

## **Aperçu du projet**

Le site web permet :
- Aux visiteurs : de consulter les animaux et habitats du zoo, et d'interagir avec le personnel via un formulaire de contact ou en laissant un avis.
- Aux utilisateurs connectés (administrateurs, employés et vétérinaires) : de gérer leurs tâches spécifiques via des espaces dédiés.

### **Rôles des utilisateurs**
- **Admin :** Gère les utilisateurs et les entités (CRUD), consulte des rapports vétérinaires et visualise des statistiques via un tableau de bord.
- **Employé :** Valide les avis des visiteurs, enregistre les repas des animaux et gère les services du zoo.
- **Vétérinaire :** Remplit des rapports sur les animaux, évalue les habitats, et consulte les données d'alimentation saisies par les employés.

---

## **Technologies utilisées**

### **Front-end**
- **Bootstrap :** Bootstrap simplifie le développement des interfaces avec des composants prêts à l’emploi et un design responsive natif.

- **CSS et JavaScript :** Utilisés pour les styles et l’interactivité complémentaire au framework Bootstrap.

### **Back-end**
- **PHP** avec Symfony 7.1 :** Symfony offre une structure bien définie, une gestion simplifiée des dépendances via Composer, et une intégration native des outils de sécurité comme les jetons CSRF.

### **Base de données**
- **MySQL :** MySQL est compatible avec Symfony, offre des performances optimales et est facile à gérer via des outils comme phpMyAdmin.

### **Outils de maquettage**
- **Figma :** Utilisé pour créer des maquettes interactives de l'interface utilisateur, facilitant ainsi la collaboration avec les parties prenantes.
- **PantUML :** Outil en ligne me permantant de maquetter les différents shémas et séquences coté Back End.

---

## **Installation pour serveur local**

### **Prérequis**
- [Node.js](https://nodejs.org/)
- [Git](https://git-scm.com/)
- [Symfony](https://symfony.com) (version 7.1)
- [Composer](https://getcomposer.org) (version 2.7.9)
- **XAMPP** : Serveur local pour exécuter PHP et MySQL.

### **Étapes d'installation**

1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/LucasCherbuin/Arcadia
   cd Arcadia
   ```

2. **Installer les dépendances :**
   - **Back-end :**
     - Installer Composer et Symfony, puis exécuter :
       ```bash
       composer install
       ```
   - **Front-end :**
     - Inclure Bootstrap dans le projet :
       ```bash
       npm install bootstrap@5.3.3
       ```

3. **Configurer les variables d'environnement :**
   - Modifier le fichier `.env` de Symfony avec l'URL de la base de données locale.

4. **Lancer le serveur :**
   - Exécuter la commande suivante dans votre terminal :
     ```bash
     symfony server:start
     ```

---

## **Utilisation**

### En tant que visiteur
- Parcourir les pages vitrines du site.
- Soumettre un avis ou une demande de contact.

### En tant qu'administrateur
- Gérer les utilisateurs, les animaux, les habitats, les services et les horaires.
- Consulter les statistiques et rapports vétérinaires.

### En tant qu'employé
- Valider les avis des visiteurs.
- Enregistrer les repas des animaux.
- Modifier les services.

### En tant que vétérinaire
- Remplir des rapports sur les animaux.
- Évaluer l'état des habitats.
- Consulter les données d'alimentation.

---

## **Fonctionnalités**
- Connexion utilisateur avec des rôles spécifiques.
- Gestion des données via des formulaires adaptés à chaque rôle.
- Tableau de bord statistique.
- Système sécurisé pour gérer les interactions utilisateurs.

---

## **Structure du projet**

```
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
```

---

## **Contributions**

Pour contribuer :
1. Forkez le dépôt.
2. Clonez le fork localement.
3. Créez une nouvelle branche pour vos modifications :
   ```bash
   git checkout -b feature/nomDeLaFonctionnalité
   ```

---

## **Licence**
Ce projet est sous licence MIT. Voir le fichier [LICENCE](LICENCE) pour plus de détails.

---

## **Auteurs**
- Lucas Cherbuin  
- Contributeurs : Mentionnez-vous dans vos Pull Requests !  

---

Cela reflète l'utilisation de **Bootstrap** comme technologie principale pour le front-end.
