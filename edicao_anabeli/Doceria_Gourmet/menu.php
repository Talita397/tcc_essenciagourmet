<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Espaço Administrador - Essência Gourmet</title>


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


        /* ÁREA DO ADMINISTRADOR */

        .caixa {
            max-width: 1000px;
            margin: 45px auto;
            padding: 35px 25px;
            text-align: center;
            background-color: #fffdf9;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(93, 71, 61, 0.15);
        }


        /* TÍTULO */

        .titulo {
            color: #5d473d;
            font-size: 30px;
            margin-bottom: 10px;
        }


        /* CARDS DO MENU */

        .opcao {
            display: block;
            height: 100%;
            padding: 20px 10px;
            text-decoration: none;
            color: #5d473d;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .opcao:hover {
            transform: translateY(-5px);
            background-color: #fff8ed;
            box-shadow: 0 5px 15px rgba(93, 71, 61, 0.15);
        }


        /* IMAGENS */

        .opcao img {
            width: 120px;
            height: 120px;
            object-fit: contain;
            border: 3px solid #d5ae46;
            border-radius: 50%;
            padding: 5px;
            background-color: #fffdf9;
            transition: transform 0.3s;
        }

        .opcao:hover img {
            transform: scale(1.05);
        }


        /* TEXTO DAS OPÇÕES */

        .p1 {
            color: #765747;
            margin: 18px 5px 5px;
            font-size: 17px;
            font-weight: bold;
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

            .caixa {
                margin: 30px 15px;
                padding: 25px 15px;
            }

            .titulo {
                font-size: 27px;
            }

            .opcao img {
                width: 110px;
                height: 110px;
            }

            .p1 {
                font-size: 16px;
            }

        }


        @media (max-width: 480px) {

            .navbar-brand {
                font-size: 17px;
            }

            .caixa {
                margin: 20px 10px;
                padding: 20px 10px;
            }

            .titulo {
                font-size: 24px;
            }

            .opcao img {
                width: 100px;
                height: 100px;
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


        

    </nav>


    <!-- ÁREA DO ADMINISTRADOR -->

    <main>

        <div class="caixa">

            <div class="container">

                <h2 class="titulo">
                    Espaço Administrador
                </h2>


                <hr style="width: 200px; margin: 10px auto 30px; border: 0; border-top: 2px solid #d5ae46; opacity: 1;">


                <div class="row g-4">


                    <!-- CADASTRAR PRODUTOS -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="produto/formProduto.php"
                            class="opcao">

                            <img src="https://img.icons8.com/fluent-systems-regular/1200/signing-a-document.jpg"
                                alt="Cadastrar Produtos">

                            <p class="p1">
                                Cadastrar Produtos
                            </p>

                        </a>

                    </div>


                    <!-- CADASTRAR CATEGORIAS -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="categoria/formCategoria.php"
                            class="opcao">

                            <img src="https://cdn-icons-png.flaticon.com/512/7538/7538677.png"
                                alt="Cadastrar Categorias">

                            <p class="p1">
                                Cadastrar Categorias
                            </p>

                        </a>

                    </div>


                    <!-- CADASTRAR ADMINISTRADOR -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="administrador/formAdm.php"
                            class="opcao">

                            <img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png"
                                alt="Cadastrar Administrador">

                            <p class="p1">
                                Cadastrar Administrador
                            </p>

                        </a>

                    </div>


                    <!-- CADASTRAR GALERIA -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="galeria/formGaleria.php"
                            class="opcao">

                            <img src="https://img.icons8.com/p1em/1200/gallery.jpg"
                                alt="Cadastrar Galeria">

                            <p class="p1">
                                Cadastrar Galeria
                            </p>

                        </a>

                    </div>


                    <!-- CONSULTA DE PRODUTOS -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="produto/consultaProduto.php"
                            class="opcao">

                            <img src="https://cdn-icons-png.flaticon.com/512/12578/12578258.png"
                                alt="Consulta de Produtos">

                            <p class="p1">
                                Consulta de Produtos
                            </p>

                        </a>

                    </div>


                    <!-- CONSULTA DE GALERIA -->

                    <div class="col-lg-3 col-md-6 col-sm-12">

                        <a href="galeria/consultaGaleria.php"
                            class="opcao">

                            <img src="https://cdn-icons-png.flaticon.com/512/12578/12578258.png"
                                alt="Consulta de Galeria">

                            <p class="p1">
                                Consulta de Galeria
                            </p>

                        </a>

                    </div>


                </div>

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
