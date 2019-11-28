<?php 
    function logarUsuario($email, $senha){
            
    }

    if($_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $logado = logarUsuario($email, $senha);
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php $title = "Login"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php require_once("inc/header.php"); ?>

    <div class="container pt-3">
        <h1>Login</h1>
        <p>Informe e-mail e senha para efetuar login na plataforma.</p>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>