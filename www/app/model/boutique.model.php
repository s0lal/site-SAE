<?php
function getAllBieres() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM Boutiques";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchAll();
}

function getBieres($id) {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM Boutiques Where id_boutique=:id";
    $stmt = $pdo->prepare($sql);
    $stmt-> bindParam(':id', $id , PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt->fetch();
}