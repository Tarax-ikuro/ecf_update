<?php
session_start();
include("./lesboss/header.php");
require 'config.php';

// Identifiaction de la session Mise en place d'une suite de conditions verifiant les élemnts stockés en base de données 
if (isset($_SESSION['id'])) {
    $requser = $dbname->prepare("SELECT * FROM users WHERE id_users = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();



    //    Modification du pseudo 
    if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $dbname->prepare("UPDATE users SET pseudo = ? WHERE id_users = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }




    //Modification de l'adresse email
    if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['email']) {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $dbname->prepare("UPDATE users SET email = ? WHERE id_users = ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }



    // Modification du nom 
    if (isset($_POST['newnom']) and !empty($_POST['newnom']) and $_POST['newnom'] != $user['nom']) {
        $newnom = htmlspecialchars($_POST['newnom']);
        $insertnom = $dbname->prepare("UPDATE users SET nom = ? WHERE id_users = ?");
        $insertnom->execute(array($newnom, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }


    //Modification de l'adresse
    if (isset($_POST['newadresse']) and !empty($_POST['newadresse']) and $_POST['newadresse'] != $user['adresse']) {
        $newadresse = htmlspecialchars($_POST['newmail']);
        $insertadresse = $dbname->prepare("UPDATE users SET adresse = ? WHERE id_users = ?");
        $insertadresse->execute(array($newadresse, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }


    // Modification de la ville
    if (isset($_POST['newville']) and !empty($_POST['newville']) and $_POST['newville'] != $user['ville']) {
        $newville = htmlspecialchars($_POST['newville']);
        $insertville = $dbname->prepare("UPDATE users SET ville = ? WHERE id_users = ?");
        $insertville->execute(array($newville, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }

    // Modification du code postal 
    if (isset($_POST['newcp']) and !empty($_POST['newacp']) and $_POST['newcp'] != $user['cp']) {
        $newcp = htmlspecialchars($_POST['newcp']);
        $insertcp = $dbname->prepare("UPDATE users SET cp = ? WHERE id_users = ?");
        $insertcp->execute(array($newcp, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }


    //    Modification du prenom 
    if (isset($_POST['newprenom']) and !empty($_POST['newprenom']) and $_POST['newprenom'] != $user['prenom']) {
        $newprenom = htmlspecialchars($_POST['newprenom']);
        $insertprenom = $dbname->prepare("UPDATE users SET prenom = ? WHERE id_users = ?");
        $insertprenom->execute(array($newprenom, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }

    // Modification du type 
    if (isset($_POST['newatype']) and !empty($_POST['newtype']) and $_POST['newtype'] != $user['type']) {
        $newtype = htmlspecialchars($_POST['newtype']);
        $inserttype = $dbname->prepare("UPDATE users SET type = ? WHERE id_users = ?");
        $inserttype->execute(array($newtype, $_SESSION['id']));
        header('Location: monespace.php?id=' . $_SESSION['id']);
    }


    // Modification du mot de passe 
    if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2'])) {
        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);
        if ($mdp1 == $mdp2) {
            $insertmdp = $debname->prepare("UPDATE users SET mdp = ? WHERE id_users = ?");
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            header('Location: monespace.php?id=' . $_SESSION['id']);
        } else {
            $msg = "Vos deux mots de passe ne sont pas identiques !";
        }
    }
?>

    <html>

    <head>
        <title>Modification du profil </title>
        <meta charset="utf-8">
    </head>

    <body>
        <div>
            <h2>Edition de mon profil</h2>
            <div>
                <form method="POST" action="" enctype="multipart/form-data">

                    <label>Nom :</label>
                    <input type="text" name="newnom" placeholder="Nom" value="<?php echo $afficher_profil['nom']; ?>" /><br /><br /> <br />

                    <label>Prenom :</label>
                    <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $afficher_profil['prenom']; ?>" /><br /><br /> <br />


                    <label>Pseudo :</label>
                    <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $afficher_profil['pseudo']; ?>" /><br /><br />


                    <label>Email :</label>
                    <input type="text" name="newmail" placeholder="Mail" value="<?php echo $afficher_profil['email']; ?>" /><br /><br />


                    <label>Mot de passe :</label>
                    <input type="password" name="newmdp1" placeholder="Mot de passe" /><br /><br />



                    <label>Confirmation - mot du passe :</label>
                    <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />



                    <label>Adresse :</label>
                    <input type="text" name="newadresse" placeholder="Adresse" value="<?php echo $afficher_profil['adresse']; ?>" /><br /><br /> <br />



                    <label>Ville :</label>
                    <input type="text" name="newville" placeholder="Ville" value="<?php echo $afficher_profil['ville']; ?>" /><br /><br /> <br />

                    <label>Code Postal:</label>
                    <input type="text" name="newnom" placeholder="Code postal" value="<?php echo $afficher_profil['cp']; ?>" /><br /><br /> <br />

                    <label>Type :</label>
                    <input type="text" name="newtype" placeholder="Type" value="<?php echo $afficher_profil['type']; ?>" /><br /><br /> <br />



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
?>