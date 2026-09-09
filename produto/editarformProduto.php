<?php
include "../conexao.php";
$pro_id = $_GET['pro_id'];

$sql="SELECT * FROM produto
WHERE pro_id = $pro_id";
$result = $conn->query($sql);
$produto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Alteração de Aluno</title>

<style>
body{
    font-family:Arial;
    background-color:#f2f2f2;
    text-align:center;
}
.container{
    background:white;
    width:600px;
    margin:auto;
    margin-top:30px;
    padding:20px;
    border-radius:10px;
}
.caixa{
    width:80%;
    padding:5px;
    margin:5px;
}
img{
    width:100px;
    margin-bottom:10px;
}
.grupo{
    text-align:left;
    width:80%;
    margin:auto;
}
.grupo label{
    display:block;
    margin:5px 0;
}
</style>

</head>
<body>

<div class="container">

<img src="img/logo.png">    

<h2>Edição de Produto</h2>

<form method="post" action="updateProduto.php" enctype="multipart/form-data">
   

    <input type="hidden" name="pro_id" class="caixa" value="<?= $produto['pro_id']?>"><br>


    
    Nome:<br>
    <input type="text" name="pro_nome" class="caixa" value="<?= $produto['pro_nome']?>"><br>
    
    Preço:<br>
    <input type="text" name="pro_preco" class="caixa" value="<?= $produto['pro_preco']?>"><br>
    
    Ingredientes:<br>
    <input type="text" name="pro_ingredientes" class="caixa" value="<?= $produto['pro_ingredientes']?>"><br>
    
    Categoria:<br>
    <input type="text" name="categoria_id" class="caixa" value="<?= $produto['categoria_id']?>"><br>
    
    Foto:<br>
    <input type="text" name="pro_foto" class="caixa" value="<?= $produto['pro_foto']?>"><br>

    <br>
    <br>
<!--Botões de Enviar e Limpar-->
<input type="submit" value="EDITAR" class="caixa">
<a href="../produto/consultaProduto.php"><button type="button" class="caixa">Voltar</button></a>

</form>
</body>
</html>