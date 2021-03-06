<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
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

  <section>
      <h1 class="text-center"><strong>Quem somos?</strong></h1>
      <div style="margin-left: 50px;">
        <h2 style="color: red; margin-bottom: 50px;">Olá!</h2>
            <p class="paragrafo" style="font-size: 20px;">
                A DokiDoki Store é uma loja 100% virtual, com propósito de atender todos aqueles apaixonados pelo mundo geek <br>
                (filmes, séries, hq's, mangas, animes e jogos), tornando o hobby do colecionismo algo mais acessível onde crianças <br>
                e adultos possam dividir e desfrutar o mesmo Mundo.
            </p>

            <p class="paragrafo" style="font-size: 20px; margin-bottom: 100px;">
                Desenvolvido por 9 estudantes apaixonados pelo Mundo geek e dispostos a inovar no e-commerce, A DokiDoki Store <br>
                de uma visão compartilhada, de que há uma grande quantidade de amantes e interessados pelo mundo geek, que precisavam de <br>
                uma loja confiável e segura, com um grande catálago de produtos de altíssima qualidade, e formada por pessoas que <br>
                compartilham da mesma paixão de seus clientes e que entenda suas necessidades.
            </p>
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