<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the cookies page
 * @return void
 */
function generateCookiesPage() {
    $data = [
        'page_title' => "Nova - Cookies",
        'view' => 'app/view/cookies.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}