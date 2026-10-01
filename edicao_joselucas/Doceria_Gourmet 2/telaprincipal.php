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

        /* LOGO */
        .logo {
            width: 150px;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.03);
        }


        /* CABEÇALHO */
        header {
            text-align: center;
            padding: 15px 10px;
            border-bottom: 2px solid #806456;
            background-color: #fffaf3;
        }

        header img {
            width: 120px;
        }

        header p {
            margin: 8px 0 0;
            font-size: 22px;
            font-weight: bold;
            color: #765747;
        }


        /* LINKS */
        .links {
            text-align: right;
            margin-right: 40px;
            margin-top: -30px;
        }

        .links a {
            color: #5d473d;
            margin-left: 15px;
            text-decoration: none;
            font-size: 15px;
            transition: 0.3s;
        }

        .links a:hover {
            color: #b58a3a;
            text-decoration: underline;
        }


        /* MENU */
        nav {
            text-align: center;
            padding: 20px 10px;
            background-color: #fff8ed;
        }

        nav a {
            color: #5d473d;
            font-size: 23px;
            margin: 0 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        nav a:hover {
            color: #b58a3a;
        }


        /* BANNER */
        .banner {
            padding: 0 15px;
        }

        .banner .container {
            max-width: 1200px;
        }

        #carouselExampleAutoplaying {
            overflow: hidden;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(93, 71, 61, 0.25);
        }

        .carousel-inner {
            height: 450px;
        }

        .carousel-item {
            height: 450px;
        }

        .banner img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }


        /* INDICADORES DO CARROSSEL */
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
            border: 1px solid white;
        }


        /* BOTÕES DO CARROSSEL */
        .carousel-control-prev,
        .carousel-control-next {
            width: 9%;
            opacity: 0.75;
            transition: 0.3s;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
        }


        /* FAVORITOS */
        .favoritos {
            text-align: center;
            padding: 40px 10px;
        }

        .favoritos h2 {
            color: #5d473d;
            font-size: 28px;
            font-weight: normal;
            margin-bottom: 30px;
            display: inline-block;
            padding-bottom: 6px;
            border-bottom: 2px solid #d5ae46;
        }


        /* PRODUTOS */
        .produtos {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 35px;
            padding: 10px;
            flex-wrap: wrap;
        }

        .produtos a {
            text-decoration: none;
            color: #5d473d;
            text-align: center;
            background-color: #fffdf9;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(93, 71, 61, 0.12);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .produtos a:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 18px rgba(93, 71, 61, 0.2);
        }

        .produtos img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #d5ae46;
            display: block;
            transition: transform 0.3s;
        }

        .produtos img:hover {
            transform: scale(1.05);
        }

        .produtos p {
            margin: 12px 0 2px;
            font-size: 17px;
            font-weight: bold;
        }


        /* RODAPÉ */
        footer {
            background-color: #765747;
            color: white;
            margin-top: 40px;
            padding: 30px 20px;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            gap: 25px;
            text-align: center;
            font-size: 12px;
            line-height: 1.7;
        }

        footer div {
            min-width: 180px;
        }

        footer b {
            color: #fff8ed;
            font-size: 14px;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        footer a:hover {
            color: #e4c98a;
            text-decoration: underline;
        }


        /* RESPONSIVIDADE */
        @media (max-width: 768px) {

            .logo {
                width: 130px;
            }

            header p {
                font-size: 20px;
            }

            .links {
                text-align: center;
                margin: 15px 0 5px;
            }

            .links a {
                margin: 0 8px;
            }

            nav {
                padding: 15px 5px;
            }

            nav a {
                font-size: 19px;
                margin: 0 4px;
            }

            .banner {
                padding: 0 10px;
            }

            .carousel-inner,
            .carousel-item,
            .banner img {
                height: 300px;
            }

            #carouselExampleAutoplaying {
                border-radius: 12px;
            }

            .favoritos {
                padding: 30px 10px;
            }

            .favoritos h2 {
                font-size: 25px;
            }

            .produtos {
                gap: 20px;
            }

            footer {
                flex-wrap: wrap;
                padding: 25px 15px;
            }

            footer div {
                min-width: 200px;
            }
        }


        @media (max-width: 480px) {

            .logo {
                width: 115px;
            }

            header p {
                font-size: 18px;
            }

            .links {
                margin-top: 12px;
            }

            .links a {
                font-size: 14px;
                margin: 0 5px;
            }

            nav a {
                font-size: 16px;
                margin: 0 2px;
            }

            .carousel-inner,
            .carousel-item,
            .banner img {
                height: 220px;
            }

            .produtos {
                gap: 15px;
            }

            .produtos a {
                padding: 12px;
            }

            .produtos img {
                width: 120px;
                height: 120px;
            }

            .produtos p {
                font-size: 15px;
            }

            footer {
                flex-direction: column;
                align-items: center;
            }

            footer div {
                width: 100%;
            }
        }

    </style>
