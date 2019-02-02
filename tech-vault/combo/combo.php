<?php

  require_once '../bd/ConexaoBD.php';

  $conexao = new ConexaoBD();

  if ($_REQUEST['acao'] == 'adicionar') {
    adicionar($conexao);
  } else if ($_REQUEST['acao'] == 'excluir') {
     excluir($conexao);
  }

  function adicionar($conexao){
    $idCharacter = $_POST['idPersonagem'];
    $description = $_POST['description'];
    $instructions = $_POST['instructions'];
    $dmgTotal = $_POST['dmgTotal'];
    $custo = $_POST['custo'];

    $conexao->executar("INSERT INTO combo (id_personagem, description, instructions, dmg_total, custo) VALUES ('.$idCharacter.','".$description."','".$instructions."','$dmgTotal','$custo')");
    $conexao = null;
    
    header("Location: http://localhost:82/tarefasphp/tech-vault/combo/listarCombos.php?idPersonagem=".$idCharacter);
  }

  function excluir($conexao){
    $idCombo = $_GET['id'];

    $conexao->executar("DELETE FROM combo WHERE id = " . $idCombo);
    $conexao = null;

    header("Location: http://localhost:82/tarefasphp/tech-vault/combo/listarCombos.php");
  }
?>