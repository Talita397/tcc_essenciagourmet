<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";

/*Neste trecho do código está sendo criado uma variável em PHP $ 
para receber através do método POST o name HTML*/

$adm_nome = $_POST['adm_nome'];
$adm_senha = $_POST['adm_senha'];
$adm_email = $_POST['adm_email'];
$adm_cpf = $_POST['adm_cpf'];


$sql = "INSERT INTO administrador (adm_nome,adm_senha,adm_email,adm_cpf) 
VALUES ('$adm_nome','$adm_senha','$adm_email','$adm_cpf')";

if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Dados Cadastrados com Sucesso!');
    window.location.href='formAdm.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}