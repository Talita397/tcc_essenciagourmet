<?php
include "../conexao.php";
$adm_id = $_GET['adm_id'];

$sql="SELECT * FROM administrador 
WHERE adm_id = $adm_id";
$result = $conn->query($sql);
$administrador = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Alteração de ADM</title>

<style>
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

  <!-- JavaScript do Bootstrap 5  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  
</body>

</html>



<img src="img/logo.png">    
<div class="container">
<h2>Edição de ADM</h2>

<form method="post" action="updateAdm.php" enctype="multipart/form-data">

    <input type="hidden" name="adm_id" class="caixa" value="<?= $administrador['adm_id']?>">

   
    Nome:<br>
    <input type="text" name="adm_nome" class="caixa" value="<?= $administrador['adm_nome']?>"><br>
    
    Senha:<br>
    <input type="password" name="adm_senha" class="caixa" value="<?= $administrador['adm_senha']?>"><br>
    
    Email:<br>
    <input type="email" name="adm_email" class="caixa" value="<?= $administrador['adm_email']?>"><br>
    
    CPF:<br>
    <input type="text" name="adm_cpf" class="caixa" value="<?= $administrador['adm_cpf']?>"><br>
    
    <br>
    <br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="EDITAR" class="caixa">
<a href="../administrador/formAdm.php"><button type="button" class="caixa">Voltar</button></a>

</form>
</div>
  <!-- Rodapé -->
  <div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</body>
</html>

