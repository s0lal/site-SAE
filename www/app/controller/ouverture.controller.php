<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the ouverture page
 * @return void
 */
function generateOuverturePage() {
    $data = [
        'page_title' => "Nova - Ouverture",
        'view' => 'app/view/ouverture.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}