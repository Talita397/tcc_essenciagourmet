<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essência Gourmet</title>
</head>
<body>
<meta charset="utf-8">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!--JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </script>


    <style>
        body {
            margin: 0;
            background-color: #fff8ed;
            font-family: Georgia, serif;
            color: #5d473d;
        }
        .logo{
            width: 150px;
        }

        /* CABEÇALHO */
        header {
            text-align: center;
            padding: 10px;
            border-bottom: 2px solid #806456;
        }

        header img {
            width: 120px;
        }

        .links {
            text-align: right;
            margin-right: 40px;
            margin-top: -25px;
        }

        .links a {
            color: #5d473d;
            margin-left: 15px;
            text-decoration: underline;
        }

        /* MENU */
        nav {
            text-align: center;
            padding: 18px;
        }

        nav a {
            color: #5d473d;
            font-size: 23px;
            margin: 0 10px;
            text-decoration: underline;
        }

        /* BANNER */
        .banner img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }

        .favoritos {
    text-align: center;
    padding: 30px 10px;
}

.favoritos h2 {
    font-size: 26px;
    font-weight: normal;
    text-decoration: underline;
    margin-bottom: 25px;
}

.produtos {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 45px;
    padding: 10px;
    flex-wrap: wrap;
}

.produtos a {
    text-decoration: none;
    color: #5d473d;
    text-align: center;
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
    transform: scale(1.08);
}

.produtos p {
    margin-top: 10px;
    font-size: 17px;
    font-weight: bold;
}

        /* RODAPÉ */
        footer {
            background-color: #765747;
            color: white;
            margin-top: 40px;
            padding: 15px;
            display: flex;
            justify-content: space-around;
            text-align: center;
            font-size: 12px;
        }

        footer a {
            color: white;
        } 
        .carousel-inner {
      height: 450px;
    }
    </style>
</head>

<body>

    <!-- CABEÇALHO -->
    <header>
    <div class="container-fluid">
        <header id="cabecalho"
        class="row justify-content-center">
       
        <img class="logo" src="img/logo.jpg" alt="Essência Gourmet">
        <p> Essência Gourmet </p>

        
        <div class="links">
            <a href="sobre.php">Sobre Nós</a>
            <a href="faleconosco.php">Fale Conosco</a>
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
    
    <h1 class="display-3"></h1>
  <div class="container mb-4"> <!-- sem fluid margem/espaço na pagina-->
    <div class="col-12"> <!--tamanho (largura) do carrossel-->
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

        <!--indicadores opcional -->
        <div class="carousel-indicators">
          <button class="active" type="button" 
           data-bs-target="#carouselExample" 
           data-bs-slide-to="0"
           aria-current="true" 
           aria-label="slide1">
          </button>
          <button type="button" 
            data-bs-target="#carouselExample" 
            data-bs-slide-to="1" 
            aria-current="true"
            aria-label="slide2">
          </button>
          <button type="button" 
            data-bs-target="#carouselExample"
             data-bs-slide-to="2" 
             aria-current="true"
            aria-label="slide3">
          </button>
          <button type="button" 
            data-bs-target="#carouselExample"
             data-bs-slide-to="3" 
             aria-current="true"
            aria-label="slide4">
          </button>
        </div>
      

       <!--carrega as imagens no carrossel-->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carrosel1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/torta1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/carrosel2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/Doce3.jpg" class="d-block w-100">
          </div>
        </div>

        <!--botões Anterior e Próximo -->
        <button class="carousel-control-prev"
           type="button" 
           data-bs-target="#carouselExample" 
           data-bs-slide="prev">
          <span class="carousel-control-prev-icon" 
           aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" 
          type="button" 
          data-bs-target="#carouselExample" 
          data-bs-slide="next">
          <span class="carousel-control-next-icon"
           aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      
      </div>
    </div>
  </div>
</body>

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

</body>

</html>