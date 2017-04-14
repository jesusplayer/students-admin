<?php

$db = "etudiantsdb";
$pswd = "";
$user = "root";

@mysql_connect("localhost",$user, $pswd) or die("Echec de connexion au serveur.");
@mysql_select_db($db) or die("Echec de sélection de la base.");

