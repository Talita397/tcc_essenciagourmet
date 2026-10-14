<?php

include "../conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro da Galeria - Essência Gourmet</title>


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


        /* CONTEÚDO */

        .form-container {
            max-width: 650px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fffdf9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
        }


        /* ÍCONE */

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
            margin-bottom: 15px;
            font-size: 28px;
        }


        /* DESCRIÇÃO */

        .descricao {
            text-align: center;
            color: #765747;
            margin-bottom: 25px;
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


        /* TEXTO DE AJUDA */

        .form-text {
            color: #765747;
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


        /* BOTÃO VISUALIZAR */

        .btn-visualizar {
            background-color: transparent;
            border-color: #765747;
            color: #765747;
            width: 100%;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-visualizar:hover {
            background-color: #765747;
            border-color: #765747;
            color: white;
        }


        /* ALERTAS */

        .alert {
            text-align: center;
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

                <img src="https://cdn-icons-png.flaticon.com/512/3342/3342137.png"
                    alt="Voltar ao menu">

            </a>


            <!-- TÍTULO -->

            <h2>

                Cadastro da Galeria

            </h2>


            <!-- DESCRIÇÃO -->

            <p class="descricao">

                Cadastre um grupo de imagens para aparecer no carrossel
                da página da Essência Gourmet.

            </p>


            <!-- MENSAGEM DE SUCESSO -->

            <?php if (isset($_GET['galeria']) && $_GET['galeria'] === 'sucesso'): ?>

                <div class="alert alert-success">

                    Galeria e imagens cadastradas com sucesso!

                </div>

            <?php endif; ?>


            <!-- MENSAGEM DE ERRO -->

            <?php if (isset($_GET['galeria']) && $_GET['galeria'] === 'erro'): ?>

                <div class="alert alert-danger">

                    Não foi possível cadastrar a galeria.
                    Confira os arquivos.

                </div>

            <?php endif; ?>


            <!-- FORMULÁRIO -->

            <form action="insertGaleria.php"
                method="POST"
                enctype="multipart/form-data"
                class="row g-3">


                <!-- TÍTULO DA GALERIA -->

                <div class="col-12">

                    <label for="titulo_galeria"
                        class="form-label">

                        Título da galeria

                    </label>

                    <input type="text"
                        name="titulo_galeria"
                        id="titulo_galeria"
                        class="form-control"
                        maxlength="100"
                        placeholder="Ex.: Novidades de Bolos"
                        required>

                </div>


                <!-- DESCRIÇÃO -->

                <div class="col-12">

                    <label for="descricao_galeria"
                        class="form-label">

                        Descrição

                    </label>

                    <textarea
                        name="descricao_galeria"
                        id="descricao_galeria"
                        class="form-control"
                        maxlength="255"
                        rows="3"
                        placeholder="Descreva brevemente esta galeria"></textarea>

                </div>


                <!-- IMAGENS -->

                <div class="col-12">

                    <label for="imagens"
                        class="form-label">

                        Selecionar imagens

                    </label>

                    <input type="file"
                        name="imagens[]"
                        id="imagens"
                        class="form-control"
                        accept="image/jpeg,image/png,image/webp"
                        multiple
                        required>

                    <div class="form-text">

                        Selecione uma ou várias imagens em JPG, PNG ou WEBP,
                        com até 5 MB cada.

                    </div>

                </div>


                <!-- LEGENDA -->

                <div class="col-12">

                    <label for="legenda"
                        class="form-label">

                        Legenda das imagens

                    </label>

                    <input type="text"
                        name="legenda"
                        id="legenda"
                        class="form-control"
                        maxlength="150"
                        placeholder="Ex.: Doces recém-adquiridos">

                </div>


                <!-- BOTÃO CADASTRAR -->

                <div class="col-12 mt-4">

                    <button type="submit"
                        class="btn btn-cadastrar">

                        CADASTRAR GALERIA

                    </button>

                </div>


                <!-- BOTÃO VISUALIZAR -->

                <div class="col-12">

                    <a href="../telaprincipal.php"
                        class="btn btn-visualizar">

                        Visualizar Carrossel

                    </a>

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
        integrity="sha384-FKyoEForCGlyvwxHj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>


</body>

</html>
