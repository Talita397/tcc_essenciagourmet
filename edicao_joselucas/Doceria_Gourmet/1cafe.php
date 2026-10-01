<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Essência Gourmet</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <style>

        * {
            box-sizing: border-box;
        }

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


        /* TÍTULO */

        h1 {
            font-family: Georgia, serif;
            text-align: center;
            color: #5d473d;
            font-size: 32px;
            margin-top: 25px;
        }

        hr {
            width: 200px;
            margin: 10px auto 30px;
            border: 0;
            border-top: 2px solid #d5ae46;
            opacity: 1;
        }


        /* CARDS */

        .card {
            height: 100%;
            color: #765747;
            border: 1px solid #e0c9ad;
            background-color: #fffdf9;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(93, 71, 61, 0.12);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 18px rgba(93, 71, 61, 0.2);
        }


        /* IMAGEM DOS CARDS */

        .card-img-top {
            height: 150px;
            width: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #d5ae46;
            display: block;
            margin: 20px auto 0;
        }


        /* CONTEÚDO DOS CARDS */

        .card-body {
            padding: 20px;
        }

        .card-title {
            color: #5d473d;
            font-weight: bold;
            font-size: 19px;
        }

        .card-text {
            font-size: 15px;
            line-height: 1.5;
        }


        /* BOTÃO */

        .btn-cafe {
            background-color: #765747;
            border-color: #765747;
            color: white;
            transition: 0.3s;
        }

        .btn-cafe:hover {
            background-color: #b58a3a;
            border-color: #b58a3a;
            color: white;
        }


        /* RODAPÉ */

        .rodape {
            background-color: #765747;
            color: white;
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
        }

        .rodape p {
            margin: 0;
        }
        


        /* RESPONSIVIDADE */

        @media (max-width: 768px) {

            h1 {
                font-size: 28px;
            }

            .card-img-top {
                height: 140px;
                width: 140px;
            }

        }


        @media (max-width: 480px) {

            h1 {
                font-size: 25px;
            }

            .card-img-top {
                height: 130px;
                width: 130px;
            }

            .card-title {
                font-size: 17px;
            }

            .card-text {
                font-size: 14px;
            }

        }

    </style>

</head>


<body>


    <!-- BARRA DE NAVEGAÇÃO -->

    <nav class="navbar navbar-expand-md navbar-dark cor_barra">

        <!-- Logo / Nome -->

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
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- Navegação -->

        <div class="collapse navbar-collapse" id="navegacao">

            <ul class="navbar-nav ms-auto me-3">

                <li class="nav-item">

                    <a href="telaprincipal.php"
                        class="nav-link text-white">

                        Voltar ao Menu

                    </a>

                </li>

            </ul>

        </div>

    </nav>


    <!-- TÍTULO -->

    <main>

        <h1>Cafés Gourmet</h1>

        <hr>


        <!-- CARDS -->

        <div class="container">

            <div class="row g-4">


                <!-- CARD 1 -->

                <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="card">

                        <img src="img/cafe1.jpg"
                            class="card-img-top img-fluid"
                            alt="Cesta de café gourmet">

                        <div class="card-body text-center">

                            <h5 class="card-title">
                                Cesta Café Especial
                            </h5>

                            <p class="card-text">
                                Cesta com café, pães, frutas e deliciosos acompanhamentos.
                            </p>

                            <a href="verCesta.html"
                                class="btn btn-cafe">

                                Ver Cesta

                            </a>

                        </div>

                    </div>

                </div>


                <!-- CARD 2 -->

                <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="card">

                        <img src="img/cafe2.jpg"
                            class="card-img-top img-fluid"
                            alt="Cesta de café da manhã">

                        <div class="card-body text-center">

                            <h5 class="card-title">
                                Cesta Café da Manhã
                            </h5>

                            <p class="card-text">
                                Uma combinação especial de cafés, doces e produtos selecionados.
                            </p>

                            <a href="verCesta.html"
                                class="btn btn-cafe">

                                Ver Cesta

                            </a>

                        </div>

                    </div>

                </div>


                <!-- CARD 3 -->

                <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="card">

                        <img src="img/cafe3.jpg"
                            class="card-img-top img-fluid"
                            alt="Cesta gourmet">

                        <div class="card-body text-center">

                            <h5 class="card-title">
                                Cesta Gourmet
                            </h5>

                            <p class="card-text">
                                Produtos gourmet selecionados para um café especial.
                            </p>

                            <a href="verCesta.html"
                                class="btn btn-cafe">

                                Ver Cesta

                            </a>

                        </div>

                    </div>

                </div>


                <!-- CARD 4 -->

                <div class="col-lg-3 col-md-6 col-sm-12">

                    <div class="card">

                        <img src="img/cafe5.jpg"
                            class="card-img-top img-fluid"
                            alt="Cesta especial de café">

                        <div class="card-body text-center">

                            <h5 class="card-title">
                                Cesta Premium
                            </h5>

                            <p class="card-text">
                                Uma cesta completa para deixar seu café ainda mais especial.
                            </p>

                            <a href="verCesta.html"
                                class="btn btn-cafe">

                                Ver Cesta

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>


    <!-- RODAPÉ -->

    
    <footer class="rodape">
        <div class="container py-4">
    
            <div class="row text-center">
                
                <div class="col-12 col-md-3 mb-3">
                    <b>HOTEL HORIZONTE</b><br>
                    Rua das Palmeiras, 250<br>
                    Lorena - SP
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <b>CONTATO</b><br>
    
                    <i class="bi bi-telephone-fill"></i>
                    (12) 97823-1624<br>
    
                    <i class="bi bi-envelope-fill"></i>
                    contato.horizontehtll@gmail.com
                </div>
    
                <div class="col-12 col-md-3 mb-3">
                    <b>REDES SOCIAIS</b><br>
    
                    <a href="#">
                        <i class="bi bi-instagram"></i>
                        @horizontehtll_
                    </a>
                    <br>
                    <a href="#">
                        <i class="bi bi-facebook"></i>
                        Hotel Horizonte
                    </a>
                </div>
    
                <div class="col-12 col-md-3 mb-3">
                    <b>HOTEL HORIZONTE</b><br>
                    © 2026 Hotel Horizonte<br>
                    Todos os direitos reservados.
                </div>
    
            </div>
    
        </div>
    </footer>


    <!-- Bootstrap - JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwxHj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

</body>

</html>
