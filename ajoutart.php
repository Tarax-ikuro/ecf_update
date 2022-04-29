<?php
session_start();
require_once("./lesboss/header.php");
require 'config.php';
require("upload.php");
// Verification si l'utilisateur clique sur le bouton d'envoi 


?>
<!-- utilisattion d'<article> destiné à être distribuée ou réustiliser de manière indépendante permettant aux users de fournir des informations  -->

<article class="ajout">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Utilisation de <div> pour diviser le contenu -->

        <!-- Utilsiation d'<input> permettant de saisir des données dépendant de la valuer indiquée dans son attribut type  -->


        <input type="text" name="titre" placeholder="Renseignez le titre">

        <input type="text" name="auteur" placeholder="auteur">

        <input type="text" name="genre" placeholder="renseignez un genre">
        <!-- Utilisation de la balise date permettant l'affichage d'un calendrier  -->
        <input type="date" name="date_publi">

        <!-- Mise en place d'une balise select permettant d'afficher un nombre d'options defini  -->
        <select name="id_categorie" id="name">
            <option value="1">Livre</option>
            <option value="4">DVD</option>
            <option value="5">CD</option>
        </select>

        <input type="text" name="emprunt" placeholder="renseignez un emprunt">

        <input type="text" name="collection" placeholder="collection">

        <input type="text" name="edition" placeholder="maison d'édition">

        <!-- Utilisation de <textarea> qui permet déditer du texte sur un secteur donné -->

        Select image to upload:
        <input type="file" name="fichier" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">









        <input hidden type="text" name="id_users" value="<?= $_SESSION["id"] ?>">

        <!-- Mise en place d'un input hidden correspondant à la detection du role pendant la session -->


        <!-- Utilisaiton de <select> permettant de fournir une liste de categorie parmis lesquelles les differents utilisateurs pouront choisir  -->


        </div>
        <!-- Utilisation du de la balise bouton permettant  de soumettre des formulaires dans n'importe quel document  -->

    </form>

</article>