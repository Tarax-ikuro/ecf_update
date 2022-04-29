<?php
include("./lesboss/header.php");
require 'config.php';
include("./mesemprunts_traitement.php");
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Creation de la page profil  -->

    <!-- Utilisation de la balise titre stiulant l'ecriture au format titre dans le champ  -->
    <title>Mes emprunts </title>

    <head>

    <body>
        <!-- Utilisation de la balsie form repesentat nune section d'un document permettant à l'utilsiateur de fournir des informations   -->
        <form>
            <h2> Voici la liste de mes emprunts </h2>

            <!-- LISTE -->
            <!-- Affichage des informations sous forme d'une liste  -->
            <ul>
                <!-- Utilsiation de la structure de langage foreach permettant de parcourir des tableau et de créer des boucles  -->
                <?php
                foreach ($afficher_emprunt as $elem) : ?>


                    <!-- Uitilisation de l'element input ayant pour valeur une variable stockant un tableau contenant l'element id_pret de la bdd -->

                    <img src="<?php echo $elem['fichier'] ?>">


                    <!-- Utilisation de la balise <h1> stipulant le plus haut niv de titres de document -->
                    <h1>Titre: <?php echo $elem['titre'] ?></h1>

                    <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure le nom de l'auteur apparaitra  -->
                    <p class="text-center"> Auteur: <?php echo $elem['auteur'] ?> </p>


                    <!-- Utilisation d'echo affichant une chaîne de caractères dans ce cas de figure le genre apparaitra  -->
                    <p> Emprunter le :<?= $elem['date_depart'] ?></p>

                    <!-- Marquage de fin de la boucle endforeach  -->
                <?php endforeach ?>