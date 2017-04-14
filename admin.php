
<?php
include './session.php';
require './connectdb.php';
if (!$result = mysql_query("SELECT * FROM etudiant")) {
    die("Erreur de requête de base de données.");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './include.php';
        ?>
        <title>Administration</title>
    </head>
    <body>
        <header class="col-md-12">         
            <?php echo '<span class="txt-head-usr"> '.strtoupper($_SESSION["prenom"]).' '.strtoupper($_SESSION["nom"]).'</span>';?>
            <span class="pull-right">
                <a href="ajouter.php"><span title="Nouvel Utilisateur" class="glyphicon glyphicon-plus" aria-hidden="true"></span></a><span class="glyphicon glyphicon-user txt-head" aria-hidden="true"></span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="deconnecter.php"><span title="Se Deconnecter" class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span>
        </header>
        <main>
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th class="center">Supprimer</th>
                        <th class="center">Modifier</th>
                    </tr>
                </thead>
                <?php

                function getTD($param) {
                    return "<td valign = \"middle\">" . $param . "</td>";
                }

                function getIcon($param, $id) {
                    return "<td align = \"center\" valign = \"middle\"><a href=\"" . (($param == "trash" ? "supprimer.php?id=" : "modifier.php?id=") . $id) . "\"><span class=\"glyphicon glyphicon-" . $param . "\" aria-hidden=\"true\"></span></a></td>";
                }

                while ($ligne = mysql_fetch_object($result)) {
                    echo "<tr>" .
                    getTD($ligne->id) .
                    getTD($ligne->prenom) .
                    getTD($ligne->nom) .
                    getTD($ligne->adresse) .
                    getTD($ligne->tel) .
                    getTD($ligne->email) .
                    getIcon("trash", $ligne->id) .
                    getIcon("pencil", $ligne->id) .
                    "</tr >";
                }
                ?>
                </tbody>
            </table>
        </main>
    </body>
</html>
