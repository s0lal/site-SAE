<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the brassage page
 * @return void
 */
function generateBrassagePage() {
    $data = [
        'page_title' => "Nova - Brassage",
        'view' => 'app/view/brassage.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}