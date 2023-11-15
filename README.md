# Projets du Cours de Développement Web

Bienvenue dans ce dépôt GitHub qui contient plusieurs projets du cours de Développement Web. Chaque dossier représente un projet distinct, et ce fichier README offre une vue d'ensemble de l'ensemble du travail réalisé.

## Comment Utiliser Ces Projets

Chaque dossier de projet est autonome et comprend un ensemble de fichiers et de ressources nécessaires. 
Pour exécuter ou déployer un projet spécifique, suivez les instructions fournies dans le dossier correspondant.

## Contenu du Dépôt

1. **Projet 1 - English-Test**
   - Le projet English-Test est un quiz d'anglais développé en utilisant le framework Symfony. Il offre une expérience interactive pour tester et améliorer vos compétences en anglais.
   
2. **Projet 2 - X**

## Comment Utiliser le **Projet 1 - English-Test**

1. **Installation des Dépendances**

- Assurez-vous d'avoir Symfony installé sur votre machine.
- Exécutez la commande composer install pour installer les dépendances du projet.

2. **Configuration de la Base de Données**

- Configurez votre base de données dans le fichier .env en indiquant les paramètres de connexion.
- Exécutez php bin/console doctrine:database:create suivi de php bin/console doctrine:migrations:migrate pour créer et migrer la base de données.

3. **Chargement des Données (Facultatif)**

- Si vous souhaitez pré-remplir la base de données avec des questions d'exemple, utilisez la commande php bin/console doctrine:fixtures:load.

4. **Lancement du Serveur de Développement**

- Utilisez la commande symfony serve pour démarrer le serveur de développement.
- Accédez à l'application dans votre navigateur à l'adresse indiquée dans la console.

## Technologies Utilisées

Les projets ont été développés en utilisant les dernières versions des technologies disponibles. Voici quelques-unes des technologies principales utilisées dans ce cours :

- Langages de Programmation: HTML, CSS, JavaScript
- Frameworks: Symfony, Bootstrap
- Outils de Gestion de Version: Git, GitHub

## Remarques Importantes

Assurez-vous de consulter les fichiers README individuels dans chaque dossier de projet pour des informations spécifiques. N'hésitez pas à explorer, modifier et optimiser ces projets selon vos besoins.

---

**Note**: Assurez-vous d'installer les dépendances nécessaires avant d'exécuter les projets. Consultez les instructions spécifiques dans chaque dossier pour plus de détails.
