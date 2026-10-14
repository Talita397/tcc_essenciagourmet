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

         /* Accordion */
       .accordion-item {
          border: 1px solid #e0c9ad;
          background-color: #fffdf9;
          border-radius: 5px;
          overflow: hidden;
       }

       .accordion-button {
          background-color: #ff7a75;
          color: #5d473d;
          font-family: Georgia, serif;
       }

       .accordion-button:not(.collapsed) {
          background-color: #ff9e85;
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

    <h1>Bolos Gourmet</h1>

<hr>

<br>

<!-- CARDS -->
<div class="container">
<div class="row">

<!-- CARD 1 -->
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">

    <div class="card">

        <img src="img/Bolo1.jpg"
            class="card-img-top img-fluid"
            alt="Bolo de brigadeiro com castanhas">

        <div class="card-body text-center">

            <h5 class="card-title">
                Bolo de brigadeiro com castanhas
            </h5>

            <p class="card-text">R$ 90,00</p>

            <!-- ACCORDION 1 -->
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

                            

                            <p><strong>Ingredientes:</strong></p>

                            <ul>
                                <li>Farinha de trigo</li>
                                <li>Ovos</li>
                                <li>Açúcar</li>
                                <li>Chocolate em pó</li>
                                <li>Leite</li>
                                <li>Manteiga</li>
                                <li>Leite condensado</li>
                                <li>Creme de leite</li>
                                <li>Chocolate granulado</li>
                                <li>Castanhas trituradas</li>
                            </ul>

                            <p>
                                Bolo macio de chocolate com recheio
                                cremoso de brigadeiro e castanhas crocantes!
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- CARD 2 -->
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">

    <div class="card">

        <img src="img/Bolo13.jpg"
            class="card-img-top img-fluid"
            alt="Bolo de laranja com cobertura">

        <div class="card-body text-center">

            <h5 class="card-title">
                Bolo de laranja com cobertura
            </h5>

           

            <p class="card-text">R$ 100,00</p>

            <!-- ACCORDION 2 -->
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

                          

                            <p><strong>Ingredientes:</strong></p>

                            <ul>
                                <li>Farinha de trigo</li>
                                <li>Ovos</li>
                                <li>Açúcar</li>
                                <li>Suco de laranja natural</li>
                                <li>Raspas de laranja</li>
                                <li>Óleo</li>
                                <li>Fermento em pó</li>
                                <li>Leite condensado</li>
                                <li>Creme de leite</li>
                                <li>Calda de laranja</li>
                            </ul>

                            <p>
                                Bolo fofinho e aromático, com sabor
                                de laranja e uma cobertura deliciosa!
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- CARD 3 -->
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">

    <div class="card">

        <img src="img/Bolo15.jpg"
            class="card-img-top img-fluid"
            alt="Bolo de doce de leite">

        <div class="card-body text-center">

            <h5 class="card-title">
                Bolo doce de leite
            </h5>

            <br>

            <p class="card-text">R$ 100,00</p>

            <!-- ACCORDION 3 -->
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

                         

                            <p><strong>Ingredientes:</strong></p>

                            <ul>
                                <li>Farinha de trigo</li>
                                <li>Ovos</li>
                                <li>Açúcar</li>
                                <li>Leite</li>
                                <li>Manteiga</li>
                                <li>Fermento em pó</li>
                                <li>Doce de leite cremoso</li>
                                <li>Leite condensado</li>
                                <li>Creme de leite</li>
                               
                            </ul>

                            <p>
                                Bolo macio com recheio de doce de leite,
                                perfeito para quem ama sabores tradicionais!
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- CARD 4 -->
<div class="col-lg-3 col-md-6 col-sm-12 mb-4">

    <div class="card">

        <img src="img/Bolo5.jpg"
            class="card-img-top img-fluid"
            alt="Bolo de chocolate">

        <div class="card-body text-center">

            <h5 class="card-title">
                Bolo de chocolate
            </h5>

            <br>

            <p class="card-text">R$ 110,00</p>

            <!-- ACCORDION 4 -->
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

                         

                            <p><strong>Ingredientes:</strong></p>

                            <ul>
                                <li>Farinha de trigo</li>
                                <li>Ovos</li>
                                <li>Açúcar</li>
                                <li>Chocolate em pó</li>
                                <li>Leite</li>
                                <li>Óleo</li>
                                <li>Fermento em pó</li>
                                <li>Leite condensado</li>
                                <li>Creme de leite</li>
                                <li>Chocolate meio amargo</li>
                                <li>Morango e brigadeiro</li>
                            </ul>

                            <p>
                                Bolo de chocolate com massa fofinha
                                e cobertura cremosa, ideal para
                                aniversários e ocasiões especiais!
                            </p>

                        </div>

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
