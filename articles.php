<?php
session_start();
include("./lesboss/header.php");
require 'config.php';

//On recupere l'id  
$id = $_GET['id'];

//On recupre l'article 

$reponse = $dbname->prepare('SELECT * FROM articles WHERE id_article = ?');
$reponse->execute([$id]);
$fin = $reponse->fetch();

if ($_SESSION["role"] == "utilisateur") {

?>



    <section class="section_article"></section>
    <img src="<?php echo $fin['fichier']; ?>">
    <p>
        <?php
        echo $fin['auteur'];
        ?>
    <h2> <?php echo $fin['titre']  ?></h2>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam modi placeat est aliquam earum recusandae, debitis doloribus ratione architecto, vitae ex quibusdam. Dolorum molestiae
    praesentium, eos veniam numquam sint ex!
    </p>
    <hr>

    <!-- A completer  -->
    <form action="./articles_traitement.php" method="GET">
        <h3>Modifier</h3>

        <!-- Utilisation de la balise input permettant à l'utilsiateur de saisir des données depndant de la valeur dans son attribut type  -->
        <input hidden type="text" name="id_article">


        <input type="submit" value="retour">

        <!-- Mise en place de l'input hidden correspondant à la detection du role pendant la session -->
        <input hidden type="text" name="id_users" value="<?= $_SESSION['id'] ?>">
    </form>

    <!-- Utilisation de la balise img src stipulant l'image se trouvant dans la table fichier -->

    <img src="img/<?php echo $reponse['fichier']; ?>">

    <!-- Utilisation du Lorem ipsum  -->

    <h4>Nulla gravida condimentum justo nec rhoncus</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae illum doloribus expedita laboriosam, temporibus vel architecto molestiae fugit nisi nesciunt officiis aperiam nulla,
        fugiat incidunt error consectetur molestias non distinctio.</p>
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