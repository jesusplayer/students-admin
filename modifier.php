<?php require './session.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './include.php';

        function findUser($id) {
            require './connectdb.php';
            $requet = "SELECT * FROM etudiant WHERE id=\"$id\"";
            if ($result = mysql_query($requet)) {
                if ($ligne = mysql_fetch_array($result)) {
                    //var_dump($ligne);
                    return $ligne;
                } else {
                    die("Erreur!! Utilisateur inexistant");
                }
            }
        }
        ?>
        <title></title>
    </head>
    <body class="fond">
        <div class="edit-form">
            <div class="panel panel-primary">              
                <?php

                function getField($key, $text, $type) {
                    global $arrayEtud;
                    $value = $arrayEtud[$key];
                    return "<div class=\"form-group\">
                    <label for=\"$key\" class=\"col-sm-2 control-label pull-left\">
                        $text
                    </label>
                    <div class=\"col-sm-10\">
                    <input type=\"$type\" class=\"form-control\" id=\"$key\" name=\"$key\" placeholder=\"Entrez " . $text . "\" value=\"$value\"/>
                    </div>
                </div>";
                }

                if (isset($_REQUEST["id"])) {
                    $arrayEtud = findUser($_REQUEST["id"]);
                } else {
                    $arrayEtud = array("id" => "", "prenom" => "", "nom" => "", "adresse" => "", "tel" => "", "email" => "", "login" => "", "passwd" => "");
                }
                $etud = (Object) $arrayEtud;
                echo "<div class=\"panel-heading \">" . ($etud->id ? "Modification de l'etudiant " . $etud->nom . " " . $etud->prenom : "Nouvel Etudiant") . "</div>
                <div class=\"panel-body\"> <form class=\"form-horizontal\" id=\"edit-form\" action=\"enregistrer.php\" method=\"POST\">" .
                //getField("id", "Id", "hidden") .
                getField("prenom", "Prenom", "text") .
                getField("nom", "Nom", "text") .
                getField("adresse", "Adresse", "text") .
                getField("tel", "Téléphone", "text") .
                getField("email", "Email", "text") .
                getField("login", "Login", "text") .
                getField("passwd", "Password", "password") .
                " <input type=\"hidden\" id=\"id\" name=\"id\" value=\"$etud->id\"/>" .
                "</form></div>";
                ?>
                <div class="panel-footer">
                    <form action="admin.php">
                        <div class="btn-group-sm">
                            <input type="button" id="btn-submit" class="btn btn-success" value="Enregistrer">

                            <button type="submit" class="btn btn-danger">Annuler</button>

                            <span class="col-sm-3 alert alert-danger pull-right error center mini-alert" role="alert" title="Les champs ne doivent pas être vides">Erreurs !!<br></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
