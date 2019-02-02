<?php

  require_once '../bd/ConexaoBD.php';

  $conexao = new ConexaoBD();

  if ($_REQUEST['acao'] == 'adicionar') {
    adicionar($conexao);
  } else if ($_REQUEST['acao'] == 'excluir') {
     excluir($conexao);
  }

  function adicionar($conexao){
    $name = $_POST['nome'];
    $conexao->executar("INSERT INTO game (name, path_header) VALUES ('". $name ."','abc')");
    $conexao = null;
    
    header("Location: http://localhost:82/tarefasphp/tech-vault/game/listarGames.php");
  }

  function excluir($conexao){
    $idJogo = $_GET['id'];

    $conexao->executar("DELETE FROM game WHERE id = " . $idJogo);
    $conexao = null;

    header("Location: http://localhost:82/tarefasphp/tech-vault/game/listarGames.php");
  }
?>