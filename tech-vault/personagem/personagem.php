<?php

  require_once '../bd/ConexaoBD.php';

  $conexao = new ConexaoBD();

  if ($_REQUEST['acao'] == 'adicionar') {
    adicionar($conexao);
  } else if ($_REQUEST['acao'] == 'excluir') {
     excluir($conexao);
  }

  function adicionar($conexao){
    $idGame = $_POST['idGame'];
    $nome = $_POST['nome'];
    $conexao->executar("INSERT INTO personagem (id_game, name) VALUES ('". $idGame ."','". $nome ."')");

    $conexao = null;
    
    header("Location: http://localhost:82/tarefasphp/tech-vault/personagem/listarPersonagens.php");
  }

  function excluir($conexao){
    $idPersonagem = $_GET['id'];

    $conexao->executar("DELETE FROM personagem WHERE id = " . $idPersonagem);
    $conexao = null;

    header("Location: http://localhost:82/tarefasphp/tech-vault/personagem/listarPersonagens.php");
  }
?>