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

         /* Estilo do Accordion */
         .accordion-item {
            border: 1px solid #e0c9ad;
            background-color: #fffdf9;
            border-radius: 5px;
            overflow: hidden;
        }

        .accordion-button {
            background-color:rgb(222, 217, 216);
            color: #5d473d;
            font-family: Georgia, serif;
        }

        .accordion-button:not(.collapsed) {
            background-color:rgb(209, 174, 165);
            color: #5d473d;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 122, 117, 0.25);
        }

        .accordion-body {
            color: #5d473d;
            background-color: #fffdf9;
            font-size: 14px;
        }

        .accordion-body ul {
            padding-left: 20px;
        }

        .accordion-body li {
            margin-bottom: 5px;
        }

        .card-title {
            margin-top: 10px;
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


            footer {
                flex-wrap: wrap;
                padding: 25px 15px;
            }

            footer div {
                min-width: 200px;
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

    <h1>Café da Manhã</h1>

<hr>

<br>

<!-- CARDS DAS CESTAS -->
<main class="container">

    <div class="row">

        <!-- CARD 1: CESTA CAFÉ ESPECIAL -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">

            <div class="card">

                <img src="img/cafe1.jpg"
                    class="card-img-top img-fluid"
                    alt="Cesta de café gourmet">

                <div class="card-body text-center">

                    <h5 class="card-title">
                        Cesta Café Especial
                    </h5>

                    <p class="card-text">R$ 180,00</p>

                    <!-- VER CESTA 1 -->
                    <div class="accordion mt-3" id="accordion1">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingOne">

                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="false"
                                    aria-controls="collapseOne">

                                    Ver Cesta

                                </button>

                            </h2>

                            <div id="collapseOne"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingOne"
                                data-bs-parent="#accordion1">

                                <div class="accordion-body text-start">

                                   

                                    <p><strong>Ingredientes da cesta:</strong></p>

                                    <ul>
                                        <li>1 pacote de café gourmet</li>
                                        <li>1 pacote de biscoitos amanteigados</li>
                                        <li>1 geleia artesanal</li>
                                        <li>1 pote de manteiga</li>
                                        <li>1 bolo de chocolate</li>
                                        <li>1 pode de yogurte</li>
                                        <li>5 pães de queijo</li>
                                        <li>1 caneca decorativa</li>
                                    </ul>

                                    <p>
                                        Uma combinação especial de sabores
                                        para tornar seu café da manhã ainda
                                        mais elegante e inesquecível!
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- CARD 2: CESTA CAFÉ DA MANHÃ -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">

            <div class="card">

                <img src="img/cafe2.jpg"
                    class="card-img-top img-fluid"
                    alt="Cesta de café da manhã">

                <div class="card-body text-center">

                    <h5 class="card-title">
                        Cesta Café da Manhã
                    </h5>

                    <p class="card-text">R$ 190,00</p>

                    <!-- VER CESTA 2 -->
                    <div class="accordion mt-3" id="accordion2">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingTwo">

                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo">

                                    Ver Cesta

                                </button>

                            </h2>

                            <div id="collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordion2">

                                <div class="accordion-body text-start">

                                    

                                    <p><strong>Ingredientes da cesta:</strong></p>

                                    <ul>
                                        <li>4 croissants</li>
                                        <li>1 pacote de bolacha amantegada</li>
                                        <li>1 pacote de biscoitos doces</li>
                                        <li>1 geleia de morango</li>
                                        <li>1 suco de uva integral</li>
                                        <li>1 Guardanapos personalizados</li>
                                        <li>1 seleção de frutas frescas</li>
                                        <li>1 caixa de bombons</li>
                                    </ul>

                                    <p>
                                        Uma cesta deliciosa para começar
                                        o dia com carinho, sabor e alegria!
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- CARD 3: CESTA GOURMET -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">

            <div class="card">

                <img src="img/cafe3.jpg"
                    class="card-img-top img-fluid"
                    alt="Cesta gourmet com produtos especiais">

                <div class="card-body text-center">

                    <h5 class="card-title">
                        Cesta Gourmet
                    </h5>

                    <p class="card-text">R$ 190,00</p>

                    <!-- VER CESTA 3 -->
                    <div class="accordion mt-3" id="accordion3">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingThree">

                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree">

                                    Ver Cesta

                                </button>

                            </h2>

                            <div id="collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordion3">

                                <div class="accordion-body text-start">


                                    <p><strong>Ingredientes da cesta:</strong></p>

                                    <ul>
                                        <li>1 queijo tipo gouda</li>
                                        <li>1 salame italiano</li>
                                        <li>2 pacotes de biscoitos</li>
                                        <li>2 empadas</li>
                                        <li>1 pacote de castanhas e nozes</li>
                                        <li>1 chocolate artesanal</li>
                                        <li>1 pote de frutas frescas</li>
                                    </ul>

                                    <p>
                                        Uma seleção sofisticada de sabores,
                                        ideal para presentear e surpreender
                                        em momentos especiais!
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- CARD 4: CESTA PREMIUM -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">

            <div class="card">

                <img src="img/cafe5.jpg"
                    class="card-img-top img-fluid"
                    alt="Cesta premium de café da manhã">

                <div class="card-body text-center">

                    <h5 class="card-title">
                        Cesta Premium
                    </h5>

                    <p class="card-text">R$ 150,00</p>

                    <!-- VER CESTA 4 -->
                    <div class="accordion mt-3" id="accordion4">

                        <div class="accordion-item">

                            <h2 class="accordion-header" id="headingFour">

                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour">

                                    Ver Cesta

                                </button>

                            </h2>

                            <div id="collapseFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordion4">

                                <div class="accordion-body text-start">


                                    <p><strong>Ingredientes da cesta:</strong></p>

                                    <ul>
                                        <li>1 pacote de café especial</li>
                                        <li>1 pacote de bolachas ao leite</li>
                                        <li>1 pacote de cookies artesanais</li>
                                        <li>1 geleia de frutas vermelhas</li>
                                        <li>1 pacote de amêndoas</li>
                                        <li>1 bombom artesanal</li>
                                        <li>2 caneca para presente</li>
                                    </ul>

                                    <p>
                                        Uma cesta charmosa, com produtos
                                        selecionados para transformar
                                        qualquer ocasião em um momento especial!
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


<!-- RODAPÉ -->
<footer class="row g-0">

    <div class="col-12 rodape">
        <p class="mb-0">
            Essência Gourmet - Café da Manhã
        </p>
    </div>

</footer>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
