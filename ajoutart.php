<?php
session_start();
require_once("./lesboss/header.php");
require 'config.php';

// Verification si l'utilisateur clique sur le bouton d'envoi 

if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['genre']) && isset($_POST['date_publi']) && isset($_POST['id_categorie']) && isset($_POST['emprunt']) && isset($_POST['collection']) && isset($_POST['edition']) && isset($_POST['fichier'])) {


    // Creation de variables superglobales 
    $titre = htmlspecialchars($_POST['titre']);
    $auteur = htmlspecialchars($_POST['auteur']);
    $genre = htmlspecialchars($_POST['genre']);
    $date_publi = htmlspecialchars($_POST['date_publi']);
    $id_categorie = htmlspecialchars($_POST['id_categorie']);
    $emprunt = htmlspecialchars($_POST['emprunt']);
    $collection = htmlspecialchars($_POST['collection']);
    $edition = htmlspecialchars($_POST['edition']);
    $fichier = htmlspecialchars($_POST['fichier']);

    $requeteAdd = $dbname->prepare('INSERT INTO articles (titre,auteur,genre,date_publi,id_categorie,emprunt,collection,edition,fichier) VALUES(:titre, :auteur, :genre, :date_publi, :id_categorie, :emprunt, :collection, :edition,:fichier)');
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
            'fichier' => $fichier

        ]
    );









    // Mise en place de message et une redirection possible selon les conditions
    echo " l'article a bien été envoyé ";
    header("Location: ./index.php");
} else {
    echo "Veuillez completer tous les champs....";
}


?>
<!-- utilisattion d'<article> destiné à être distribuée ou réustiliser de manière indépendante permettant aux users de fournir des informations  -->

<article class="mb-3">

    <form method="POST" action="" enctype="multipart/form-data">
        <!-- Utilisation de <div> pour diviser le contenu -->

        <!-- Utilsiation d'<input> permettant de saisir des données dépendant de la valuer indiquée dans son attribut type  -->


        <input type="text" name="titre" placeholder="Renseignez le titre">

        <input type="text" name="auteur" placeholder="auteur">

        <input type="text" name="genre" placeholder="renseignez un genre">

        <input type="date" name="date_publi">

        <select name="id_categorie" id="name">
            <option value="1">Livre</option>
            <option value="4">DVD</option>
            <option value="5">CD</option>
        </select>

        <input type="text" name="emprunt" placeholder="renseignez un emprunt">

        <input type="text" name="collection" placeholder="collection">

        <input type="text" name="edition" placeholder="maison d'édition">

        <!-- Utilisation de <textarea> qui permet déditer du texte sur un secteur donné -->

        <input type="file" name="fichier" placeholder="Ajouter l'image de couverture">

        <input hidden type="text" name="id_users" value="<?= $_SESSION["id"] ?>">

        <!-- Mise en place d'un input hidden correspondant à la detection du role pendant la session -->


        <!-- Utilisaiton de <select> permettant de fournir une liste de categorie parmis lesquelles les differents utilisateurs pouront choisir  -->


        </div>
        <!-- Utilisation du de la balise bouton permettant  de soumettre des formulaires dans n'importe quel document  -->
        <input type="submit" name="">
    </form>

</article>