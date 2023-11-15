# SYMFONY ENGLISH QUIZ APP (HOMEWORK)

![Project Status](https://img.shields.io/badge/Status-In%20Development-yellow)

This is the English Test project, which is currently under development.  
Please note that not all features are fully implemented, and there may be bugs.

## GITHUB

1. Create a new repository on the command line

- git init
- git commit -m "first commit"
- git branch -M main
- git remote add origin https://github.com/Yldra/maison.git
- git push -u origin main

2. Push an existing repository from the command line

- git remote add origin https://github.com/Yldra/maison.git
- git branch -M main
- git push -u origin main

# PROJECT OVERVIEW

## Project Goals and Roadmap

Our goals for this project include:

- Implementing a user-friendly interface.
- Adding English Test base on difficulty level.
- Improving the performance of the application.

## Introduction

L'application "English-Quiz" est une plateforme en ligne destinée à évaluer les utilisateurs en déterminant leur niveau d'Anglais grâce à des quiz interactifs. L'objectif principal de cette application est de fournir une expérience d'apprentissage engageante et efficace pour les apprenants de tous niveaux.

## Objectifs

Les principaux objectifs de l'application "English-Quiz" sont les suivants :

1. **Enseignement interactif :** Proposer des quiz interactifs et dynamiques pour permettre aux utilisateurs d'apprendre l'anglais de manière ludique.

2. **Niveaux de compétence :** Offrir une gamme de quiz adaptée à différents niveaux de compétences en utilisant le cadre européen de référence pour les langues (CECRL) : Débutant (A1, A2) , Intermédiaire (B1, B2) , Avancée (C1) , Maitrise (C2).
   Deux catégories de Test : "Scolaire" et "Professionnel".

3. **Suivi des progrès :** Permettre aux utilisateurs de suivre leurs progrès, de voir leurs scores, voir leur place sur un leaderboard et d'identifier leurs domaines d'amélioration.
   Permettre, par exemple, une prescription de formation en fonction du résultat.

4. **Personnalisation :** Offrir la possibilité aux administrateurs de personnaliser leurs quiz en fonction de leurs besoins et de leurs intérêts.
   L'administrateur peut modifier l'ensemble des quiz à sa guise.

## Fonctionnalités principales

### 1. Inscription et Connexion

- Les utilisateurs doivent pouvoir créer un compte avec leur nom, prénom, pseudo, e-mail et un mot de passe.
- Les utilisateurs doivent pouvoir se connecter à leur compte avec leur pseudo(ou e-mail) et un mot de passe.
- Les utilisateurs doivent pouvoir se connecter à leur compte existant.
- Envisager une suppression automatiques des données au bout de "X" temps, inscrire cela dans le RGPD (« Règlement Général sur la Protection des Données »).

### 2. Sélection de Niveau

- Les utilisateurs doivent pouvoir choisir leur niveau de compétence en anglais lors de l'inscription ou à tout moment dans leur profil.
- Si le niveau n'est pas connu par l'utilisateur, alors le premier quizz sera automatiquement de niveau A1.
- L'application doit proposer des quiz adaptés au niveau choisi.

### 3. Structure du Quiz

- Chaque question du quiz doit avoir un délai de 30 Secondes pour y répondre.
- Les utilisateurs doivent voir le nombre de points concernant chaque question basé sur un code couleur :
  (Vert : Facile (10points) Jaune : Intermédiaire (20 points) Rouge : Avancé (50 points)).
- Les utilisateurs doivent recevoir des scores immédiats après avoir terminé un quiz.
- Les utilisateurs doivent avoir accès à un tableau de bord qui affiche les scores de chaque niveau de difficulté,
  leur niveau actuel et leurs statistiques de quiz.
- L'application doit montrer les domaines où l'utilisateur peut s'améliorer en fonction de ses réponses aux quiz.

### 4. Contenu du Quiz

- L'application doit offrir une variété de quiz, y compris des questions à choix multiples, des questions à réponses multiples, des questions ouvertes, remplir des espaces vides (et/ou faire glisser des mots) et des questions numériques.
- Les utilisateurs ont la possibilités de se mettre en compétition avec d'autres utilisateurs par l'intermédiaire d'un leaderboard.
- Deux modes de Quiz : "Scolaire" et "Adulte".
- Création de catégories de questions par niveaux de difficulté ( Débutant (A1, A2) , Intermédiaire (B1, B2) , Avancée (C1) , Maitrise (C2).)
- Génération de compte-rendu basé sur un algorithme de score et de statistiques.

### 5. Expérience Utilisateur

- Affichage des questions sous forme de cartes ("flip cards").
- Envoi du score par email à l'utilisateur, avec des recommandations de formation.
- Attribution de badges de niveau. ( Débutant (A1, A2) , Intermédiaire (B1, B2) , Avancée (C1) , Maitrise (C2).)
- Réponse obligatoire à chaque question pour passer à la suivante.
- Affichage en cascade du score.

### 6. Support Multimédia

- Possibilité d'intégrer des fichiers audio MP3 pour les tests de compréhension orale.
- Fourniture du script des fichiers MP3.
- Intégration éventuelle de vidéos YouTube (libres de droits), avec spécification de la source.

### 7. Corrections

- Fourniture des corrections pour toutes les questions.

## Conception et Interface Utilisateur

- L'interface utilisateur doit être conviviale, intuitive et responsive pour une utilisation sur des appareils mobiles et des ordinateurs de bureau.
- Utilisation d'une palette de couleurs attrayante et de polices lisibles.
- Intégration d'images et d'icônes pour rendre l'application visuellement attrayante.

## Technologies Utilisées

- L'application sera développée en utilisant des technologies web modernes, telles que HTML, CSS, JavaScript, et une base de données pour stocker les informations utilisateur et les quiz.

## Calendrier de Développement

- Le développement de l'application "English-Quiz" sera réalisé en plusieurs étapes sur une période de quelques mois.

# TECHNICAL ASSET

## COMPOSER

### Doctrine ORM (pour la gestion de la base de données)

> composer require symfony/orm-pack
>
> composer require doctrine
>
> composer require doctrine/doctrine-bundle
>
> composer require --dev orm-fixtures

### Twig (le moteur de templates par défaut)

> composer require symfony/twig-bundle
>
> composer require twig
>
> composer require twig/extra-bundle

### EasyAdmin (Dashboard)

> composer require easycorp/easyadmin-bundle

### Security

> composer require symfony/security-bundle
>
> composer require symfony/form

### HTTP Request

> composer require symfony/http-foundation
>
> composer require symfony/http-kernel

## APPLICATION

### Symfony Setup

- Create

  > symfony new --webapp dirname/

- Database
  > Modification du fichier .env : DATABASE_URL="mysql://root:@localhost:3306/english_quiz?serverVersion=10.11.2-MariaDB&charset=utf8mb4"

> php bin/console doctrine:database:create

> php bin/console make:migration

> php bin/console doctrine:migrations:migrate

> php bin/console doctrine:fixtures:load

- Login/Register
  > php bin/console make:user

> php bin/console make:auth

- Server
  > symfony server:start --no-tls -d
  >
  > symfony server:stop

### Controllers

> php bin/console make:controller

> HomeController => Homepage
>
> SecurityController => Manage [Login,Register,Authenticator,Logout] Routes, Form
>
> UserController => Manage [Account] Routes, Forms

### Forms

> php bin/console make:registration-form

### Crud

> php bin/console make:crud => auto crud
>
> php bin/console make:admin:crud => easyAdmin
Create Admin folder into the Controller folder
