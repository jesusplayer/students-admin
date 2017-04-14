<?php
session_start();
require './connectdb.php';

$lg = $_POST["login"];
$pd = $_POST["passwd"];
$requet = "SELECT * FROM etudiant WHERE login=\"$lg\" AND passwd=\"$pd\" ";
if ($result = mysql_query($requet)) {
    if ($ligne = mysql_fetch_array($result)) {
        $_SESSION["login"] = $lg;
        $_SESSION["passwd"] = $pd;
        $_SESSION["prenom"] = $ligne["prenom"];
        $_SESSION["nom"] = $ligne["nom"];
        header('location:admin.php');
    } else {
        header('location:index.php?err=true');
    }
} else {
    echo "Erreur de requête de base de données.";
}
    

