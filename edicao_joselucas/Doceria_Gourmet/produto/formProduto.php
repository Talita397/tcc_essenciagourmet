<?php

include "../conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produtos - Essência Gourmet</title>


    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">


    <!-- Bootstrap Icons -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


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


        /* FORMULÁRIO */

        .form-container {
            max-width: 650px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fffdf9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
        }


        /* IMAGEM */

        .imagem {
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }

        .imagem img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }


        /* TÍTULO */

        h2 {
            text-align: center;
            color: #5d473d;
            margin-bottom: 25px;
            font-size: 28px;
        }


        /* LABEL */

        .form-label {
            color: #5d473d;
            font-weight: bold;
        }


        /* INPUTS */

        .form-control {
            border: 1px solid #d8c3ae;
            background-color: #fffaf3;
        }

        .form-control:focus {
            border-color: #b58a3a;
            box-shadow: 0 0 0 0.2rem rgba(181, 138, 58, 0.20);
        }


        /* BOTÃO CADASTRAR */

        .btn-cadastrar {
            background-color: #765747;
            border-color: #765747;
            color: white;
            width: 100%;
            transition: 0.3s;
        }

        .btn-cadastrar:hover {
            background-color: #b58a3a;
            border-color: #b58a3a;
            color: white;
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

            .form-container {
                margin: 30px 15px;
                padding: 25px 20px;
            }

            h2 {
                font-size: 25px;
            }

        }


        @media (max-width: 480px) {

            .navbar-brand {
                font-size: 17px;
            }

            .form-container {
                padding: 20px 15px;
            }

            h2 {
                font-size: 23px;
            }

        }

    </style>

</head>


<body>


    <!-- BARRA DE NAVEGAÇÃO -->

    <nav class="navbar navbar-expand-md navbar-dark cor_barra">


        <!-- Nome -->

        <a href="../menu.php" class="navbar-brand ms-3">

            Essência Gourmet

        </a>


        <!-- Menu Hamburguer -->

        <button class="navbar-toggler me-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navegacao"
            aria-controls="navegacao"
            aria-expanded="false"
            aria-label="Abrir menu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- Navegação -->

        <div class="collapse navbar-collapse" id="navegacao">

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


        <div class="form-container">


            <!-- ÍCONE -->

            <a href="../menu.php" class="imagem">

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdTcp0CMHdwDYqinHQzP2h5dAFx74JWIP0W1WlhZ2nVQ&s=10"
                    alt="Voltar ao menu">

            </a>


            <!-- TÍTULO -->

            <h2>

                Cadastro de Produto

            </h2>


            <!-- FORMULÁRIO -->

            <form method="post"
                action="insertProduto.php"
                enctype="multipart/form-data"
                class="row g-3">


                <!-- NOME -->

                <div class="col-12">

                    <label for="nome"
                        class="form-label">

                        Nome

                    </label>

                    <input type="text"
                        class="form-control"
                        id="nome"
                        name="pro_nome"
                        placeholder="Nome do produto"
                        required>

                </div>


                <!-- PREÇO -->

                <div class="col-12">

                    <label for="preco"
                        class="form-label">

                        Preço

                    </label>

                    <input type="text"
                        class="form-control"
                        id="preco"
                        name="pro_preco"
                        placeholder="Insira o preço"
                        required>

                </div>


                <!-- INGREDIENTES -->

                <div class="col-12">

                    <label for="ingredientes"
                        class="form-label">

                        Ingredientes

                    </label>

                    <textarea
                        class="form-control"
                        rows="5"
                        id="ingredientes"
                        name="pro_ingredientes"
                        placeholder="Insira os ingredientes"
                        required></textarea>

                </div>


                <!-- CATEGORIA -->

                <div class="col-12">

                    <label for="categoria"
                        class="form-label">

                        Categoria

                    </label>

                    <input type="text"
                        class="form-control"
                        id="categoria"
                        name="categoria_id"
                        placeholder="Insira a categoria"
                        required>

                </div>


                <!-- FOTO -->

                <div class="col-12">

                    <label for="formFile"
                        class="form-label">

                        Foto do produto

                    </label>

                    <input
                        class="form-control"
                        type="file"
                        id="formFile"
                        accept="image/*"
                        name="imagem"
                        required>

                </div>


                <!-- BOTÃO -->

                <div class="col-12 mt-4">

                    <button type="submit"
                        class="btn btn-cadastrar">

                        CADASTRAR

                    </button>

                </div>


            </form>

        </div>

    </main>


    <!-- RODAPÉ -->

    <footer class="rodape">

        <p>

            2026 - Essência Gourmet

        </p>

    </footer>


    <!-- Bootstrap - JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

</body>

</html>