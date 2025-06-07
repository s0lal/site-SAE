<?php

require_once 'app/controller/controller.php';
require_once 'app/model/trombi.model.php';
require_once 'app/model/model.php';


/**
 * Controller in charge of generating the trombinoscope page
 * @return void
 */
function generateTrombinoscopePage() {
    $data = [
        'eleves' => getAllEleves(),
        'page_title' => "Nova - Trombinoscope",
        'view' => 'app/view/trombi.view.php',
        'layout' => 'app/view/common/layout.php',
        'css' => 'public/css/trombi.css',
    ];

    generatePage($data);
}



function generateFicheelevePage() { 
    $id = isset($_GET['id']) ? (int) $_GET['id']: null; 
    if ($id === null) { 
        $_SESSION['FLASH'] = 'ID non trouvé'; 
        header('Location: index.php?route=error'); 
        exit(); 
    } else { 
        $data = [ 
        'eleves' => getEleve($id), 
        'page_title' => "Nova - Fiche Élève",
        'view' => 'app/view/ficheeleve.view.php',
        'layout' => 'app/view/common/layout.php',
        'css' => 'public/css/ficheeleve.css',
        ]; 
    
        generatePage($data); 
    }
}

