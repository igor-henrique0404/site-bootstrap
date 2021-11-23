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
    <link rel="stylesheet" href="css/carrinho.css">
</head>

<body>
    <header>
        <div id="logo_topo">
            <a href="index.html">
                <img class="mr-3" src="./img/logo.jpg" alt="Logo" style="width: 250px">
            </a>
        </div>
        <!--Nav-->
        <nav class="navbar navbar-light bg-dark my-4">
            <ul class="nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="painel.php">Home</a>
                </li>
                <!-- 
                <li class="nav-item">
                    <a class="nav-link text-white" href="#produtos">Action Figure</a>
                </li>
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
                        <img id="icone_conta" src="img/Icone_Conta.png" alt="Icone Conta"
                            style="width: 50px; margin-left: 10px;">
                    </a>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Sair</a>
                </li>
                </li>
            </ul>
        </nav>
    </header>
   
    <h2 style="text-align: center">Olá, <?php echo $_SESSION['usuario'];?> Boas compras! </h2>

    <div class="mainbody center-content">
        <h1>Carrinho de compras </h1>
        <table class="table cart-table" id="myTable">
        <tr> <th>Imagem</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Total</th>
        <th>Remove</th>
        </tr>
        <tr id="sweetRow">
        <td><img src="img/goku.jpg"></img></td>
        <td>Action Figure Dragon Ball, Goku Super Saiya, colecionável, 22cm.</td>
        <td>$240</td>
        <td><input class="qty-value" type="text" id="qtyitem1"  name="qtyitem1" value="0"></td>
        <td id="gokuAmount">$240</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('gokuRow');">X</button></td>
        </tr>
        <tr id="cakeRow">
        <td><img src="img/kakashi.jpg"></img></td>
        <td>Action Figure Naruto, Hatake Kakashi, colecionável, 20cm.</td>
        <td>$180</td>
        <td><input class="qty-value" type="text"  id="qtyitem2" name="qtyitem2" value="0"></td>
        <td id="kakashiAmount">$180</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('kakashiRow');">X</button></td>

        <tr id="sweetRow">
        <td><img src="img/tanjiro.jpg"></img></td>
        <td>Action Figure demon slayer, Tanjirou versão de combate, colecionável, 24cm.</td>
        <td>$540</td>
        <td><input class="qty-value" type="text" id="qtyitem3"  name="qtyitem3" value="0"></td>
        <td id="tanjiroAmount">$540</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('tanjitoRow');">X</button></td>
        </tr>
            

        <tr id="sweetRow">
        <td><img src="img/LEVI.jpg"></img></td>
        <td>Action Figure Shigenki no Kyojin, Levi tropa de exploração, colecionável, 12cm.</td>
        <td>$150</td>
        <td><input class="qty-value" type="text" id="qtyitem4"  name="qtyitem4" value="0"></td>
        <td id="leviAmount">$150</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('leviRow');">X</button></td>
        </tr>

        <tr id="sweetRow">
        <td><img src="img/KIRITOO.jpg"></img></td>
        <td>Action Figure animeSword Art Online, Kirito, colecionável, 14cm.</td>
        <td>$120</td>
        <td><input class="qty-value" type="text" id="qtyitem5"  name="qtyitem5" value="0"></td>
        <td id="kiritoAmount">$120</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('kiritoRow');">X</button></td>
        </tr>

        <tr id="sweetRow">
        <td><img src="img/hatsnuee.jpg"></img></td>
        <td>Action Figure Vocaloid, Hatsune Miku, Colecionável, 23cm.</td>
        <td>$240</td>
        <td><input class="qty-value" type="text" id="qtyitem6"  name="qtyitem6" value="0"></td>
        <td id="hatsuneAmount">$240</td>
        <td><button class="remove-item" type="button" onclick="return remove_item('hatsuneRow');">X</button></td>
        </tr>

        </tr>
    </table>

        </div>
        <div class="bigbottommenu container">
            <div class="row">
                <div class="minisidemenu col-4">
                    <button class="btn btn-outline-primary" type="button" onclick="return updateCart();">Atualizar carrinho </button>
                    
                </div>
                <div class="col-4"></div>
                <div class="billtotal col-4">
                    <H2>TOTAL</H2>
                   <table class="table cart-total-table" >
                       <tr>
                       <td>Subtotal</td>
                       <td id="subtotal">$0</td>
                       </tr>
                       
                       
                       <tr>
                       <td>Total</td>
                       <td id="totals">$0</td>
                       </tr>
                    </table>
                    <button class="btn btn-outline-primary" type="button">Finalizar a compra</button>
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