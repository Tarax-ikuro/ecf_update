<?php
session_start();
include("./lesboss/header.php");
include("./index_traitement.php");
require 'config.php';
?>
<!-- Mise ne place d'une boucle foreach servant à créer une boucle -->
<?php foreach ($reponse as $requeteShow) :
?>

    <!-- Mise en place d'une balise <article> qui représente une composition autonome dans un document une page de manière être réutiliser de manière independante   -->
    <article class="card">


        <img src="<?php echo $requeteShow['fichier'] ?>">


        <!-- Utilisation de la balise <h1> stipulant le plus haut niv de titres de document -->
        <h1>Titre: <?php echo $requeteShow['titre'] ?></h1>

        <!-- Utilisation de la balise <p> representant des blocs séparées par un espace vertical -->

        <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure le nom de l'auteur apparaitra  -->
        <p class="text-center"> Auteur: <?php echo $requeteShow['auteur'] ?> </p>


        <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure le genre apparaitra  -->

        <p> Genre: <?php echo $requeteShow['genre'] ?> </p>


        <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure la date de publication apparaitra  -->

        <p>Date de publication: <?php echo $requeteShow['date_publi'] ?> </p>


        <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure qon id apparaitra  -->

        <p> <?php echo $requeteShow['id_categorie']  ?> </p>

        <!-- Utilisation d'echo affichant une chaîne de caractères dans se cas de figure la maison d'edition  apparaitra  -->

        <p>Edition:<?php echo $requeteShow['edition'] ?> </p>

        <!-- Utilisation d'echo affichant une chaine de caractère dans ce cas de figure l'emprunt apparaitra  -->

        <p><?php echo $requeShow['emprunt'] ?> </p>

        <!-- Utilisation d'echo affichant une chaine de caractère dans ce cas de figure la collection apparaitra-->

        <p>Collection: <?php echo $requeteShow['collection'] ?> </p>

        <div class="show">

            <!--Utilisation de la balise a avec son attribut href qui crée des liens hyeprtextes vers des pages web ,des fichiers, des adresses email   -->
            <!-- Utilsiation d'echo affchant une chaine de caractère dans ce cas de figure l'id article apparaitra  -->
            <a href="articles.php?id=<?php echo $requeteShow['id_article'] ?>"><button type="submit" name=""> Voir plus </button></a>

            <hr>

        </div>

        <!-- Mise en place de la syntaxe de fermeture endforeach -->
    <?php endforeach ?>
    </article>