<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #f7f7f7;}
    </style>
</head>
<body>
   <h1 class="my-5">Bem Vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?></b> ao Vestibular Descomplicado UNIVESP.</h1>
    <p>
        <a href="simulador.php" class="btn btn-success">Testar conhecimento</a>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p> 
   
</body>
</html