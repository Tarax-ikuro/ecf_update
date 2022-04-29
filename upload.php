<?php
require_once("./lesboss/header.php");
require 'config.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fichier"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check si le fichier est une image ou pas 

// Mise en place d'une identification de session via la condtion if suivant le role 

// SI detection en tant qu'admin donc execution du code 
if ($_SESSION["role"] == "admin") {
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fichier"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . "."; // Le fichier est une image 
            $uploadOk = 1;
            // Nom du fichier  temporaire pour stocker le fichier 
            $tmp_file = $_FILES["fichier"]["tmp_name"];
            // Telechargement du chemin repertoire 
            $target_dir = "uploads/";
            // Deplacement vers le fichier téléchargé vers un emplacement spécifique 
            move_uploaded_file($tmp_file, $target_file);
        } else {
            echo "File is not an image."; // Le fichier n'est pas une image 
            $uploadOk = 0;
        }


        // Mise en place d'une condition stipulant des declarations de varaibles 
        //    Utilisation de la fonction isset declarant l'aspect definie et differente de null 
        if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['genre']) && isset($_POST['date_publi']) && isset($_POST['id_categorie']) && isset($_POST['emprunt']) && isset($_POST['collection']) && isset($_POST['edition'])) {

            //Mise en palce des specialchars convertissants des caractères speciaux en php 
            //Transmissions des infos du formulaire de manière avec $_POST.
            // Utilisation des specilachars evitants toutes injections xss 





            // Création des variables superglobales qui prennent  en compte les données remplis.
            $titre = htmlspecialchars($_POST['titre']);
            $auteur = htmlspecialchars($_POST['auteur']);
            $genre = htmlspecialchars($_POST['genre']);
            $date_publi = htmlspecialchars($_POST['date_publi']);
            $id_categorie = htmlspecialchars($_POST['id_categorie']);
            $emprunt = htmlspecialchars($_POST['emprunt']);
            $collection = htmlspecialchars($_POST['collection']);
            $edition = htmlspecialchars($_POST['edition']);
            // $fichier = htmlspecialchars($_POST['fichier']);



            // Utilisation de la variable superglobale de la base de donnée 
            // Declaration avec la mise en place du configurateur 
            // Il configure un attribut du gestionnaire de base de données.Certains  pilotes disposent de configuations supplementaires 
            $dbname->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            //    Mise en place de la requete preparée 
            // Utilisation du bloc try pour faciliter la saisie d'une exception potentielle
            try {
                //    On prepare la requete 
                $requeteAdd = $dbname->prepare("INSERT INTO articles (titre,auteur,genre,date_publi,id_categorie,emprunt,`collection`,`edition`,fichier) VALUES (:titre, :auteur, :genre, :date_publi, :id_categorie, :emprunt, :collection, :edition, :fichier)");
                //   On execute la requete 
                //   On execute la requete sous forme de tableau 
                $requeteAdd->execute(
                    [
                        'titre' =>  $titre,
                        'auteur' => $auteur,
                        'genre' => $genre,
                        'date_publi' => $date_publi,
                        'id_categorie' => $id_categorie,
                        'emprunt' => $emprunt,
                        'collection' => $collection,
                        'edition' => $edition,
                        'fichier' => $target_file


                    ]
                );
                // Utilisation de $target_file specifiant la cible du stakcage de fichier 
                // Execpetion attrapée par le bloc catch généra l'objet 

            } catch (Exception $e) {
                echo $e->getMessage();
            }








            // Mise en place de message et une redirection possible selon les conditions
            echo " l'article a bien été envoyé ";
            header("Location: ./index.php");
        } else {
            echo "Veuillez completer tous les champs....";
        }
    }
} else {
    header("location: index.php");
}
