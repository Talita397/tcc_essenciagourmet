<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
            color: #4d403a;
            background-color: #fffaf7;
        }

        h2 {
            color: #5d473d;
            margin-bottom: 15px;
        }

        h4 {
            color: #5d473d;
            margin-top: 25px;
            font-size: 20px;
        }

        /* CABEÇALHO */
        header {
            padding: 15px;
        }

        /* LINKS DO CABEÇALHO */
        .links {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-right: 40px;
            margin-top: -25px;
        }

        .links a {
            color: #765747;
            text-decoration: underline;
            transition: 0.3s;
        }

        .links a:hover {
            color: #765747;
        }

        /* CONTEÚDO */
        main {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 25px 20px;
        }

        hr {
            border: 0;
            border-top: 1px solid #d8c8c0;
            margin-bottom: 25px;
        }

        main p {
            line-height: 1.7;
            font-size: 15px;
            margin-bottom: 20px;
        }

        /* RODAPÉ */
        footer {
            background-color: #765747;
            color: white;
            margin-top: 40px;
            padding: 25px 20px;

            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            gap: 30px;

            text-align: center;
            font-size: 12px;
            line-height: 1.7;
        }

        footer div {
            flex: 1;
            min-width: 180px;
        }

        footer b {
            display: inline-block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        footer a:hover {
            color: #ead9cf;
            text-decoration: underline;
        }

        /* RESPONSIVO */
        @media (max-width: 700px) {

            h2 {
                font-size: 24px;
            }

            .links {
                justify-content: center;
                flex-wrap: wrap;
                margin: 10px 0 20px;
                gap: 15px;
            }

            main {
                padding: 0 18px 20px;
            }

            main p {
                font-size: 14px;
                text-align: justify;
            }

            footer {
                flex-direction: column;
                align-items: center;
                gap: 20px;
                padding: 25px 15px;
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

    <h2>Sobre nós</h2>

    <div class="links">
        <a href="telaprincipal.php">Voltar</a>
        <a href="faleconosco.php">Fale Conosco</a>
    </div>

</header>



<!-- CONTEÚDO -->
<main>

    <hr>

    <p>
        A Essência Gourmet surgiu do desejo de criar um espaço
        especial para divulgar doces artesanais e gourmet, valorizando
        cada detalhe, sabor e experiência oferecida aos nossos clientes.
    </p>

    <p>
        Com o crescimento da tecnologia e das redes digitais, percebemos
        a importância de ter um espaço online onde as pessoas pudessem
        conhecer melhor a doceria, visualizar nossos produtos e descobrir
        novidades de forma simples e agradável.
        <br>
        Assim nasceu a proposta de criar um site dedicado à divulgação da
        Essência Gourmet, reunindo informações sobre nossos doces, produtos
        em destaque, novidades e outras informações importantes.
    </p>

    <h4>Nossa Essência</h4>

    <p>
        Acreditamos que cada doce pode proporcionar um momento especial.
        Por isso, buscamos apresentar nossos produtos de maneira atrativa,
        valorizando a qualidade, a criatividade e o carinho presentes em
        cada escolha.
        <br>
        Nosso objetivo é aproximar a doceria dos clientes, facilitar o acesso
        às informações e tornar a experiência de conhecer a Essência Gourmet
        ainda mais doce e especial.
    </p>

</main>


<!-- RODAPÉ -->
<footer>

    <div>
        <b>REDES E CONTATOS</b><br>
        essenciagourmet.com.br<br>
        WhatsApp: (12) 97823-1624 | 3061-0192
    </div>


    <div>
        <b>Formas de pagamento</b><br>
        Dinheiro / Cartão de débito<br>
        Cartão de crédito / Pix
    </div>

    <div>
        <b>ACOMPANHE</b><br>
        @essenciagourmet_<br>
      
    </div>

</footer>


<!-- Bootstrap - JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/lW8vCWPIPm49"
    crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>
</html>
