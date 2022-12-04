<?php
    $server = "localhost";
    $user = "root";
    $senha = "";
    $banco_de_dados = "sistema_os";

    $con = mysqli_connect($server, $user, $senha, $banco_de_dados) or
    die("Erro ao se conectar com o banco de dados");

?>