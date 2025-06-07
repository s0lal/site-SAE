<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombi.model.php';

/**
 * Controller in charge of generating the cart page
 * @return void
 */
function generatePanierPage() {
    $data = [
        'page_title' => "Nova - Panier",
        'view' => 'app/view/panier.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}