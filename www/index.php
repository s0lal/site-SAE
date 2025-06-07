<?php

require_once 'config.php';
require_once 'app/model/model.php';
require_once 'app/controller/accueil.controller.php';


$route = 'verif';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}

switch ($route) {
    case 'ouverture':
        require_once 'app/controller/ouverture.controller.php';
        generateOuverturePage();
        break;
    case 'verif':
        require_once 'app/controller/verif.controller.php';
        generateVerificationPage();
        break;
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateHomePage();
        break;
    case 'trombi':
        require_once 'app/controller/trombi.controller.php';
        generateTrombinoscopePage();
        break;
    case 'boutique':
        require_once 'app/controller/boutique.controller.php';
        generateBoutiquePage();
        break;
    case 'brassage':
        require_once 'app/controller/brassage.controller.php';
        generateBrassagePage();
        break;
    case 'contact':
        require_once 'app/controller/contact.controller.php';
        generateContactPage();
        break;
    case 'compte':
        require_once 'app/controller/compte.controller.php';
        generateComptePage();
        break;
    case 'ficheeleve':
        require_once 'app/controller/trombi.controller.php';
        generateFicheelevePage();
        break;
    case 'fichebiere':
        require_once 'app/controller/boutique.controller.php';
        generateFichebierePage();
        break;
    case 'panier':
        require_once 'app/controller/panier.controller.php';
        generatePanierPage();
        break;
    case 'confidentialite':
        require_once 'app/controller/confidentialite.controller.php';
        generateConfidentialitePage();
        break;
    case 'mentions':
        require_once 'app/controller/mentions.controller.php';
        generateMentionsPage();
        break;
    case 'cookies':
        require_once 'app/controller/cookies.controller.php';
        generateCookiesPage();
        break;
    default:
        exit;
}
?>
