<?php
include "../conexao.php";
$cat_id = $_GET['cat_id'];

$sql="SELECT * FROM categoria 
WHERE cat_id = $cat_id";
$result = $conn->query($sql);
$categoria = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Alteração de categoria</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript do Bootstrap 5  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<style>
body{
    font-family:Arial;
    background-color:#f2f2f2;
    text-align:center;
}
.container{
    background:white;
    width:500px;
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
    width:500px;
    
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

  
  

<div class="container">

<img src="img/logo.png">    

<h2>Edição de categoria</h2>
<div class="row">

<form method="post" action="updateCategoria.php" enctype="multipart/form-data">

    <input type="hidden" name="cat_id" class="caixa" value="<?= $categoria['cat_id']?>"><br>
    <div class="col-lg-12 col-md-12 col-sm-12">
    Nome:<br>
    <input type="text" name="cat_nome" class="caixa" value="<?= $categoria['cat_nome']?>"><br>
    
    
    <br>
    <br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="EDITAR" class="caixa">
<a href="../categoria/formCategoria.php"><button type="button" class="caixa">Voltar</button></a>

</form>
</div>
</div>
</body>
 <!-- Rodapé -->
 <div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</html>