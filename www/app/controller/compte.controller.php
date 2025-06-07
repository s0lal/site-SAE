<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the account page
 * @return void
 */
function generateComptePage() {
    $data = [
        'page_title' => "Nova - Compte",
        'view' => 'app/view/compte.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}