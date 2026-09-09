<?php

include "../conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro da Galeria</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">


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

<br>
</head>
<body>

<main class="container">

<div class="card card-formulario shadow-sm">

<h2 class="mb-3">
   <br>
Cadastro da Galeria
</h2>

<p class="text-muted">
Cadastre um grupo de imagens para aparecer no carrossel da página da Doceria.
</p>

<?php if (isset($_GET['galeria']) && $_GET['galeria'] === 'sucesso'): ?>

<div class="alert alert-success">
Galeria e imagens cadastradas com sucesso!
</div>

<?php elseif (isset($_GET['galeria']) && $_GET['galeria'] === 'erro'): ?>

<div class="alert alert-danger">
Não foi possível cadastrar a galeria.
Confira os arquivos.
</div>

<?php endif; ?>

<form action="insertGaleria.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label for="titulo_galeria" class="form-label">
Título da galeria:
</label>

<input type="text" name="titulo_galeria" id="titulo_galeria" class="form-control" maxlength="100" placeholder="Ex.: Novidades de Bolos" required>

</div>

<div class="mb-3">

<label for="descricao_galeria" class="form-label">
Descrição (opcional):
</label>

<textarea name="descricao_galeria" id="descricao_galeria" class="form-control" maxlength="255" rows="3"
placeholder="Descreva brevemente esta galeria"></textarea>

</div>

<div class="mb-3">

<label for="imagens" class="form-label">
Selecionar imagens:
</label>

<input type="file" name="imagens[]" id="imagens" class="form-control" accept="image/jpeg,image/png,image/webp" multiple required>

<div class="form-text">
Selecione uma ou várias imagens em JPG, PNG ou WEBP, com até 5 MB cada.
</div>

</div>

<div class="mb-3">

<label for="legenda" class="form-label">
Legenda das imagens (opcional):
</label>

<input type="text" name="legenda" id="legenda" class="form-control" maxlength="150" placeholder="Ex.: Doces recém-adquiridos">

</div>

<button type="submit" class="btn btn-primary">
Cadastrar Galeria
</button>

<a href="livrosC.php" class="btn btn-outline-secondary">
Visualizar Carrossel
</a>

</form>

</div>

</main>

<!-- Rodapé -->
<div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</body>
</html>
