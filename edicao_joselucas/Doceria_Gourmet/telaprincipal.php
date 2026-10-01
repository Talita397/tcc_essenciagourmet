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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
  <!-- icones do bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



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
        .nav {
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
    border: 2px solid #d5ae46;
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
                font-size: 12px;
                line-height: 1.7;
            }

            footer b {
                color: #fff8ed;
                font-size: 14px;
            }

            footer a {
                color: white;
                text-decoration: none;
            }

            footer a:hover {
                color: #e4c98a;
                text-decoration: underline;
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

        <a href="1cafe.php">Café</a> 
        <a href="2bolos.php">Bolos</a> 
        <a href="3tortas.php">Tortas</a> 
        <a href="4doces.php">Doces</a>

    </nav>


   <!-- Carrossel alimentado pelas 5 imagens mais recentes de fotos_livros -->
<?php if (count($imagensGaleria) > 0): ?>
<section class="container mt-4" aria-label="Destaques da galeria de livros">
    <div id="carouselGaleria" class="carousel slide carousel-fade shadow rounded overflow-hidden"
         data-bs-ride="carousel">

        <div class="carousel-indicators">
            <?php foreach ($imagensGaleria as $indice => $imagem): ?>
                <button type="button" data-bs-target="#carouselGaleria"
                        data-bs-slide-to="<?= $indice ?>"
                        class="<?= $indice === 0 ? 'active' : '' ?>"
                        aria-current="<?= $indice === 0 ? 'true' : 'false' ?>"
                        aria-label="Slide <?= $indice + 1 ?>"></button>
            <?php endforeach; ?>
        </div>

        <div class="carousel-inner">
            <?php foreach ($imagensGaleria as $indice => $imagem): ?>
                <div class="carousel-item <?= $indice === 0 ? 'active' : '' ?>" data-bs-interval="4000">
                    <img src="<?= htmlspecialchars($imagem['caminho_imagem']) ?>"
                         class="d-block w-100"
                         style="height: 420px; object-fit: cover;"
                         alt="<?= htmlspecialchars($imagem['legenda'] ?: $imagem['titulo_galeria']) ?>">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h5><?= htmlspecialchars($imagem['titulo_galeria']) ?></h5>
                        <?php if (!empty($imagem['legenda'])): ?>
                            <p><?= htmlspecialchars($imagem['legenda']) ?></p>
                        <?php elseif (!empty($imagem['descricao'])): ?>
                            <p><?= htmlspecialchars($imagem['descricao']) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>
<?php endif;

?>

<?php if (count($imagensGaleria) === 0): ?>
<div class="container mt-4">
    <div class="alert alert-info mb-0">
        Ainda não existem imagens cadastradas na galeria.
    </div>
</div>
<?php endif; ?>

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

</body>

</html>