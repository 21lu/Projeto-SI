<?php
require_once('conexao.php');
$conexao = conecta();

    $email = filter_var($_POST['e_mail'], FILTER_VALIDATE_EMAIL);
    $senha = md5($_POST['senha_']);
/*
    require_once('conexao.php');
    $conexao = conecta();
    $email = filter_var($_POST['e_mail'], FILTER_VALIDATE_EMAIL);
    $senha = md5($_POST['senha_']);

    $sql = 'SELECT * FROM usuarios WHERE email=:email AND senha=:senha';
    $result = $conexao->prepare($sql);
    $result ->execute(['email' => $email, 'senha' => $senha]);
    $usuario = $result->fetch();

    var_dump($usuario); */

    try{
        $logar = $conexao->prepare("SELECT * FROM usuarios WHERE email= ? AND senha= ?");
    $logar->bindValue(1,$email,PDO::PARAM_STR);
    $logar->bindValue(2,md5(strrev($senha)) ,PDO::PARAM_STR);
    $logar->execute();

    if ($logar->rowCount() == 1):
        header("Location: painel.php");

    else:
      return FALSE;
    endif;
    

       }catch(PDOException $e){
       echo $e->getMessage();
   }
   var_dump($logar);

?>