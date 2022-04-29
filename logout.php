<?php

// Demarre une nouvelle session ou reprend une session existante 

session_start();

// Detruit une session en detruisant toutes les données associées à la session courante 
session_destroy();
// Utilsiation de la focntion setcookie permettant de stockées les infos de la session dans un cokkie 
//  Dans ce cas de figure destructio nde la session donc destruction du cookie à une periode donnée 
setcookie('utilisateur', 'id_users', time() + 60 * 60 * 24 * 30);
// Redirection vers la page d'accueil 
header("Location:./index.php");
exit();
