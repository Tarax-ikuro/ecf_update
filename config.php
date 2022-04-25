<?php
session_start();

// CONNEXION A LA BASE DE DONNÉES 


// Utilisation de l'extension orientée objet PDO en utilisant comme paramètres 

// le nom de l'hote : localhost 
// la base de donnée: arMadediaBdd
// l'identifiant: ARIAS
//  Et le mot de passe identique 
try {
    $dbname = new PDO('mysql:host=localhost;dbname=arMediaBdd', 'ARIAS', 'ARIAS');
} catch (Exception $e) {
    die('could not connect to database' . $e->getMessage());
}
