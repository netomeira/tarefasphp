<?php 

    require_once 'classes/Funcionario.php';
    require_once 'classes/Gerente.php';
    require_once 'classes/Programador.php';
    
    $funcionario;

    if ($_POST['tipo']=='G'){
        $funcionario = new Gerente();
        $funcionario->setNome($_POST['nome']);
        $funcionario->setSalario($_POST['salario']);
        $funcionario->setProjeto($_POST['projeto']);
    }
    
    if ($_POST['tipo']=='P'){
        $funcionario = new Programador();
        $funcionario->setNome($_POST['nome']);
        $funcionario->setSalario($_POST['salario']);
        $funcionario->setLinguagem($_POST['linguagem']);
    }

    $funcionario->relatorioFunc();
?>