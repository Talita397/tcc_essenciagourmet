<?php

include "../conexao.php";

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta de Produtos - Essência Gourmet</title>


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


        /* CONTEÚDO */

        .consulta-container {
            max-width: 1100px;
            margin: 45px auto;
            padding: 30px;
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


        /* CABEÇALHO */

        .cabecalho {
            text-align: center;
            background-color: #fffdf9;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
            margin-bottom: 35px;
        }


        h2 {
            color: #5d473d;
            margin-bottom: 15px;
        }


        .linha {
            width: 180px;
            margin: 0 auto 15px;
            border: 0;
            border-top: 2px solid #d5ae46;
            opacity: 1;
        }


        /* TÍTULO DA LISTA */

        .titulo-produtos {
            text-align: center;
            color: #5d473d;
            margin-bottom: 25px;
        }


        /* CARD DO PRODUTO */

        .card-produto {
            background-color: #fffdf9;
            border: 1px solid #e0d0c0;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 12px rgba(93, 71, 61, 0.12);
            transition: 0.3s;
        }

        .card-produto:hover {
            transform: translateY(-4px);
            box-shadow: 0 7px 18px rgba(93, 71, 61, 0.20);
        }


        /* IMAGEM DO PRODUTO */

        .imagem-produto {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }


        /* CORPO DO CARD */

        .card-body {
            padding: 20px;
            text-align: center;
        }


        .card-title {
            color: #765747;
            font-weight: bold;
            margin-bottom: 10px;
        }


        .card-text {
            color: #5d473d;
            min-height: 50px;
        }


        .preco {
            color: #a65f28;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
        }


        /* BOTÕES */

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


        /* NENHUM PRODUTO */

        .sem-produtos {
            text-align: center;
            background-color: #fffdf9;
            padding: 30px;
            border-radius: 12px;
            color: #765747;
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

            .consulta-container {
                margin: 30px 15px;
                padding: 15px;
            }

            .cabecalho {
                padding: 25px 15px;
            }

            .imagem-produto {
                height: 220px;
            }

        }


        @media (max-width: 480px) {

            .navbar-brand {
                font-size: 17px;
            }

            .consulta-container {
                margin: 20px 10px;
                padding: 10px;
            }

            .imagem-produto {
                height: 200px;
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


    <!-- CONTEÚDO -->

    <main class="consulta-container">


      

        <!-- TÍTULO -->

        <h3 class="titulo-produtos">
            Produtos cadastrados
        </h3>


        <!-- PRODUTOS -->

        <div class="row g-4">


            <?php

            $sql = "SELECT * FROM produto";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {


                    $pro_id = $row['pro_id'];


                    $imagem = !empty($row['imagem'])
                        ? $row['imagem']
                        : "../icones/semfoto.png";

            ?>


                    <!-- PRODUTO -->

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">


                        <div class="card-produto">


                            <!-- IMAGEM -->

                            <img src="<?= $imagem ?>"
                                class="imagem-produto"
                                alt="<?= $row['pro_nome'] ?>">


                            <!-- INFORMAÇÕES -->

                            <div class="card-body">


                                <h5 class="card-title">

                                    <?= $row['pro_nome'] ?>

                                </h5>


                                <p class="card-text">

                                    <?= $row['pro_ingredientes'] ?>

                                </p>


                                <p class="preco">

                                    R$ <?= $row['pro_preco'] ?>

                                </p>


                                <!-- BOTÕES -->

                                <a href="editarformProduto.php?id=<?= $pro_id ?>"
                                    class="btn btn-editar btn-sm">

                                    Editar

                                </a>


                                <a href="deleteProduto.php?id=<?= $pro_id ?>"
                                    class="btn btn-excluir btn-sm"
                                    onclick="return confirm('Deseja realmente excluir o produto <?= $row['pro_nome'] ?>?');">

                                    Excluir

                                </a>


                            </div>

                        </div>


                    </div>


            <?php

                }


            } else {

            ?>


                <div class="col-12">

                    <div class="sem-produtos">

                        <h5>
                            Nenhum produto cadastrado.
                        </h5>

                    </div>

                </div>


            <?php

            }

            ?>


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
