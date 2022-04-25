<?php

// Demarre une nouvelle session ou reprend une session existante 

session_start();

// Detruit une session en detruisant toutes les données associées à la session courante 
session_destroy();

// Redirection vers la page d'accueil 
header("Location:./index.php");
exit();
