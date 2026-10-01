<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";

/*Neste trecho do código está sendo criado uma variável em PHP $ 
para receber através do método POST o name HTML*/
$cat_nome = $_POST['cat_nome'];


$sql = "INSERT INTO categoria (cat_nome) 
VALUES ('$cat_nome')";

if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Dados Cadastrados com Sucesso!');
    window.location.href='formCategoria.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}