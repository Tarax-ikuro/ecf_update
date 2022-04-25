<?php

var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">




</head>

<body>

    <header>
        <!-- Mise en place d'une balise <nav> representant une section d'une page ayant des liens vers d'autres pages  -->
        <nav>

            <!-- LISTE -->
            <!--Mise en place de la balise <ul> representant une liste d'élements   -->
            <ul>
                <!-- Utilisation de la balsie <li> representant un élément daans une liste -->
                <li><a href="./index.php">ACCUEIL</a> </li>

                <li><a href="catalogue.php">CATALOGUE</a></li>
                <li><a href="./inscription.php">INSCRIPTION</a></li>
                <li><a href="./connexion.php">CONNEXION</a></li>
                <li><a href="logout.php">DECONNEXION</a> </li>
                <li><a href="./ajoutart.php?id=<?php echo $requeteShow['id_article'] ?>">ADMINISTRATION</a> </li>
                <li><a href="./monespace.php?id=<?php echo $requeteShow['id_users'] ?>">MON ESPACE</a> </li>
            </ul>


            <!-- BARRE DE RECHERCHE  -->
            <!-- Creation d'une search bar  -->


        </nav>

        <!-- IUtlsition de la balise <div> representant une separation de cdontenu  -->
        <div>
            <!-- Utilisation de la balise <img> permettant d'intégrer une image dans un document  avec sa source de diffusion  -->
            <!-- <img class="olive" src="blog/img/logo.png"> -->
            <!-- Utilisation de la balise <h1> representant les elements de titres de sections   -->
            <h1>MEDIATHEQUE
        </div>

        <hr>

    </header>
    <main>