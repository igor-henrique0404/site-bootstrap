<?php 

if(!$_SESSION['usuario']) {
    header('Location: painel.php');
    header('Location: perfil.php');
    header('Location: carrinho.php');
    exit();
}