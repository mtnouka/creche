<?php
require_once 'classes/validaLogin.php';
$objValida = new validaLogin();

if(isset($_POST['acessar'])){
    $objValida->validar($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tela de Acesso - Creche Feliz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <form class="form-signin" method="POST" action="">
            <h2 class="form-signin-heading text-center">Creche Feliz</h2>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Endereço de E-mail" autofocus="" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Insira sua senha" required>
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="acessar">Acessar</button>
        </form>

        <p class="text-center text-danger">
            <?php
                if (!empty($_GET['login']) == 'error') {
                    echo 'Usuário ou Senha inválidos!';
                }
            ?>
        </p>
    </div>
</body>
</html>