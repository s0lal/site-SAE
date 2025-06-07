<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the confidentiality page
 * @return void
 */
function generateConfidentialitePage() {
    $data = [
        'page_title' => "Nova - Confidentialité",
        'view' => 'app/view/confidentialite.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}