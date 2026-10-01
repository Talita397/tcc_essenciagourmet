<?php

include "../conexao.php";

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Categorias - Essência Gourmet</title>


    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">


    <style>

        * {
            box-sizing: border-box;
        }


        /* BODY */

        body {
            margin: 0;
            background-color: #fff8ed;
            font-family: Georgia, serif;
            color: #5d473d;
        }


        /* BARRA DE NAVEGAÇÃO */

        .cor_barra {
            background-color: #765747;
        }

        .navbar-brand {
            font-family: Georgia, serif;
            font-weight: bold;
        }

        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #e4c98a !important;
        }


        /* CONTAINER DO FORMULÁRIO */

        .container-form {
            max-width: 650px;
            margin: 45px auto;
            padding: 30px;
            text-align: center;
            background-color: #fffdf9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
        }


        /* IMAGEM */

        .imagem-menu {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border: 3px solid #d5ae46;
            border-radius: 50%;
            padding: 5px;
            margin-bottom: 15px;
        }


        /* TÍTULO */

        h2 {
            color: #5d473d;
            margin-bottom: 25px;
        }


        .linha {
            width: 180px;
            margin: 0 auto 25px;
            border: 0;
            border-top: 2px solid #d5ae46;
            opacity: 1;
        }


        /* FORMULÁRIO */

        .form-label {
            color: #765747;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #d8c5b7;
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #d5ae46;
            box-shadow: 0 0 0 3px rgba(213, 174, 70, 0.15);
        }


        /* BOTÕES */

        .btn-cadastrar {
            background-color: #CD853F;
            border-color: #CD853F;
            color: white;
        }

        .btn-cadastrar:hover {
            background-color: #A65F28;
            border-color: #A65F28;
            color: white;
        }

        .btn-voltar {
            background-color: #765747;
            border-color: #765747;
            color: white;
        }

        .btn-voltar:hover {
            background-color: #5d473d;
            border-color: #5d473d;
            color: white;
        }


        /* BOTÕES DA TABELA */

        .btn-editar {
            background-color: #765747;
            border-color: #765747;
            color: white;
        }

        .btn-editar:hover {
            background-color: #b58a3a;
            border-color: #b58a3a;
            color: white;
        }

        .btn-excluir {
            background-color: #a65f28;
            border-color: #a65f28;
            color: white;
        }

        .btn-excluir:hover {
            background-color: #8b4e20;
            border-color: #8b4e20;
            color: white;
        }


        /* TABELA */

        .tabela-container {
            max-width: 850px;
            margin: 40px auto;
        }

        .table {
            background-color: #fffdf9;
            color: #5d473d;
        }

        .table thead {
            background-color: #765747;
            color: white;
        }

        .table thead th {
            background-color: #765747;
            color: white;
            border-color: #765747;
        }

        .table tbody tr:hover {
            background-color: #fff4df;
        }


        /* RODAPÉ */

        .rodape {
            background-color: #765747;
            color: white;
            padding: 25px 20px;
            text-align: center;
            margin-top: 40px;
            font-size: 13px;
        }

        .rodape p {
            margin: 0;
        }


        /* RESPONSIVIDADE */

        @media (max-width: 768px) {

            .container-form {
                margin: 30px 15px;
                padding: 25px 20px;
            }

            .tabela-container {
                margin: 30px 15px;
            }

        }


        @media (max-width: 480px) {

            .container-form {
                margin: 20px 10px;
                padding: 20px 15px;
            }

            h2 {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>


    <!-- BARRA DE NAVEGAÇÃO -->

    <nav class="navbar navbar-expand-md navbar-dark cor_barra">

        <a href="../menu.php"
            class="navbar-brand ms-3">

            Essência Gourmet

        </a>


        <!-- MENU HAMBÚRGUER -->

        <button class="navbar-toggler me-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navegacao"
            aria-controls="navegacao"
            aria-expanded="false"
            aria-label="Abrir menu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- NAVEGAÇÃO -->

        <div class="collapse navbar-collapse"
            id="navegacao">

            <ul class="navbar-nav ms-auto me-3">

                <li class="nav-item">

                    <a href="../menu.php"
                        class="nav-link text-white">

                        Voltar ao Menu

                    </a>

                </li>

            </ul>

        </div>

    </nav>


    <!-- FORMULÁRIO -->

    <main>


        <div class="container-form">


            <!-- IMAGEM -->

            <a href="../menu.php">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvHzrNTud_WA7esKfbmacpt0B1V1U5ARJwL_6QB3iVAg&s=10"
                    class="imagem-menu"
                    alt="Voltar ao menu">

            </a>


            <!-- TÍTULO -->

            <h2>

                Cadastro de Categoria

            </h2>


            <hr class="linha">


            <!-- FORMULÁRIO -->

            <form method="post"
                action="insertCategoria.php"
                enctype="multipart/form-data">


                <!-- NOME -->

                <div class="mb-4 text-start">

                    <label for="nome"
                        class="form-label">

                        Nome

                    </label>

                    <input type="text"
                        class="form-control"
                        id="nome"
                        name="cat_nome"
                        placeholder="Nome da categoria"
                        required>

                </div>


                <!-- BOTÕES -->

                <div class="text-center">

                    <button type="submit"
                        class="btn btn-cadastrar">

                        CADASTRAR

                    </button>


                    <a href="../menu.php"
                        class="btn btn-voltar">

                        Voltar

                    </a>

                </div>

            </form>

        </div>


        <!-- TABELA -->

        <div class="tabela-container">


            <div class="table-responsive">


                <table class="table table-bordered table-striped table-hover text-center align-middle">


                    <!-- CABEÇALHO -->

                    <thead>

                        <tr>

                            <th>
                                Nome
                            </th>

                            <th>
                                Ações
                            </th>

                        </tr>

                    </thead>


                    <!-- CORPO -->

                    <tbody>

                        <?php

                        $sql = "SELECT * FROM categoria";

                        $result = $conn->query($sql);


                        while ($row = $result->fetch_assoc()) {

                            $cat_id = $row['cat_id'];

                        ?>

                            <tr>

                                <td>

                                    <?= $row['cat_nome'] ?>

                                </td>


                                <td>

                                    <a href="editarformCategoria.php?cat_id=<?= $cat_id ?>"
                                        class="btn btn-editar btn-sm">

                                        Editar

                                    </a>


                                    <a href="deleteCategoria.php?cat_id=<?= $cat_id ?>"
                                        class="btn btn-excluir btn-sm"
                                        onclick="return confirm('Deseja realmente excluir a Categoria <?= $row['cat_nome'] ?>?');">

                                        Excluir

                                    </a>

                                </td>

                            </tr>

                        <?php

                        }

                        ?>

                    </tbody>

                </table>

            </div>

        </div>

    </main>


    <!-- RODAPÉ -->

    <footer class="rodape">

        <p>

            2026 - Essência Gourmet

        </p>

    </footer>


    <!-- Bootstrap JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwxHj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>


</body>

</html>
