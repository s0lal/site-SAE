<?php

require_once 'app/controller/controller.php'; 
require_once 'app/model/boutique.model.php'; 
require_once 'app/model/model.php'; 

function generateBoutiquePage() { 
    $data = [ 
    'produits' => getAllBieres(), 
    'css' => 'boutique.css', 
    'page_title' => "Nova - Boutique", 
    'view' => 'app/view/boutique.view.php', 
    'layout' => 'app/view/common/layout.php', 
    ]; 
    
    generatePage($data); 
}


function generateFichebierePage() { 
    $id = isset($_GET['id']) ? (int) $_GET['id']: null; 
    if ($id === null) { 
        $_SESSION['FLASH'] = 'ID non trouvé'; 
        header('Location: index.php?route=error'); 
        exit(); 
    } else { 
        $data = [ 
            'produits' => getBieres($id), 
            'css' => 'fichebiere.css', 
            'page_title' => "Fiche de la bière",
            'view' => 'app/view/fichebiere.view.php', 
            'layout' => 'app/view/common/layout.php', 
        ]; 
    
        generatePage($data); 
    }
}