<?php

include("./lesboss/header.php");
require 'config.php';
include("./monespace_traitement.php");

?>


<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Creation de la page profil  -->

    <title>Mon profil</title>

    <head>

    <body>
        <h2> Voici le profil de <?= $afficher_profil['prenom'] . $afficher_profil['nom']; ?></h2>



        <input type="text" id=name name="name" value="<?= $afficher_profil['prenom'] ?>">
        <input type="text" id="name" name="name" value="<?= $afficher_profil['nom'] ?>">



        <!-- LISTE  -->

        <!-- Affichage des informations sous forme d'une liste  -->
        <ul>

            <li>Votre id est: </li>

            <!-- Uitilisation de l'element input ayant pour valeur une variable stockant un tableau contenant l'element id_users de la bdd -->
            <input type="text" id="name" name="name" value="<?= $afficher_profil['id_users'] ?>">




            <li> Votre adresse email est :</li>
            <!-- Utilisation de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element email enregistrer dans la bdd  -->
            <input type="text" name="name" value="<?= $afficher_profil['email'] ?>">



            <li> Votre mot de passe est: </li>
            <!-- Utilisation de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element mdp enregistré dans la bdd -->
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['mdp'] ?>">



            <li> votre adresse est : </li>
            <!-- Utilisation de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element adresse enregistré  dans la bdd  -->
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['adresse'] ?>">



            <li> Votre ville est: </li>
            <!-- Utilsition de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element ville enregistré dans la bdd -->
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['ville'] ?>">


            <li> votre code postal est: </li>
            <!-- Utilsiaiton de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element cp enregistré dans la bdd -->
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['cp'] ?>">


            <li> Vous êtes un : </li>
            <!-- Utilisation de l'element input ayant pour valeur une variable stockant sous forme de tableau l'element type enregistré dans la bdd  -->
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['type'] ?>">


            <!-- Utilisation de l'element input ayant pour valeur une variable stockant sous forme de tableau l'elemnt  -->
            <li> Votre pseudo est: </li>
            <input type="texte" id="name" name="name" value="<?= $afficher_profil['pseudo'] ?>">


        </ul>

        <a href="modprofil.php">Modifier son profil </a>
        <a href="allusers.php">Afficher tous les adhérents </a>



    </body>


</html>