<?php session_start();
//site en ligne http://projet-web-m2itic.comeze.com/
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'include.php'; ?>
        <title></title>
    </head>
    <body class="fond">
        <div class="row  parent-form">
            <form class="form form-login" id="login-form" action="connect.php" method="POST">
                <div class="form-group">
                    <label for="login">
                        Login
                    </label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Entrez le login"/>
                </div>
                <div class="form-group">
                    <label for="passwd">
                        Mot de Passe
                    </label>
                    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Entrez le mot de passe"/>
                </div>
                <div class="btn-group-sm">
                    <span title="Les champs ne doivent pas être " class="col-sm-3 alert alert-danger pull-right error center mini-alert" role="alert">Erreurs !!<br></span>
                    <input type="button" id="btn-submit-login" class="btn btn-success" value="Se connecter"/>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                    <?php
                    if (isset($_REQUEST["err"]) && $_REQUEST["err"]) {
                        echo('<span title="Veuillez vérifier vos informations de connexion(Login ou Mot de passe)" class="col-sm-6 alert alert-danger pull-right error-login center mini-alert" role="alert">Erreur de connexion!<br></span>');
                    }
                    ?>
                </div>

            </form>
        </div>
    </body>
</html>
