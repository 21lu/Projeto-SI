<?php
session_start(); // Certifique-se de iniciar a sessão em todas as páginas onde deseja acessar as informações da sessão

if (isset($_SESSION['nome_usuario'])) {
    $nomeDoUsuario = $_SESSION['nome_usuario'];
    echo "Bem-vindo, $nomeDoUsuario!";
} else {
    echo "Usuário não logado"; // Ou redirecione para a página de login
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Principal</title>
    <link rel="styleechet" href="CSS/sttaly.css">
</head>
<body>
    
    <h1>ola mundo</h1>
</body>
</html>