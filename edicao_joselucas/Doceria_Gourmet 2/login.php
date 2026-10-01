<?php
session_start();
include "conexao.php";
$erro = "";

/*O login precisa solicitar acesso ao servidor
SGBD MySQL para que ele possa verificar o login
e senha para entrar no sistema*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adm_cpf = $_POST['adm_cpf'];
    $adm_email = $_POST['adm_email'];
    $adm_senha = $_POST['adm_senha'];

/*Na linha SQL será realizado através do comando
SELECT o login pegando a cpf e a senha do administrador
e adicionado o comando LIMIT 1 para dizer que só
pode pegar 1 dado apenas*/
    $sql = "SELECT * FROM administrador
    WHERE adm_cpf = ? AND adm_email = ? LIMIT 1";
    
/*Na sequência dos códigos abaixo a variável $stmt
recebe o comando SQL e através do bind_param (
que é utilizado para se comunicar com o bd) ele 
envia a quantidade de informações que o banco precisa
para logar, o banco recebe, consulta na tabela
administrador e retorna se este usuário existe*/    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $adm_cpf, $adm_email); // corrigido
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();
        //if (password_verify($senha_adm, $usuario['senha_adm'])) { // Linha com criptografia
        if ($adm_senha === $usuario['adm_senha']) {
            $_SESSION['admin'] = $usuario['adm_nome'];
            $_SESSION['admin_id'] = $usuario['adm_id'];
           
            header("Location: menu.php");
            exit;
        } else {
            $erro = "Login/senha incorretos.";
        }
    } else {
        $erro = "Login/senha incorretos.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Bem-vindo (a)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
type="text/css" href="estilo.css">
</head>
<style>
    .cor_botao{
        background-color: #ff9e85;
        width: 190px;
        margin-left: 50px;
    }

    .cor_letrinha{
        background-color: #443025;
    }

    .cor_titulo{
        color: #b2935b;

    }

    .cor_fundo{
        background-color: #ffe4e1;

    }

    .cor_botao2{
        background-color: #ff9e85;
        margin-left: 110px;
        margin-top: 10px;


    }
</style>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center vh-100  cor_fundo" >
    <div class="card p-4 shadow" style="width: 350px;">
        <h3 class="text-center mb-4 cor_titulo">Bem-vindo (a)</h3>

        <?php if($erro): ?>
            <div class="alert alert-danger"><?= $erro ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="mb-3" >
            <input type="text" name="adm_cpf" class="form-control cor_botao" required id="cpf"  placeholder="cpf..." >
            </div>

            <div class="mb-3">
            <input type="email" name="adm_email"class="form-control cor_botao" required id="email"  placeholder="e-mail...">


            </div>

            <div class="mb-3">
            <input type="password" name="adm_senha" class="form-control cor_botao " required id="senha" placeholder="senha...">
            </div>

            <button type="submit" class="btn w-90 cor_botao2">Entrar</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>