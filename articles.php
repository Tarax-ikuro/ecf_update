<?php
session_start();
include("./lesboss/header.php");
require 'config.php';
include("./emprunt.php");
//On recupere l'id  
$id = $_GET['id'];

//On recupre l'article Mise en palce de la requete 
// ON prepare la requete 

// On prepare la requete avec la requete SQL SELECT 
// Utilisation de * stipulant une selection globale des colonnes selecitonnés  
// Utilisation de ? stipulant la donnée rentrée lors de la saisie
$reponse = $dbname->prepare('SELECT * FROM articles WHERE id_article = ?');

// On execute la requete 
// Execution de la requete avec le stockage de la session dnas un tableau 
$reponse->execute([$id]);

// On fetch le tout 
$fin = $reponse->fetch();


// Detection de la utilisateur 
// Si la condition est réunie alors execution du conde dans les accolades 
if (($_SESSION["role"] == "utilisateur") || ($_SESSION["role"] == "admin")) {

?>


    <!-- Utilisation de la balise section  representant un groupe de contenu thematique -->
    <section class="section_article">
        <!-- Utilisation de la balise img src stipulant l'image se trouvant dans la table fichier -->
        <img src="<?php echo $fin['fichier']; ?>">
        <p>

            <!-- Apparition de la variable stockant l'auteur dans un tableau  -->
            <?php
            echo $fin['auteur'];
            ?>
            <!-- Apparition de la variable stockant le titre dans un tableau  -->
        <h2> <?php echo $fin['titre'];  ?></h2>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam modi placeat est aliquam earum recusandae, debitis doloribus ratione architecto, vitae ex quibusdam. Dolorum molestiae
        praesentium, eos veniam numquam sint ex!
        </p>

        <!-- Mise en place de la form action de utilisation de la methode post  -->
        <form action="emprunt.php" method="POST">

            <!-- Mise en place des input hidden de type texte utilisant comme valeur les valeurs recupéré dans d'autres pages  -->
            <input hidden type="text" name="id_article" value="<?= $fin['id_article']; ?>">

            <!-- Mise en place des input hidden de type texte utilisant comme valeur la session enregistré  -->
            <input hidden type="text" name="id_users" value="<?= $_SESSION['id']; ?>">

            <!-- Mise en place de la balise button name  -->
            <button name="emprunter">Emprunter</button>

        </form>
        <hr>

        <!-- A completer  -->
        <form action="./articles_traitement.php" method="GET">


            <!-- Utilisation de la balise input permettant à l'utilsiateur de saisir des données depndant de la valeur dans son attribut type  -->
            <input hidden type="text" name="id_article">


            <input type="submit" value="">

            <!-- Mise en place de l'input hidden correspondant à la detection du role pendant la session -->

        </form>




        <!-- Utilsiation de la balise button de type submit stipulant une execution de formulaire  -->
        <button type="submit" class="form form-control" action="voir" class="btn btn-primary"><a class="voir" href="recette.php">Voir plus</a></button>
    </section>

    </main>
<?php
















} else {
    header('Location: index.php');
}
?>


<?php

include("./lesboss/footer.php");
?>