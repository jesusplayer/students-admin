<?php
require './session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './include.php';
        require './connectdb.php';
        ?>
        <title></title>
    </head>
    <body class="fond ">

        <?php
        $etud = (Object) $_POST;
        $param = "'" . join("','", $_POST);
        $param = substr($param, 0, strlen($param) - 2);
        if ($etud->id) {
            $query = "UPDATE etudiant SET nom='$etud->nom',prenom='$etud->prenom',"
                    . "adresse='$etud->adresse',tel='$etud->tel',email='$etud->email',"
                    . " login='$etud->login', passwd='$etud->passwd' WHERE id = $etud->id";
            if (mysql_query($query)) {
                echo getAlert("Mise à jour reussi!!", "success", "admin.php"); //defini dans include.php
            } else {
                echo getAlert("!! Erreur de modification", "danger", "admin.php");
            }
        } else {

            $query = "INSERT INTO etudiant(prenom,nom,adresse,tel,email,login,passwd) VALUES(" . $param . ")";
            if ($result = mysql_query("SELECT login from etudiant WHERE login='$etud->login'")) {
                if (mysql_num_rows($result) > 0) {
                    echo getAlert("Erreur!!<br>le login de cet utilisateur existe déjà", "danger", "ajouter.php");
                } else {
                    if (mysql_query($query)) {
                        echo getAlert("Enregistrement reussi!!", "success", "admin.php");
                    } else {
                        echo getAlert("!! Erreur d'enregistrement", "danger", "admin.php");
                    }
                }
            }

            //mysql_insert_id([$id])
        }
        ?>
    </body>
</html>
