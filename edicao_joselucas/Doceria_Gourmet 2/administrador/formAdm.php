<?php
include "../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro do Administrador - Essência Gourmet</title>

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


        /* TABELA */

        .tabela-container {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .tabela-titulo {
            text-align: center;
            color: #5d473d;
            margin-bottom: 20px;
            font-size: 26px;
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

            .tabela-container {
                margin-left: 10px;
                margin-right: 10px;
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

            .tabela-titulo {
                font-size: 22px;
            }

        }

    </style>

</head>


<body>


    <!-- BARRA DE NAVEGAÇÃO -->

    <nav class="navbar navbar-expand-md navbar-dark cor_barra">

        <!-- Nome -->

        <a href="index.html" class="navbar-brand ms-3">
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

                <img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png"
                    alt="Voltar ao menu">

            </a>


            <!-- TÍTULO -->

            <h2>
                Cadastro Administrador
            </h2>


            <!-- FORMULÁRIO -->

            <form method="post"
                action="insertAdm.php"
                enctype="multipart/form-data"
                class="row g-3">


                <!-- NOME -->

                <div class="col-12">

                    <label for="nome" class="form-label">
                        Nome
                    </label>

                    <input type="text"
                        class="form-control"
                        id="nome"
                        name="adm_nome"
                        placeholder="Nome do administrador"
                        required>

                </div>


                <!-- SENHA -->

                <div class="col-12">

                    <label for="senha" class="form-label">
                        Senha
                    </label>

                    <input type="password"
                        class="form-control"
                        id="senha"
                        name="adm_senha"
                        placeholder="Insira sua senha"
                        required>

                </div>


                <!-- EMAIL -->

                <div class="col-12">

                    <label for="email" class="form-label">
                        E-mail
                    </label>

                    <input type="email"
                        class="form-control"
                        id="email"
                        name="adm_email"
                        placeholder="Insira seu e-mail"
                        required>

                </div>


                <!-- CPF -->

                <div class="col-12">

                    <label for="cpf" class="form-label">
                        CPF
                    </label>

                    <input type="text"
                        class="form-control"
                        id="cpf"
                        name="adm_cpf"
                        placeholder="Insira seu CPF"
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


        <!-- TABELA -->

        <div class="container tabela-container">


            <h3 class="tabela-titulo">
                Administradores cadastrados
            </h3>


            <div class="table-responsive">

                <table class="table table-bordered table-striped table-hover text-center align-middle">

                    <!-- CABEÇALHO -->

                    <thead>

                        <tr>

                            <th>Nome</th>

                            <th>Senha</th>

                            <th>E-mail</th>

                            <th>CPF</th>

                            <th>Ações</th>

                        </tr>

                    </thead>


                    <!-- CORPO -->

                    <tbody>

                        <?php

                        $sql = "SELECT * FROM administrador";

                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {

                            $adm_id = $row['adm_id'];

                            echo "

                            <tr>

                                <td>{$row['adm_nome']}</td>

                                <td>{$row['adm_senha']}</td>

                                <td>{$row['adm_email']}</td>

                                <td>{$row['adm_cpf']}</td>

                                <td>

                                    <a href='editarformAdm.php?adm_id=$adm_id'
                                        class='btn btn-editar btn-sm'>

                                        Editar

                                    </a>

                                    <a href='deleteAdm.php?adm_id=$adm_id'
                                        class='btn btn-excluir btn-sm'
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
