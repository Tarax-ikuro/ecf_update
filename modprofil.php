<?php
session_start();
include("./lesboss/header.php");
require 'config.php';

// Identifiaction de la session Mise en place d'une suite de conditions verifiant les élemnts stockés en base de données 

// Identification de la session grâce à son id 
if (($_SESSION["role"] == "utilisateur") || ($_SESSION["role"] == "admin")) {
    if (isset($_SESSION['id'])) {
        //  Creation d'une variable $requser 
        //   Mise en place d'une requete preparée avec utilisation de la requete SQL SELECT
        //  Utilisation de * stipulant la prise en compte de toutes les colones de la table users
        // Utilisation de ? stipulant la donée rentrée lors de la saisie
        //    Utilisation de WHERE stipulant la cible id_users visée 
        $requser = $dbname->prepare("SELECT * FROM users WHERE id_users = ?");

        //  On execute la requete
        // Execution de la requete avec le stockage de la session dans un tableau 
        $requser->execute(array($_SESSION['id']));
        //   On fetch le tout 
        $user = $requser->fetch();









        //    MODIFICATION DU PSEUDO 

        //    Mise en place d'une condition de declaration de variable avec la fonction isset 
        //   Utilisation de !empty sepcifiant le caractère non vide des variables newpseudo
        if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {

            // Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciaux en entités HTML

            $newpseudo = htmlspecialchars($_POST['newpseudo']);

            // Creation d'une variable prenant en compte la requete preparée 
            // Mise en place de la requete preparé avec utilisation de la requete SQL UPDATE
            // Utilisation de ? stipulant une donnée entrée lors de la saisie 
            //  Utilisation de * stipulant la prise en compte de toutes les colones de la table users
            $insertpseudo = $dbname->prepare("UPDATE users SET pseudo = ? WHERE id_users = ?");

            // Execution de la requete sous forme de tableau 
            $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }










        //    MODIFICATION DE L'EMAIL 

        // Mise ne place d'une condition  de declaration de varaible avec la fonction isset 
        // Utilisation de !empty specifiant le caractère non vide des variables newemail
        if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['email']) {


            //   Declaration d'une variable avec utilisation de la focntion specialchars convertissant des caractères speciaux en entités HTML 
            $newmail = htmlspecialchars($_POST['newmail']);


            //   Creation d'une variable prenant en compte la requete préparée 
            // Mise en place de la requete prepareée avec utilisation de la requete SQL UPDATE
            // Utilisation de ? stipulant une donnée entrée lors de la saisie
            //  Utilisation de * stipulant la prise en compte de toutes les colones de la table users
            $insertmail = $dbname->prepare("UPDATE users SET email = ? WHERE id_users = ?");
            $insertmail->execute(array($newmail, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }









        //    MODIFICATION DU NOM 

        // Mise en place d'une condition de declaration de variable avec la fonction isset
        // Utilisation de !empty specifiant le caractère non vide des variables newnom
        if (isset($_POST['newnom']) and !empty($_POST['newnom']) and $_POST['newnom'] != $user['nom']) {


            // Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciauxs en entiés HTML
            $newnom = htmlspecialchars($_POST['newnom']);


            //   Creation d'une variable prenant en compte la requete préparée
            //    Mise en place de la requete préparée avec utilisation de la requete SQL UPDATE
            //   Utilisation de ? stipulant une donnée entrée lors de la saisie

            $insertnom = $dbname->prepare("UPDATE users SET nom = ? WHERE id_users = ?");
            //    On execute la requete sous forme de tableau 
            $insertnom->execute(array($newnom, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }








        //  MODFICATION DE L'ADRESSE 



        //    Mise en place d'une condition de declaration de variable avc la fonction isset
        // Utilisation de !empty specifiant le caractère non vide des variables newadresse
        if (isset($_POST['newadresse']) and !empty($_POST['newadresse']) and $_POST['newadresse'] != $user['adresse']) {

            //   Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciaux en entités HTML
            $newadresse = htmlspecialchars($_POST['newadresse']);


            //    Creation d'une variable prenant en compte la requete préparée
            // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
            //  Utilisation de ? stipulant une donnée entrée lors de la saisie  
            $insertadresse = $dbname->prepare("UPDATE users SET adresse = ? WHERE id_users = ?");
            //    On execute la requete et on renvoi le resultat sous forme de tableau 
            $insertadresse->execute(array($newadresse, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }




        // MODIFICATION DE LA VILLE 
        //   Mise en place d'une condition de declaration de variable avec la fonction isset
        //  Utilisation de !empty  specifiantle caractère non vide des variables newville 
        if (isset($_POST['newville']) and !empty($_POST['newville']) and $_POST['newville'] != $user['ville']) {

            //    Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciaux en entitéés HTML
            $newville = htmlspecialchars($_POST['newville']);


            //    Creation d'une variable prenant en compte la requete préparée
            // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
            //  Utilisation de ? stipulant une donnée entrée lors de la saisie    
            $insertville = $dbname->prepare("UPDATE users SET ville = ? WHERE id_users = ?");
            //    On execute la requete et on renvoie le resultat sous forme de tableau
            $insertville->execute(array($newville, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }






        // MODIFICATION DU CODE POSTAL 
        //   Mise en place d'une condition de declaration de variable avec la fonction isset
        //  Utilisation de !empty  specifiantle caractère non vide des variables newcp
        if (isset($_POST['newcp']) and !empty($_POST['newacp']) and $_POST['newcp'] != $user['cp']) {

            //  Declaration d'une variable avec utilisiation de la fonction specialchars convertissant des caractères speciaux en entités HTML
            $newcp = htmlspecialchars($_POST['newcp']);

            //    Creation d'une variable prenant en compte la requete préparée
            // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
            //  Utilisation de ? stipulant une donnée entrée lors de la saisie     
            $insertcp = $dbname->prepare("UPDATE users SET cp = ? WHERE id_users = ?");
            //   On execute la requete et on renvoie le resultat sous forme de tableau 
            $insertcp->execute(array($newcp, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }








        //   MODIFICATION DU PRENOM
        //   Mise en place d'une condition de declaration de variable avec la fonction isset
        //  Utilisation de !empty  specifiantle caractère non vide des variables newprenom 
        if (isset($_POST['newprenom']) and !empty($_POST['newprenom']) and $_POST['newprenom'] != $user['prenom']) {

            //   Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciaux en entités HTML
            $newprenom = htmlspecialchars($_POST['newprenom']);

            //    Creation d'une variable prenant en compte la requete préparée
            // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
            //  Utilisation de ? stipulant une donnée entrée lors de la saisie       
            $insertprenom = $dbname->prepare("UPDATE users SET prenom = ? WHERE id_users = ?");
            //   On execute la requete et on renvoie le resultat sous forme de tableau
            $insertprenom->execute(array($newprenom, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }









        //  MODIFICATION DU TYPE 

        //   Mise en place d'une condition de declaration de variable avec la fonction isset
        //   Utilisation de !empty specifiant le caractère non vide des variables newtype
        if (isset($_POST['newatype']) and !empty($_POST['newtype']) and $_POST['newtype'] != $user['type']) {

            //   Declaration d'une variable avec utilisation de la fonction specialchars convertissant des caractères speciaux en entités HTML
            $newtype = htmlspecialchars($_POST['newtype']);

            //    Creation d'une variable prenant en compte la requete préparée
            // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
            //  Utilisation de ? stipulant une donnée entrée lors de la saisie          
            $inserttype = $dbname->prepare("UPDATE users SET type = ? WHERE id_users = ?");
            //  On execute la requete et on renvoie le resultat sous forme de tableau
            $inserttype->execute(array($newtype, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        }













        // MODIFICATION DU MOT DE PASSE 

        //   Mise en place d'une condtion de declaration de variable avec la fonction isset
        //   Utilsation de !empty specifiant le caractère non vide des variables newmdp2
        if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2'])) {

            //  Utilisation de la fonction sha permettant une securité accrue du mdp 
            $mdp1 = sha1($_POST['newmdp1']);
            $mdp2 = sha1($_POST['newmdp2']);

            //   Mise en place d'une condition entre la varaible $mdp1 et $mdp2 
            // Mise en place d'une comparaison des valeurs des variables
            if ($mdp1 == $mdp2) {

                //    Creation d'une variable prenant en compte la requete préparée
                // Mise en place de la requete preparée avec utilisation de la requete SQL UPDATE
                //  Utilisation de ? stipulant une donnée entrée lors de la saisie                 
                $insertmdp = $debname->prepare("UPDATE users SET mdp = ? WHERE id_users = ?");
                //   On execute la requete et on renvoie le resultat sous forme de tableau
                $insertmdp->execute(array($mdp1, $_SESSION['id']));

                // Redirection vers la page correspondante en sauvegardantla sessin via une concatenation 
                header('Location: monespace.php?id=' . $_SESSION['id']);
            } else {
                $msg = "Vos deux mots de passe ne sont pas identiques !";
            }
        }
?>











        <html>

        <head>
            <!-- Utilisation de la balise tilte stipulant le caractère entrée comme étant un titre  -->
            <title>Modification du profil </title>
            <meta charset="utf-8">
        </head>

        <body>
            <div>

                <!--Utilisation de la balise h2 specifiant une taille de titre  -->
                <h2>Edition de mon profil</h2>
                <div>

                    <!-- Utilisation de la balise form representant un formulaire c'est à dire une section permettant à l'utilisateur de rentrer des infos-->
                    <form method="POST" action="" enctype="multipart/form-data">


                        <!--Utilisation de la balise label representant une legende  pour un objet d'une interface  -->
                        <label>Nom :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le nom  -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newnom" placeholder="Nom" value="<?php echo $afficher_profil['nom']; ?>" /><br /><br /> <br />







                        <!--Utilisation de la balise label representant une legende  pour un objet d'une interface  -->
                        <label>Prenom :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le prenom  -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $afficher_profil['prenom']; ?>" /><br /><br /> <br />




                        <!--Utilisation de la balise label representant une legende  pour un objet d'une interface  -->
                        <label>Pseudo :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le pseudo  -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $afficher_profil['pseudo']; ?>" /><br /><br />




                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Email :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le pseudo  -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newmail" placeholder="Mail" value="<?php echo $afficher_profil['email']; ?>" /><br /><br />





                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Mot de passe :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le mot de passe   -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <!-- Utilisation du type password  permettant de saisir un mot de passe sans que celui-ci ne soit pas visible sur l'écran  -->
                        <!-- Utilisation de name comme  newmdp1 permettant de saisir le new mdp  -->
                        <input type="password" name="newmdp1" placeholder="Mot de passe" /><br /><br />





                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Confirmation - mot du passe :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le mot de passe   -->
                        <!--  Utlisation  des balises br specifiant un saut de ligne -->
                        <!-- Utilisation du type password  permettant de saisir un mot de passe sans que celui-ci ne soit pas visible sur l'écran  -->
                        <!--  Utilisation de name comme  newmdp2 permettant de confirmer le mdp-->
                        <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />









                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Adresse :</label>


                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure l'adresse   -->
                        <!--  Utilisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newadresse" placeholder="Adresse" value="<?php echo $afficher_profil['adresse']; ?>" /><br /><br /> <br />





                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Ville :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure la ville   -->
                        <!--  Utilisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newville" placeholder="Ville" value="<?php echo $afficher_profil['ville']; ?>" /><br /><br /> <br />






                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Code Postal:</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le code postal   -->
                        <!--  Utilisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newnom" placeholder="Code postal" value="<?php echo $afficher_profil['cp']; ?>" /><br /><br /> <br />





                        <!-- Utilisation de la balise label representant une legende pour un objet d'une interface   -->
                        <label>Type :</label>

                        <!-- Utilisation de balise input de type text  permettant de rentrer du texte -->
                        <!-- Utilisation de value sepcifiant l'entrée de la valeur venant du php echo dans ce cas de figure le type  -->
                        <!--  Utilisation  des balises br specifiant un saut de ligne -->
                        <input type="text" name="newtype" placeholder="Type" value="<?php echo $afficher_profil['type']; ?>" /><br /><br /> <br />



                        <!-- Utilisation de la balise input de type submit permettant d'envoyer des données d'un formulaire -->
                        <input type="submit" value="Mettre à jour mon profil !" />

                    </form>



                    <?php if (isset($msg)) {
                        echo $msg;
                    } ?>
                </div>
            </div>
        </body>

        </html>
<?php
    } else {
        header("Location: connexion.php");
    }
}
?>