<?php
session_start();
include('verifica_login.php');
?>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ドキドキ DokiDoki Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <div id="logo_topo">
      <a href="index.html">
        <img class="mr-3" src="./img/logo.jpg" alt="Logo" style="width: 250px">
      </a>
    </div>

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/MenuNaruto.jpeg" class="d-block" alt="Menu Carousel" style="float: left; width: 50%; height: 500px;">
          <img src="img/Menu2.jpeg" class="d-block" alt="Menu Carousel" style="float: right; width: 50%; height: 225px;">
          <img src="img/Menu1.jpeg" class="d-block" alt="Menu Carousel" style="float: right; width: 50%; height: 275px;">
        </div>
        <div class="carousel-item">
          <img src="img/MenuBnh.jpeg" class="d-block" alt="Menu Carousel" style="width: 100%; height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="img/MenuOneP.jpeg" class="d-block" alt="Menu Carousel" style="width: 100%; height: 500px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--Nav-->
    <nav class="navbar navbar-light bg-dark my-4">
      <ul class="nav m-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" href="painel.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#produtos">Action Figure</a>
        </li>
        <!--   
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Combos</a>
        </li>
        -->
        <li class="nav-item">
          <a class="nav-link text-white" href="carrinho.php">Carrinho</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="sobre.php">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a href="perfil.php">
            <img id="icone_conta" src="img/Icone_Conta.png" alt="Icone Conta" style="width: 50px; margin-left: 10px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">Sair</a>
        </li>
      </ul>
    </nav>
  </header>

<h2 style="text-align: center">Olá, <?php echo $_SESSION['usuario'];?> seja bem-vindo a nossa loja, aproveite todas as ofertas exclusivas para você </h2>

  <section>
    <h2 class="text-center">Combo promoção</h2>
    <div>
      <a href="">
        <img src="img/Combo.jpeg" class="img-fluid" alt="..." style="width: 100%; height: 450px">
      </a>
    </div>
  </section>

  <section>
    <div class="container mb-5" id="produtos">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Produtos</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top" src="img/goku.jpg" alt="goku">
            <div class="card-body">
              <h5 class="card-title">Action Figure Dragon Ball, Goku Super Saiya, colecionável, 22cm.</h5>
              <p class="card-text">R$ 240,00</p>
              <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top" src="img/kakashi.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Action Figure Naruto, Hatake Kakashi, colecionável, 20cm.</h5>
              <p class="card-text">R$ 180,00</p>
              <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top" src="img/tanjiro.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Action Figure demon slayer, Tanjirou versão de combate, colecionável, 24cm.</h5>
              <p class="card-text">R$ 540,00</p>
              <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
            </div>
          </div>
        </div>
        <div class="my-3">
          <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/LEVI.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Action Figure Shigenki no Kyojin, Levi tropa de exploração, colecionável, 12cm.
                  </h5>
                  <p class="card-text">R$ 150,00</p>
                  <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/KIRITOO.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title descricao">Action Figure animeSword Art Online, Kirito, colecionável, 14cm.</h5>
                  <p class="card-text">R$ 120,00</p>
                  <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/hatsnuee.jpg" alt="Card image cap" >
                <div class="card-body">
                  <h5 class="card-title">Action Figure Vocaloid, Hatsune Miku, Colecionável, 23cm.</h5>
                  <p class="card-text">R$ 240,00</p>
                  <a href="#" class="btn btn-outline-primary" onclick="addCarrinho()">Comprar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <footer>
    <div class="container-fluid bg-dark">
      <div class="row">
        <div class="col-sm text-white mb-5" style="margin: 15px 5px;">
          A DokiDoki Store é uma loja virtual que oferece os melhores produtos <br>
          internacionais aos amantes de animes e mangás. Vendemos <br>
          para todo Brasil com atendimento de qualidade aos nossos clientes.
        </div>
        <div class="col-sm-2 text-white mb-5" style="margin: 10px">
          <h3>Categorias</h3>
          <p>Nossos produtos</p>
          <p>Novidades</p>
          <p>Combos</p>
          <p>Action Figures</p>
        </div>
        <div class="col-sm-2 text-white mb-5" style="margin: 10px">
          <h3>Informações</h3>
          <p>Perguntas frequentes</p>
          <p>Envio</p>
          <p>Sobre nós</p>
          <p>Termos de serviço</p>
        </div>
        <div class="col-sm-2 text-white mb-5" style="margin: 10px">
          <h3>Atendimento</h3>
          <p>(11) 98765-4321</p>
          <p>sac@dokidoki.com.br</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <img class="bandeiras" src="img/bandeira-dos-cartoes-de-credito.png" alt="Cartões">
          <img class="bandeiras" src="img/pix-106.png" alt="" style="width: 100px;">
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>