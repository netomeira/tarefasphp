<?php 
    require_once 'classes/Produto.php';
    
    $martelo = new Produto("Martelo Phillips", 500);

    $martelo->imprimeDados();
?>