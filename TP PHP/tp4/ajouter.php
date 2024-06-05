<?php
session_start();  // ne pas oublier de demarrer la session!
if (isset($_POST["prenom"]) && isset($_POST["nom"])){
	$prenom = $_POST["prenom"];
    $nom =$_POST["nom"];
    $tab["prenom"] =$prenom; // je stocke dans un tableau
    $tab["nom"] =$nom;
    $tab["etat"] =true;
    // $_SESSION["films"] devient un tableau 2 dimmensions
    $_SESSION["personnes"][] = $tab; // je stocke dans un tableau de session
    // je redirige vers un autre page
    header("Location:index.php");
}