<?php

    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

    $result = $conn->query("SELECT id, nome FROM famosos");

    if ($result){
        foreach($result as $row){
            echo $row['id'] . '-' . $row['nome'] . '-' . '<a href="exclui.php?idFamoso=' . $row['id'] . '">Excluir</a><br>';
        }
    }

    $conn = null;

?>