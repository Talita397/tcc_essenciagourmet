<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Espaço Administrador</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background-color: #fff8ed;
}

.caixa{
    background:#fff8ed;
    width:800px;
    margin:50px auto;
    padding:30px;
    text-align:center;
}

img{
    width:120px;
    height:120px;
}

a{
    text-decoration:none;
    color:black;
}

.titulo{
    color: #b2935b;
}

.p1{
    color: #b2935b;
    margin: 25px;
}

img{
    width:120px;
    height:120px;
    border: 2px solid #ffd235;
    border-radius: 50%;
    padding: 5px;
    
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

<div class="container">

<h2 class="titulo">Espaço Administrador</h2>

<br><br>

<div class="row">

<div class="col-lg-3 col-md-6 col-sm-12">
<a href="produto/formProduto.php">
<img src="https://img.icons8.com/fluent-systems-regular/1200/signing-a-document.jpg">
<p class="p1">Cadastrar Produtos</p>
</a>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<a href="categoria/formCategoria.php">
<img src="https://cdn-icons-png.flaticon.com/512/7538/7538677.png">
<p class="p1">Cadastrar Categorias</p>
</a>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<a href="administrador/formAdm.php">
<img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">
<p class="p1">Cadastrar administrador</p>
</a>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<a href="galeria/formGaleria.php">
<img src="https://img.icons8.com/p1em/1200/gallery.jpg">
<p class="p1">Cadastrar galeria</p>
</a>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<a href="produto/consultaProduto.php">
<img src="https://www.flaticon.com/free-icon/image-galery_12578258?term=galery&page=1&position=11&origin=search&related_id=12578258#">
<p class="p1">Consulta de Produtos</p>


</a>

</div>


<div class="col-lg-3 col-md-6 col-sm-12">
<a href="galeria/consultaGaleria.php">
<img src="https://www.flaticon.com/free-icon/image-galery_12578258?term=galery&page=1&position=11&origin=search&related_id=12578258#">
<p class="p1">Consulta de Galeria</p>


</a>
</div>

<br>

</div>
</div>

</div>

 <!-- Rodapé -->
 <div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</body>
</html>

