<?php
include "../conexao.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Produtos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
.container{
    text-align:center;
}

img{
    height: 100px;
}
body {
            margin: 0;
            background-color: #fff8ed;
            font-family: Georgia, serif;
            color: #5d473d;
        }
         
        .cor_barra{
    background-color:#CD853F;
  }
  
  .rodape {
    background-color:#CD853F;
    color: #5d473d;
    padding: 25px;
    text-align: center;
    margin-top: 20px;
}

</style>



</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark cor_barra">
    <!-- Logo -->
    <a href="index.html" class="navbar-brand ms-3">
      Espaço ADM
    </a>
    
    <!-- Menu Hamburguer -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navegação -->
    <div class="collapse navbar-collapse" id="navegacao">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item">
          <a href="../menu.php" class="nav-link text-white">Voltar ao Menu</a>
        </li>
       
      </ul>
    </div>
  </nav>

<div class="caixa w-100 mx-auto my-4 p-4">


<div class="container col-12 mb-4">
    
<a href="../menu.php">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdTcp0CMHdwDYqinHQzP2h5dAFx74JWIP0W1WlhZ2nVQ&s=10">
</a>



<div class="container col-lg-7 col-md-8 col-sm-12">

        <h2 class="mb-3">Cadastro Produto </h2>

        <form method="post" action="editarformProduto.php" enctype="multipart/form-data" class="row g-3">
    
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome"
                name="pro_nome" placeholder="Nome do produto">
</div>
</div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" id="preco"
                name="pro_preco" placeholder="Insira o preço">
</div>
</div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="ingredientes" class="form-label">Ingredientes</label>
                <textarea  class="form-control"  rows="5" id="ingredientes"
                name="pro_ingredientes" placeholder="Insira os ingredientes">
</textarea>
</div>
</div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria"
                name="categoria_id" placeholder="Insira a categoria">
</div>
</div>

            <div class="row">
            <div class="md-3">
                <label for="formFile" class="form-label">Foto do produto</label>
                <input class="form-control" type="file"  accept="image/*" name="imagem">
</div>
</div>



            <br>

            <div class="col-12">
                <button type="submit" class="btn btn-primary"> CADASTRAR </button>
</div>

</form>


</div>

<br>
<br>

</div>

<!-- Rodapé -->
  <div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</body>
</html>




