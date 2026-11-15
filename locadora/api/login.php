<?php

session_start();
header('Content-Type: application/json; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 0);
require_once 'backend.php';


// Requisição é do tipo POST?
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);

    exit;
}




// Coleta os dados enviados pelo JS
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';




// Valida os campos para não ficarem vazios
if (empty($email) || empty($senha)) {
    http_response_code(400);
    echo json_encode(['erro' => 'Preencha todos os campos']);

    exit;
}


// Procura o usuário no banco de dados
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch();


// Se o usuário não existe, bloqueia aqui
if (!$usuario) {
    http_response_code(401);
    echo json_encode(['erro' => 'E-mail ou senha incorretos']);

    exit;
}



// Implementando um Pepper no Hash
define('PEPPER_KEY', 'Blockbuster_TDE_Key_2026!#');




// Insere o pepper na senha digitada
$senha_pepper = $senha . PEPPER_KEY;



// Valida a senha com password_verify usando pepper
if (password_verify($senha_pepper, $usuario['senha'])) {

    // Regenera o ID de sessão
    session_regenerate_id(true);

    
    // Salva os dados do usuário na sessão do servidor
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];

    
    // Criando a tag de funcionário
    if (isset($usuario['tipo']) && $usuario['tipo'] === 'funcionario') {
        $_SESSION['funcionario'] = true;

    } else {
        $_SESSION['funcionario'] = false;
    }

    http_response_code(200);
    echo json_encode(['sucesso' => true, 'mensagem' => 'Login realizado com sucesso']);

    exit;

} else {

    //Senha incorreta
    http_response_code(401);
    echo json_encode(['erro' => 'E-mail ou senha incorretos']);

    exit;
}

?>