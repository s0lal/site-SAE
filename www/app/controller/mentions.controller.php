<?php

require_once 'app/controller/controller.php';

/**
 * Controller in charge of generating the mentions page
 * @return void
 */
function generateMentionsPage() {
    $data = [
        'page_title' => "Nova - Mentions légales",
        'view' => 'app/view/mentions.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}