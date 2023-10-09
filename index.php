
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTFF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="CSS/sttaly.css">
    </head>
    <body id="tela">
        <div id="login">
            <div id="caixa" >
            <img src="imagem/faa1.png" alt="">
                <h1>LOGIN</h1>
                <form action="login.php" method="post">
                <div class="email">
                    <input type="email" name="email_us" placeholder="E-mail">
                </div>
                <div class="senha">
                    <input type="password" name="senha_us" placeholder="Senha">
                </div>
                <div class="entrar">
                    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar</a></p>
                    <button class="btn" type="submit">Entrar</button>
                    <!--<input type="submit" value="ENTRAR" href="painel.php">-->
                </div>
                </form>
            </div>
        </div>
    </body>
</html>