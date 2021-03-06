<?php
session_start();
include("./lesboss/header.php");
require 'config.php';




if ($_SESSION["role"] == "admin") {
    if (!isset($_SESSION['id'])) {
        header('Location: index.php');
        exit;
    }

    // On récupère tous les utilisateurs sauf l'utilisateur en cours
    // Mise en place d'une condition <> stipulant l'affichage de tous les utilisateurs sauf moi 
    $afficher_profil = $dbname->prepare("SELECT * FROM users WHERE id_users <> ?");

    //  On execute 
    $afficher_profil->execute([$_SESSION['id']]);

    // On fetch le tout 
    $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de récupérer plusieurs enregistrements


?>


    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Utilisateurs du site</title>
    </head>

    <body>
        <div>Utilisateurs</div>
        <table>

            <!-- L'element tr definit uen ligne de cellule dans un tableau.Elle peut ête constitué de th -->
            <tr>
                <!-- L'element th definit une cellule d'un tableau comme une cellule d'en tête pour un groupe de cellule.La nature de ce groupe peut ête definit selon des attritbuts  -->
                <th>Prenom</th>
                <th>nom</th>
                <th>id_users</th>
                <th>email</th>
                <th>mdp</th>
                <th>adresse</th>
                <th>ville</th>
                <th>cp</th>
                <th>type</th>
                <th>pseudo</th>










                <th>Voir le profil</th>
            </tr>
            <?php

            //    Utilisation de foreach 
            // Foreach agit comme une boucle mais celle-ci s'arrête de façon intelligente. 
            // Elle s'arrête avec le nombre de lignes qu'il y a dans la variable $afficher_profil
            // La variable $afficher_profil est comme un tableau contenant plusieurs valeurs
            // pour lire chacune des valeurs distinctement on va mettre un pointeur que l'on appellera ici $ap
            foreach ($afficher_profil as $ap) {
            ?>
                <tr>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le prenom -->
                    <td><?= $ap['prenom'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le nom -->
                    <td><?= $ap['nom'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le id_users -->
                    <td><?= $ap['id_users'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le email -->
                    <td><?= $ap['email'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le mdp -->
                    <td><?= $ap['mdp'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le adresse -->
                    <td><?= $ap['adresse'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le ville -->
                    <td><?= $ap['ville'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le cp -->
                    <td><?= $ap['cp'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le type -->
                    <td><?= $ap['type'] ?></td>

                    <!-- Utilisation de la balise td definit une cellule d'un talbeau dans ce cas de figure le pseudo -->
                    <td><?= $ap['pseudo'] ?></td>



                    <!-- Utilisation de la balsie a crée un lien hypertextes vers des pages,des fichiers  -->

                    <td><a href="voir_profil.php?id=<?= $ap['id'] ?>">Aller au profil</a></td>
                </tr>
        <?php
            }
        } else {
            header('Location: index.php');
        }
        ?>

        <?php

        include("./lesboss/footer.php");
        ?>

        </table>

    </body>

    </html>