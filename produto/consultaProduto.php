<?php
include "../conexao.php"?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
.container{
    text-align:center;
}

img{
    height: 100px;
}

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

<form method="post" action="editarformProduto.php" enctype="multipart/form-data" class="row g-3">

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
</style>



</head>


<body>





            
<h3>Produtos cadastrados</h3>
<br>
<br>
<div class="row">
    <?php
    $sql= "SELECT * FROM produto";
      $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            $pro_id = $row['pro_id'];
            $imagem = !empty($row['imagem']) ?
            $row['imagem'] : "../icones/semfoto.png"; // Arrumar a imagem semfoto depois !!!
            
            echo "
            <div class='col-md-3'>
                <div class='card mb-3 shadow-sm'>

                <img src='$imagem' class='card-img-top' height='350' style='object-fit:cover;'>

                
                <div class='card-body'>
                    <h5 class='card-title'>
                        {$row['pro_nome']}
                    </h5>
                    
                    <p class='card-text'><small>
                    {$row['pro_ingredientes']} - {$row['pro_preco']}
                    </small></p>
                    
                    <a href='editarformProduto.php?id=$pro_id' class='btn btn-sm btn-warning'>Editar</a>

                    <a href='deleteProduto.php?id=$pro_id'
                    class='btn btn-sm btn-danger'
                    onclick=\"return confirm('Deseja excluit o livro {$row['pro_nome']}?');\">Excluir</a>
                </div>
            </div>
        </div>
        "; 

        } 
    
    ?>

</div>


    </div>

<!-- Rodapé -->
<div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>



</div>
</body>
</html>


