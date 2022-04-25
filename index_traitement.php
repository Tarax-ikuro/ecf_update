<?php
require_once './config.php';

// Mise en place de la requete SELECT afin de selectionner les colonnes de la table articles
//Ainsi qu'une preparation de la requete 
$requeteShow = $dbname->prepare('SELECT id_article,titre,auteur,genre,date_publi,id_categorie,emprunt,collection,edition,fichier FROM articles');

// Execution de la requete preparée  precedemment avec execute()
$requeteShow->execute();


// Utilisation de fetchAll() retourant un tableau contenant les valeurs des colonnes
$reponse = $requeteShow->fetchAll();
