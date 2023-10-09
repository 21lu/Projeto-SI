<?php
session_start(); 

if (isset($_SESSION['nome_usuario'])) {
    $nomeDoUsuario = $_SESSION['nome_usuario'];
    echo "Bem-vindo, $nomeDoUsuario!";
} else {
    echo "Usuário não logado"; 
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