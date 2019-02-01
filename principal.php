<?php 
    require_once 'classes/Produto.php';
    
    $martelo = new Produto;

    $martelo->nome = "Martelo Phillips";
    $martelo->quantEstoque = 50;

    $martelo->imprimeDados();
?>