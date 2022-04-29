<?php
session_start();

require 'config.php';

// Detection de la session en cours si il n'y a pas de session 
// Mise en place d'une condition stipulant la detection du role lors de la session 
if (($_SESSION["role"] == "utilisateur") || ($_SESSION["role"] == "admin")) {
    if (!isset($_SESSION['id'])) {

        header('Location: index.php');
        exit;
    }

    // On recupère les informations  de l'utilisateur connecté 

    //On fait une requete préparée 
    $afficher_profil = $dbname->prepare('SELECT * FROM users WHERE id_users = ?');

    // On execute et on stocke sous forme de tableau 
    $afficher_profil->execute([$_SESSION['id']]);

    // On fetch le tout 
    $afficher_profil = $afficher_profil->fetch();
    // mise en place de stipulant un autre chemin si l'execution ne s'effectue pas 
} else {
    header('location: index.php');
}
