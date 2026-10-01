
<?php

include "../conexao.php";

$cat_id = $_GET['cat_id'];

$sql = "SELECT * FROM categoria 
        WHERE cat_id = $cat_id";

$result = $conn->query($sql);

$categoria = $result->fetch_assoc();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alteração de Categoria - Essência Gourmet</title>


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


        /* BARRA */

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

        .container-form {
            max-width: 650px;
            margin: 45px auto;
            padding: 30px;
            background-color: #fffdf9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
        }


        /* TÍTULO */

        h2 {
            text-align: center;
            color: #5d473d;
            margin-bottom: 25px;
        }


        /* LINHA DO TÍTULO */

        .linha {
            width: 180px;
            margin: 0 auto 30px;
            border: 0;
            border-top: 2px solid #d5ae46;
            opacity: 1;
        }


        /* FORMULÁRIO */

        .grupo {
            margin-bottom: 18px;
        }

        .grupo label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #765747;
        }


        .caixa {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d8c5b7;
            border-radius: 8px;
            background-color: #fff;
            color: #5d473d;
            font-family: Georgia, serif;
        }

        .caixa:focus {
            outline: none;
            border-color: #d5ae46;
            box-shadow: 0 0 0 3px rgba(213, 174, 70, 0.15);
        }


        /* BOTÕES */

        .botoes {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .btn-editar {
            background-color: #CD853F;
            border: 1px solid #CD853F;
            color: white;
            padding: 10px 25px;
            border-radius: 7px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-editar:hover {
            background-color: #A65F28;
            border-color: #A65F28;
            color: white;
        }

        .btn-voltar {
            background-color: #765747;
            border: 1px solid #765747;
            color: white;
            padding: 10px 25px;
            border-radius: 7px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-voltar:hover {
            background-color: #5d473d;
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

            .container-form {
                margin: 30px 15px;
                padding: 25px 20px;
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

            .botoes {
                flex-direction: column;
            }

            .btn-editar,
            .btn-voltar {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>


<body>


    <!-- BARRA DE NAVEGAÇÃO -->

    <nav class="navbar navbar-expand-md navbar-dark cor_barra">

        <a href="../menu.php" class="navbar-brand ms-3">
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

        <div class="container-form">

            <h2>
                Edição de Categoria
            </h2>

            <hr class="linha">


            <form method="post"
                action="updateCategoria.php"
                enctype="multipart/form-data">


                <!-- ID -->

                <input type="hidden"
                    name="cat_id"
                    value="<?= $categoria['cat_id'] ?>">


                <!-- NOME -->

                <div class="grupo">

                    <label for="nome">
                        Nome
                    </label>

                    <input type="text"
                        id="nome"
                        name="cat_nome"
                        class="caixa"
                        value="<?= $categoria['cat_nome'] ?>">

                </div>


                <!-- BOTÕES -->

                <div class="botoes">

                    <button type="submit"
                        class="btn-editar">

                        EDITAR

                    </button>


                    <a href="../categoria/formCategoria.php"
                        class="btn-voltar">

                        Voltar

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


    <!-- Bootstrap JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>


</body>

</html>
```