<?php
    require_once 'classes/Conta.php';
    require_once 'classes/ContaCorrente.php';
    require_once 'classes/ContaPoupanca.php';

    $corrente = new ContaCorrente(200.0);
    $poupanca = new ContaPoupanca(500.0);


    echo "Conta Corrente: " . $corrente->imprimeExtrato() . "<br>";
    $corrente->saca(100.0);
    echo "Conta Corrente: " . $corrente->imprimeExtrato() . "<br>";

    echo "Conta Poupanca: " . $poupanca->imprimeExtrato() . "<br>";
    $poupanca->saca(100.0);
    echo "Conta Poupanca: " . $poupanca->imprimeExtrato() . "<br>";
?>
