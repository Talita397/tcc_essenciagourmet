<?php
include "../conexao.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário Completo</title>


<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous">


<style>
body{
    font-family:Arial;
    background-color:#f2f2f2;
    text-align:center;
}


        .borda {
            border: 1px solid #f94646;
            text-align: center;
            color: brown;
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

<h2 class="text-primary mb-4">
Cadastro Cardapio
</h2>

<form method="post" action="insertProduto.php" enctype="multipart/form-data">
<div class="container-fluid"> <!--cria grid-->
        <div class="row"> <!--cria linha-->
<div class="col-md-6">
<label class="form-label">Lanche</label>
<input type="text"
name="pro_nome"
class="caixa form-control">
</div>


<div class="col-md-6">
<label class="form-label">preço</label>
<input type="text"
name="pro_nome"
class="caixa form-control">
</div>

<div class="col-md-6">
<label class="form-label">Categoria</label>
<input type="text"
name="pro_nome"
class="caixa form-control">
</div>

<input type="submit" value="CADASTRAR" class="caixa">

   


   
