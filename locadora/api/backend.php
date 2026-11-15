<?php

$host = '127.0.0.1';
$dbname = 'blockbuster_db';
$username = 'root';
$password = '';


try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch (PDOException $e) {

    header('Content-Type: application/json');

    http_response_code(500);

    echo json_encode(['erro' => 'Falha na conexão com o banco de dados:'. $e->getMessage()]);

    exit;

}

?>