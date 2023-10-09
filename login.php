<?php

require_once('conexao.php');
$conexao = conecta();

$email_ = filter_var($_POST['email_us'], FILTER_VALIDATE_EMAIL);
$senha_ = filter_var($_POST['senha_us']);

try {
    $logar = $conexao->prepare("SELECT * FROM login WHERE email = ? AND senha = ?");
    $logar->bindValue(1, $email_, PDO::PARAM_STR);
    $logar->bindValue(2, $senha_, PDO::PARAM_STR);
    $logar->execute();

    if ($logar->rowCount() == 1) {
        header("Location: painel.php");
        exit();
    } else {
        echo "Credenciais inválidas"; 
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

