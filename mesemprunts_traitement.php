<?php
session_start();

require 'config.php';

// Detection de la session en cours si il n'y a pas de session 
if (($_SESSION["role"] == "utilisateur") || ($_SESSION["role"] == "admin")) {
    if (!isset($_SESSION['id'])) {

        header('Location: index.php');
        exit;
    }

    // On recuprere les informations de l'article choisi par l'utilisateur
    // Utilisation de la requete SQL INNER JOIN stipulant le lien entre deux tables
    // Dans ce cas de figure On selectionne tout de la table pret lié à la table article dans lesuqels le facteur commun est id articles dans chacune des tables équivalent à id de la session 
    $afficher_emprunt = $dbname->prepare('SELECT * FROM pret INNER JOIN articles ON pret.id_article = articles.id_article WHERE id_users = ' . $_SESSION['id']);

    // On execute  les variables et la valuer de retour en tableau 
    $afficher_emprunt->execute();

    // On fetch le tout 
    $afficher_emprunt = $afficher_emprunt->fetchAll();
} else {
    header('Location: index.php');
}
