<?php
include "../conexao.php";
/*As variáveis criadas do PHP recebem
o name do HTML */
$pro_id = $_POST['pro_id'];
$pro_nome = $_POST['pro_nome'];
$pro_preco = $_POST['pro_preco'];
$pro_ingredientes = $_POST['pro_ingredientes'];
$categoria_id = $_POST['categoria_id'];
$pro_foto = $_POST['pro_foto'];

$sql = "UPDATE produto SET 
pro_nome = '$pro_nome', 
pro_preco = '$pro_preco',
pro_ingredientes = '$pro_ingredientes',
categoria_id = '$categoria_id', 
pro_foto = '$pro_foto'
WHERE pro_id=$pro_id";

if($conn->query($sql) === TRUE){
    echo 
    "<script>
    alert('Dados alterados com sucesso!');
    window.location.href='formProduto.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}




?>