<?php

    $idFamoso = $_GET['idFamoso'];

    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

    $result = $conn->exec("DELETE FROM famosos WHERE id = " . $idFamoso );
    
    $conn = null;

?>