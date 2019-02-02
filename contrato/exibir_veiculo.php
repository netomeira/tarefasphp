<?php

    require_once 'classes/ICaracteristicas.php';
    require_once 'classes/Veiculo.php';
    require_once 'classes/Carro.php';
    require_once 'classes/Moto.php';

    $veiculo;

    if ($_POST['tipo'] == 'C'){
        $veiculo = new Carro($_POST['nome'],$_POST['marca'],$_POST['modelo']);
    }
    if ($_POST['tipo'] == 'M'){
        $veiculo = new Moto($_POST['nome'],$_POST['marca'],$_POST['modelo']);
    }

    $veiculo->exibeNome();
    $veiculo->exibeMarca();
    $veiculo->exibeModelo();

?>