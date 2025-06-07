<?php

/**
    * Fonction permettant d'obtenir une connexion à la base de données.
    *
    * @return PDO
*/


function getDatabaseConnexion(): PDO
{
    try {
        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
    return $pdo;
}
