<!DOCTYPE html>
<html lang="fr">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="public/images/logo-etoilenoir.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/css/commun.css">
  <link rel="stylesheet" href="public/css/accueil.css">
  <title> <?= $page_title ?> </title>
</head>


  <body>
    <header>
      <logo class="logo"><a href="index.php?route=accueil"><img src="public/images/Animation_Logo_Nova_bon.gif"></logo>
      <nav>
        <ul>
          <li><a class="menus" href="index.php?route=trombi">À propos</a></li>
          <li><a class="menus" href="index.php?route=boutique">Boutique</a></li>
          <li><a class="menus" href="index.php?route=brassage">Brassage</a></li>
          <li><a class="menus" href="index.php?route=contact">Contact</a></li>
          <li><a href="index.php?route=compte"><img src="public/images/profil.png" alt="logged icon"/></a></li>
          <li><a href="index.php?route=panier">
            <img src="public/images/panier.png" alt="panier icon" /></a>
          </li>


        </ul>
      </nav>
    </header>