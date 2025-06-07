<?php
function getAllEleves() {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM Equipe";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();
    return $stmt->fetchAll();
}

function getEleve($id) {
    $pdo = getDatabaseConnexion();
    $sql = "SELECT * FROM Equipe Where id_equipe=:id";
    $stmt = $pdo->prepare($sql);
    $stmt-> bindParam(':id', $id , PDO::PARAM_INT);
    $stmt -> execute();
    return $stmt->fetch();
}