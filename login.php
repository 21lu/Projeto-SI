<?php
require_once('conexao.php');
$conexao = conecta();

    $email = filter_var($_POST['e_mail'], FILTER_VALIDATE_EMAIL);
    $senha = filter_var($_POST['senha_']);

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