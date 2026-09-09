<?php
include "../conexao.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro do Administrador</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- icones do bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<style>

.container{
    text-align:center;
}

img{
    height:100px;
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

  <!-- JavaScript do Bootstrap 5  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  


<!--<div class="container-lg">-->


<br>
<br>



<div class="container col-6 mb-4">


<a href="../menu.php" class="imagem">
<img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">    
</a>
    


        <h2>Cadastro Administrador</h2>

        <form method="post" action="insertAdm.php" enctype="multipart/form-data" class="row g-3">
    

            <div class="col-mb-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome"
                name="adm_nome" placeholder="Nome do administrador">
            </div>

            <div class="col-mb-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha"
                name="adm_senha" placeholder="Insira sua senha">
            </div>

            <div class="col-mb-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email"
                name="adm_email" placeholder="Insira seu email">
            </div>

            <div class="col-mb-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf"
                name="adm_cpf" placeholder="Insira seu CPF">
            </div>

            <br>

            <div class="col-12">
                <button type="submit" class="btn btn-primary"> CADASTRAR </button>
                
            </div>

        </form>


</div>

<br>
<br>


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
                            <th>Senha</th>
                            <th>Email</th>
                            <th>Cpf</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <!-- Corpo da tabela -->
                    <tbody>

                        <?php

                        $sql = "SELECT * FROM administrador";

                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()) {

                            $adm_id = $row['adm_id'];

                            echo "
                            <tr>

                                <td>{$row['adm_nome']}</td>

                                <td>{$row['adm_senha']}</td>

                                 <td>{$row['adm_email']}</td>

                                <td>{$row['adm_cpf']}</td>

                                <td>-</td>

                                <td>

                                    <a href='editarformAdm.php?adm_id=$adm_id'
                                       class='btn btn-primary btn-sm'>
                                        Editar
                                    </a>

                                    <a href='deleteAdm.php?adm_id=$adm_id'
                                       class='btn btn-danger btn-sm'
                                       onclick=\"return confirm('Deseja realmente excluir o ADM {$row['adm_nome']}?');\">
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

