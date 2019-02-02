<?php

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $quant = $_POST["quant"];

    $conectou = mysqli_connect("localhost", "root", "", "cadastro");

    mysqli_query($conectou, "INSERT into livros (titulo, autor, quant) values ('${titulo}', '${autor}', ${quant})");

    mysqli_close($conectou);
?>