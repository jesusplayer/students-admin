<?php
require './session.php';
require './connectdb.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './include.php';
        ?>
        <title></title>
    </head>
    <body class="fond ">
        <?php
        $requet = "DELETE FROM etudiant WHERE id=".$_REQUEST["id"];
        $result = mysql_query($requet);
        if($result){
            echo getAlert("Etudiant supprimé!!","success","admin.php");
        }else{
            echo getAlert("!! Erreur de suppression","danger","admin.php");
        }
        ?>

    </body>
</html>