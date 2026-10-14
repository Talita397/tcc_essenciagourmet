<?php
include "../conexao.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Categorias</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
.container{
    text-align:center;
}

img{
    height: 130px;
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
</div class="row">
    <a href="index.html" class="navbar-brand ms-3">
      Espaço ADM
    </a>
    
    <!-- Menu Hamburguer -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navegação -->
     
     <div class="col-12">
    <div class="collapse navbar-collapse" id="navegacao">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item">
          <a href="../menu.php" class="nav-link text-white">Voltar ao Menu</a>
        </li>
       
      </ul>
    </div>
   </div>
</div>
  </nav>

  <!-- JavaScript do Bootstrap 5  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  

<div class="container col-6 mb-4">
    
<a href="../menu.php">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvHzrNTud_WA7esKfbmacpt0B1V1U5ARJwL_6QB3iVAg&s=10">

</a>

<div class="row">
<div class="container col-lg-12 col-md-12 col-sm-12 mb-3 ">
        <h2>Cadastro Categoria</h2>
        <form method="post" action="insertCategoria.php" enctype="multipart/form-data" class="row g-3">
</div>
</div>


          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm- mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control caixa" id="nome"
                name="cat_nome" placeholder="Nome da categoria">
            </div>
</div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary"> CADASTRAR </button>
                <a href="../menu.php"><button type="button" class="btn btn-danger">Voltar</button></a>
            </div>

            <br>
            <br>

        </form>
</div>




<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <!-- Tabela responsiva -->
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover text-center align-middle">

                    <!-- Cabeçalho -->
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Açoes</th>
                           
                        </tr>
                    </thead>

                    <!-- Corpo da tabela -->
                    <tbody>

                        <?php

                        $sql = "SELECT * FROM categoria";

                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()) {

                            $adm_id = $row['cat_id'];

                            echo "
                            <tr>

                                <td>{$row['cat_nome']}</td>

                              

                        

                                

                                <td>

                                    <a href='editarformCategoria.php?adm_id=$adm_id'
                                       class='btn btn-primary btn-sm'>
                                        Editar
                                    </a>

                                    <a href='deleteCategoria.php?adm_id=$adm_id'
                                       class='btn btn-danger btn-sm'
                                       onclick=\"return confirm('Deseja realmente excluir a Categoria {$row['cat_nome']}?');\">
                                        Excluir
                                    </a>

                                </td>

                            </tr>
                            ";
                        }

                        ?>

                    </tbody>

                </table>

            </div>

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


</div>

  <!-- Rodapé -->
  <div class="row">

<div class="col-12 rodape">

    <p>2026 - Mundo dos Filmes 🎬</p>

</div>

</div>
</body>
</html>



