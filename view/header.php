<?php
    spl_autoload_register( function($class_name) {
        if (is_file('../classes/' .$class_name. '.php')) {
            require_once('../classes/' .$class_name. '.php');
        }
    });
	/*function __autoload($class_name){
		require_once '../classes/' . $class_name . '.php';
    }*/
    include_once('../classes/seguranca.php');
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Inicial - Creche Feliz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />
    <script src="../js/bootstrap.js"></script>

<?php 
    if($_SESSION['tipo'] == 'D'){
?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../img/logo-nav.png" width="30" height="30" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=3">Alunos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=6">Responsáveis</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=4">Anotações</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=5">Autorizações</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=2">Usuários</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php echo $_SESSION['email'];?>
            </span>
            <span class="navbar-text">
                <a class="nav-link" href="../classes/sair.php">Sair</a>
            </span>
        </div>
    </nav>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
                @$link = $_GET["link"];

                $pag[1] = "homepage.php";
                $pag[2] = "formUsuario.php";
                $pag[3] = "formAluno.php";
                $pag[4] = "formAnotacao.php";
                $pag[5] = "formAutorizacao.php";
                $pag[6] = "formResponsaveis.php";

                if (!empty($link)) {
                if(file_exists($pag[$link])){
                    include $pag[$link];
                } else{
                    include "homepage.php";
                }        
                } else {
                include "homepage.php";
                }
            ?>
            </div>
        </div>
    </div>
<?php 
} 
if($_SESSION['tipo'] == 'P'){
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../img/logo-nav.png" width="30" height="30" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=1">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=4">Anotações</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../view/header.php?link=5">Autorizações</a>
                </li>          
            </ul>
            <span class="navbar-text">
                <?php echo $_SESSION['email'];?>
            </span>
            <span class="navbar-text">
                <a class="nav-link" href="../classes/sair.php">Sair</a>
            </span>
        </div>
    </nav>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
                @$link = $_GET["link"];

                $pag[1] = "homepage.php";
                $pag[4] = "formAnotacao.php";
                $pag[5] = "formAutorizacao.php";

                if (!empty($link)) {
                if(isset($pag[$link])){
                    include $pag[$link];
                } else{
                    echo '<br><br><center><p style="color: red;">Você não possui acesso a essa página!<p></center>';
                    include "homepage.php";
                }        
                } else {
                include "homepage.php";
                }
            ?>
            </div>
        </div>
    </div>
<?php } ?>
</body>
</html>