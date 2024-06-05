<?php
session_start();  // ne pas oublier de demarrer la session!
if (isset($_GET["indice"]) ){
$indice = $_GET["indice"];
$_SESSION["personnes"][$indice]["etat"] = !$_SESSION["personne"][$indice]["etat"];
}
header('Location:index.php');