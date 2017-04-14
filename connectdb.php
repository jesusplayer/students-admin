<?php

$db = "etudiantsdb";
$pswd = "";
$user = "root";
if ($_SERVER['HTTP_HOST'] == "projet-web-m2itic.comeze.com") {
    $user = "id870773_root";
    $db = "id870773_etudiantsdb";
    $pswd = "mysql";
}

@mysql_connect("localhost",$user, $pswd) or die("Echec de connexion au serveur.");
@mysql_select_db($db) or die("Echec de sélection de la base.");

