<?php
session_start();  // ne pas oublier de demarrer la session!
if (isset($_GET["indice"]) ){
$indice = $_GET["indice"];
array_splice($_SESSION["personnes"], $indice, 1);
}
header('Location:index.php');