<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '&çà_&ç_(');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="icon" type="image/png" href="/img/icons8-account-64.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue darken-2">
                <a href="index.php" class="brand-logo right grey-text text-darken-3">Alexandre</a>
                <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">fingerprint</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="#presentation">Présentation</a></li>
                    <li><a href="">À propos de moi</a></li>
                    <li><a href="">Compétences</a></li>
                    <li><a href="#experiences">Expériences</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="">Présentation</a></li>
            <li><a href="">À propos de moi</a></li>
            <li><a href="">Compétences</a></li>
            <li><a href="">Expériences</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
</header>