<?php

require_once 'app/controller/controller.php';
require_once 'app/model/boutique.model.php';
require_once 'app/model/accueil.model.php';

/**
 * Controller in charge of generating the home page
 * @return void
 */

function generateHomePage() {
    $data = [
        'page_title' => "Nova - Accueil",
        'view' => 'app/view/accueil.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
    getAllBieres();
}