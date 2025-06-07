<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the contact page
 * @return void
 */
function generateContactPage() {
    $data = [
        'page_title' => "Nova - Contact",
        'view' => 'app/view/contact.view.php',
        'layout' => 'app/view/common/layout.php',
        'css' => 'public/css/contact.css',
    ];

    generatePage($data);
}
