<?php
require 'config.php';

//Mise en place des requetes de pret 
// Creation de variables 
$id_article = $_POST['id_article'];
$id_users = $_SESSION['id'];
$id_pret = $_POST['id_pret'];
$id_article = $_POST['id_article'];

// Mise en place des conditions  lors de l'appui sur l'emprunt 
// Utilisation de la fonction isset stipulant la determination d'une declaration de variable 
// Mise en palce d'une condition refletant la delcaration precedemment mentionnée 
if (isset($_POST["emprunter"])) {
    $id_pret = $_POST['id_pret'];
    $id_article = $_POST['id_article'];

    // Mise en place des requetes préparées 
    // Creation d'une nouvelle variable 
    // ON prepare la requete
    //    Ajout et utilisation de la fonction DATE_ADD stipulant une date ou un temps donné et le retourne en une intervale  
    $reqPret1 = $dbname->prepare("INSERT INTO pret(id_pret,id_users,id_article,date_retour,date_depart) VALUES(DEFAULT,:id_users,:id_article,DATE_ADD(NOW(), INTERVAL 7 DAY),DEFAULT)");

    // On execute la requete 
    $reqPret1->execute(["id_users" => $id_users, "id_article" => $id_article]);

    // Creation de variables pour pointer les erreurs 
    $test = $reqPret1->errorInfo();


    // Mise en place des requetes preéparées 
    // Creation d'une deuxième requete

    // Creation d'une variable prenant en compte la requete preparée
    // Mise ene place de la requete preparée avec utilisation de la requete SQL UPDATE
    // On prepare la requete 
    // Utilisation de la colonne etat renvoyant la chaine de caractère Indisponible 
    $reqPret2 = $dbname->prepare("UPDATE articles SET etat = 'Indisponible' WHERE id_article = :id_article");

    // On execute la requete et on transforme le resultat en tableau
    $reqPret2->execute(["id_article" => $id_article]);
    $test2 = $reqPret->errorInfo(); // variable pour track les erreurs

    // Mise en palce de message en cas de réusisite du script 
    // Appartion du message en ces de reusssite de l'emprunt 
    $_SESSION["message"] = "Votre article a bien été réservé";
    header("Location: index.php?page=pret");
    exit;
}
