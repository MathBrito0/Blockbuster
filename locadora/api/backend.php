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

try {

    // Funcionários com permissão de admin cadastrados
    $integrantes_projeto = [
        ["nome" => "Arariel", "email" => "arariel@locadora.com", "senha" => "123456"],
        ["nome" => "Passarildo", "email" => "passarildo@locadora.com", "senha" => "123456"],
        ["nome" => "Macacobson", "email" => "macacobson@locadora.com", "senha" => "123456"]
    ];

    if (!defined('PEPPER_KEY')) {
        define('PEPPER_KEY', "Blockbuster_TDE_Key_2026!#");
    }

    foreach ($integrantes_projeto as $integrante) {

        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
        $stmt->execute([$integrante['email']]);
        $existe = $stmt->fetchColumn();

        if ($existe == 0) {
            $senha_cripto = $integrante['senha'] . PEPPER_KEY;
            $hash = password_hash($senha_cripto, PASSWORD_DEFAULT);

            $insert = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, 'funcionario')");
            $insert->execute ([
                $integrante['nome'],
                $integrante['email'],
                $hash
            ]);
        }
    }

} catch (Exception $e) {
 
    header('Content-Type: application/json');

    http_response_code(500);

    echo json_encode(['erro' => 'Falha na conexão com o banco de dados:'. $e->getMessage()]);

    exit;

}

?>