<?php
require 'config.php';

// Mise en place des declarations de variables 
// Creations des variables 
$id_article = $_POST['id_article'];
$id_users = $_SESSION;

// Mise en place des requetes preparées 
// Mise en place des conditions lors de l'appui sur le rendu 

if (isset($_POST["rendre"])) {
    $id_pret = $_POST['id_pret'];
    $id_article = $_POST['id_article'];

    //  On prepare la requete

    $reqrend1 = $dbname->prepare("UPDATE pret SET rendu = CURRENT_TIMESTAMP WHERE id_pret = $id_pret");
    // On execute la requete 
    $reqprend1->execute(["id_pret" => $id_pret]);

    // Creation d'une deuxième requete

    // Utilisation de la requete sql UPDATE peremttant d'effecuter des modifications sur des lignes existantes.

    // Utilisation du WHERE pour specifier sur quelles lignes doivent porter les modifications 
    $reqrend2 = $dbname->prepare("UPDATE articles SET etat = 'Disponible' WHERE id_article = $id_article");


    // ON execute la requete on stock leresqultat sous forme de tableau
    $reqrend2->execute(["id_article" => $id_article]);

    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION["message"] = "Modification effectué";
    header("Location: index.php?page=adminPret");
    exit;
}
