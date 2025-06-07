<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the verification page
 * @return void
 */
function generateVerificationPage() {
    $data = [
        'page_title' => "Nova - Verification",
        'view' => 'app/view/verif.view.php',
        'layout' => 'app/view/common/layout.php',
        'css' => 'public/css/verif.css',
    ];

    generatePage($data);
}
