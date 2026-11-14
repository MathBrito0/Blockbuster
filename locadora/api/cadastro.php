<?php

header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';


// Garante a requisição POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);

    exit;
}


// Pega e limpa os dados enviados do formulário
$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';


// Valida se os campos estão preenchidos
if (empty($nome) || empty($email) || empty($senha) || empty($confirmar_senha)) {

    http_response_code(400);
    echo json_encode(['erro' => 'Preencha todos os campos']);

    exit;
}


// Valida se as senha confere com a sessão de 'confirmar senha' antes de processar no banco
if ($senha !== $confirmar_senha) {
    
    http_response_code(400);
    echo json_encode(['erro' => 'As senhas não batem']);

    exit;
}



// Verifica se o email já tá cadastrado no banco
$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->fetch()) {

    http_response_code(400);
    echo json_encode(['erro' => 'Este email já foi cadastrado']);

    exit;
}


// Define a chave Pepper (igual a definida em 'login.php')
define('PEPPER_KEY', 'Blockbuster_TDE_Key_2026!#');



// Junta a senha com o pepper e gera o hash seguro
$senha_pepper = $senha . PEPPER_KEY;
$senhaHash = password_hash($senha_pepper, PASSWORD_DEFAULT);



// Insere o novo usuário no banco com prepared statements
$stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");

if ($stmt->execute([$nome, $email, $senhaHash])) {

    http_response_code(201);
    echo json_encode(['sucesso' => true, 'mensagem' => 'Cadastro realizado com sucesso']);

    exit;

} else {

    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao cadastrar novo usuário']);

    exit;
}
?>