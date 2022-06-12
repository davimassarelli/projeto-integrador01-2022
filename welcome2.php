<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<?php include "header.php"; ?>

<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #f7f7f7;}
    </style>
</head> -->

<style>

</style>

<body>
<div class="container">
  <div class="row row-cols-auto justify-content-md-center mt-5">
    <div class="col col-lg-8">
        <p class="fs-2">Bem Vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?></b> ao Vestibular Descomplicado UNIVESP.</p>
        <br/>
        <p>Aqui você pode praticar seus conhecimentos antes da prova da UNIVESP, boa sorte!</p>

    </div>
    <div class="col justify-content-md-center">
        <div class="row row-cols-1 mx-auto">
            <div class="d-grid gap-2 col-12 mx-auto">
                <a href="simulador2.php" class="btn btn-success">Testar conhecimento</a>
                <a href="administracao.php" class="btn btn-outline-primary">Área de Administração</a>
                <a href="perguntas_respostas.php" class="btn btn-outline-secondary">Visualizar Perguntas e Respostas</a>
                <a href="crud.php" class="btn btn-outline-secondary">Cadastrar Perguntas</a>
                <a href="crud2.php" class="btn btn-outline-secondary">Cadastrar Respostas</a>
                <a href="reset-password.php" class="btn btn-outline-warning">Redefina sua senha</a>
                <a href="logout.php" class="btn btn-outline-danger">Sair da conta</a>
            </div>
        </div>
    </div>
  </div>
</div>



   <!-- <h1 class="my-5">Bem Vindo, <b><?php echo htmlspecialchars($_SESSION["username"]);?></b> ao Vestibular Descomplicado UNIVESP.</h1>
    <p>
        <a href="administracao.php" class="btn btn-primary">Área de Administração</a>
        <a href="perguntas_respostas.php" class="btn btn-primary">Visualizar Perguntas e Respostas</a>
        <a href="crud.php" class="btn btn-primary">Cadastrar Perguntas</a>
        <a href="crud2.php" class="btn btn-primary">Cadastrar Respostas</a>
        <a href="simulador2.php" class="btn btn-success">Testar conhecimento</a>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>  -->
   
</body>


<?php include "footer.php"; ?>
