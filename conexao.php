<?php
   // CONSTANTES
  define('HOST', 'localhost');
  define('USUARIO', 'root');
  define('SENHA', '');
  define('DB', 'gestao_escolar; charset=utf8') ;
  

  function conecta(){
  
      $dns= "mysql:host=" . HOST . ";dbname=" . DB;
      try{
          $conn = new PDO($dns,USUARIO,SENHA);
          $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $conn;
      }catch(PDOException $erro){
          echo $erro->getMessage();
      }
  }
?>