<?php
Session_start();
include("./lesboss/header.php");
require 'config.php';

if (!isset($_SESSION['id'])) {
    header('location: index.php');
    exit;
}

// Recuperation de l'id passer en argument dans l'URL
//  ON recupere l'utilisateur selectionné
$id =  $_GET['id'];
// On récupère les informations de l'utilisateur grâce à son ID

// Mise ne palce d'une condition = stipulant l'affichage de l'utilisateur selectionné 
$afficher_profil = $dbname->prepare('SELECT * FROM users WHERE id_users = ?');

// On execute 
$afficher_profil->execute([$id]);

//  On fetch les requetes precedentes
$fin = $afficher_profil->fetch();

if (!isset($afficher_profil['id'])) {
    header('Location: index.php');
    exit;
}




//////////////////////////////////////////////////////////////////////
///////////////////////////PAGE///////////////////////////
///////////////////////////////////////////////////////////////////////



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil de l'utilisateur</title>
</head>

<body>
    <h2>Voici le profil de <?= $afficher_profil['prenom'] . " " .  $afficher_profil['nom']; ?></h2>
    <div>Informations sur son profil : </div>
    <ul>
        <li>Son id est : <?= $afficher_profil['id_users'] ?></li>
        <li>Son email est : <?= $afficher_profil['email'] ?></li>
        <li>Son mot de passe est : <?= $afficher_profil['mdp'] ?></li>
        <li>Son adresse est :<?= $afficher_profil['adresse'] ?></li>
        <li>Sa ville est :<?= $afficher_profil['ville'] ?></li>
        <li>Son code postal est:<?= $afficher_profil['cp'] ?></li>
        <li>Son pseudo est:<?= $afficher_profil['pseudo'] ?></li>
    </ul>

    <body>

</html>