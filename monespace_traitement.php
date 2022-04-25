<?php
session_start();

require 'config.php';

// Detection de la session en cours si il n'y a pas de session 

if (!isset($_SESSION['id'])) {

    header('Location: index.php');
    exit;
}

// On recupère les informations  de l'utilisateur connecté 

//On fait une requete préparée 
$afficher_profil = $dbname->prepare('SELECT * FROM users WHERE id_users = ?');

//On execute 
$afficher_profil->execute([$_SESSION['id']]);

// On fetch le tout 
$afficher_profil = $afficher_profil->fetch();
