<?php
include "../conexao.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário Completo</title>

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
    
<a href="../menu.php">
<img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">    
</a>


<h2>
Cadastro Usuario
</h2>


<form method="post" action="insertProduto.php" enctype="multipart/form-data">
    Nome:<br>
    <input type="text" name="pro_nome" class="caixa"><br>
      
    Email:<br>
    <input type="number" name="pro_preco" class="caixa"><br>
    
    Senha:<br>
    <input type="text" name="categoria_id" class="caixa"><br>