</head>


<body>


    <!-- CABEÇALHO -->
    <header id="cabecalho">

        <div class="container-fluid">

            <img class="logo"
                src="img/logo.jpg"
                alt="Essência Gourmet">

            <p>Essência Gourmet</p>

            <div class="links">
                <a href="sobre.php">Sobre Nós</a>
                <a href="faleconosco.php">Fale Conosco</a>
            </div>

        </div>

    </header>


    <!-- MENU -->
    <nav>

        <a href="1cafe.php">Café</a> |
        <a href="2bolos.php">Bolos</a> |
        <a href="3tortas.php">Tortas</a> |
        <a href="4doces.php">Doces</a>

    </nav>


    <!-- BANNER -->
    <div class="banner">

        <div class="container mb-4">

            <div class="col-12">

                <div id="carouselExampleAutoplaying"
                    class="carousel slide"
                    data-bs-ride="carousel"
                    data-bs-interval="2000">


                    <!-- INDICADORES -->
                    <div class="carousel-indicators">

                        <button class="active"
                            type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide-to="0"
                            aria-current="true"
                            aria-label="Slide 1">
                        </button>

                        <button type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide-to="1"
                            aria-label="Slide 2">
                        </button>

                        <button type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide-to="2"
                            aria-label="Slide 3">
                        </button>

                        <button type="button"
                            data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide-to="3"
                            aria-label="Slide 4">
                        </button>

                    </div>


                    <!-- IMAGENS DO CARROSSEL -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="img/carrosel1.jpg"
                                class="d-block w-100"
                                alt="Essência Gourmet">
                        </div>

                        <div class="carousel-item">
                            <img src="img/torta1.jpg"
                                class="d-block w-100"
                                alt="Torta">
                        </div>

                        <div class="carousel-item">
                            <img src="img/carrosel2.jpg"
                                class="d-block w-100"
                                alt="Doces da Essência Gourmet">
                        </div>

                        <div class="carousel-item">
                            <img src="img/Doce3.jpg"
                                class="d-block w-100"
                                alt="Doce">
                        </div>

                    </div>


                    <!-- BOTÃO ANTERIOR -->
                    <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">

                        <span class="carousel-control-prev-icon"
                            aria-hidden="true">
                        </span>

                        <span class="visually-hidden">
                            Anterior
                        </span>

                    </button>


                    <!-- BOTÃO PRÓXIMO -->
                    <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">

                        <span class="carousel-control-next-icon"
                            aria-hidden="true">
                        </span>

                        <span class="visually-hidden">
                            Próximo
                        </span>

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- FAVORITOS -->
    <section class="favoritos">

        <h2>Nossos Favoritos</h2>

        <div class="produtos">

            <a href="produto1.php">
                <img src="img/Bolo4.jpg" alt="Produto 1">
                <p>Produto 1</p>
            </a>

            <a href="produto2.php">
                <img src="img/Doce3.jpg" alt="Produto 2">
                <p>Produto 2</p>
            </a>

            <a href="produto3.php">
                <img src="img/torta5.jpg" alt="Produto 3">
                <p>Produto 3</p>
            </a>

            <a href="produto4.php">
                <img src="img/cafe3.jpg" alt="Produto 4">
                <p>Produto 4</p>
            </a>

        </div>

    </section>


    <!-- RODAPÉ -->
    <footer>

        <div>
            <b>REDES E CONTATOS</b><br>
            essenciagourmet.com.br<br>
            WhatsApp: (12) 97823-1624 | 3061-0192
        </div>

        <div>
            <b>Envio</b><br>
            <a href="#">Política de Privacidade</a><br>
            <a href="#">Trocas e devoluções</a>
        </div>

        <div>
            <b>Formas de pagamento</b><br>
            Dinheiro / Cartão de débito<br>
            Cartão de crédito / Pix
        </div>

        <div>
            <b>ACOMPANHE</b><br>
            @essenciagourmet_<br>
            essencia_gourmet
        </div>

    </footer>


    <!-- Bootstrap - JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

</body>

</html>
