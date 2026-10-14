<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";

/*Neste trecho do código está sendo criado uma variável em PHP $ 
para receber através do método POST o name HTML*/

$galeria_foto = $_POST['galeria_foto'];


$sql = "INSERT INTO galeria (galeria_foto) 
VALUES (
    '$galeria_foto'
)";


if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Dados Cadastrados com Sucesso!');
    window.location.href='formGaleria.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}