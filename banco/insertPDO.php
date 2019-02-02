<?php

    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

    $conn->exec("INSERT INTO famosos (nome) VALUES ('Thyago Maia')");
    $conn = null;

?>