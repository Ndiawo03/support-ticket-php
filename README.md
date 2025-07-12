# Projet 05 – Formulaire de support (PHP)

Ce projet permet aux utilisateurs de soumettre un ticket d’assistance via un formulaire web.  
Chaque message est enregistré localement dans un fichier texte `.txt` dans un dossier `tickets/`.  
Un espace administrateur sécurisé permet de consulter tous les tickets.

## Fichiers principaux :

- `index.php` : formulaire de support (nom, sujet, message)
- `admin.php` : affichage des tickets pour l’administrateur
- `login.php` / `logout.php` : authentification
- `tickets/` : dossier où sont enregistrés les tickets
- `admin.txt` : identifiants pour se connecter

## Technologies :

- PHP
- HTML
- Sessions
- Fichiers `.txt`

## Fonctionnalités :

- Soumission d’un ticket
- Connexion admin
- Lecture des messages dans une interface

