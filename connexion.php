<?php


require_once("./lesboss/header.php");
require 'config.php';
require("./connexion_traitement.php");


?>
<!--  Utilisation de la session permettant de modifier des variables globales qui permet de lire les informations sauvegardés en session
 Elle fonctionne comme un tableau -->

<!-- Utilisation d'<article> destinée à être distribuée ou réutiliser de manière indépendante -->
<article class="mb-3" style="width: 18rem;">





    <!-- Ajout de h2 pour dimensionner une taille de police équivalente à un titre -->

    <h2 class="text-center">Connexion</h2>





    <!-- Utilisation de l'élément form afin de créer un formulaire contenant des intéractions permettant à l'admin de fournir des informations  -->

    <form actiont="connexion_traitement.php" method="POST">




        <!-- Utilisation d'<input> permettant à l'admin de saisir des données dependant de la valeur indiquée dans son attribut type  -->

        <div>
            <input type="email" name="email" placeholder="Entrez l'adresse email" class="form-label">
            <input type="password" name="mdp" placeholder="Entrez le mode de passe" class="form-label">
            <input type="pseudo" name="pseudo" placeholder="Entrez le pseudo" class="form-label">

        </div>

        <!-- Utilisation d'<button> permettant de soumettre des formulaires n'importe oudans un doc -->
        <button button="connexion" class="btn btn-outline-primary">Connexion</button>
        </div>
</article>

<?php
require_once("./lesboss/footer.php");
?>