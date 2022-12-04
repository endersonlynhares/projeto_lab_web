<?php
    include "conexao.php";
    echo json_encode($_POST['codigo']);
    $codigo = $_POST['codigo'];

    $sql = "DELETE FROM os WHERE cod_OS = ?" ;
    $stmt = $con -> prepare($sql);
    $stmt -> bind_param('i', $codigo);
    $stmt -> execute();
    sleep(1);
?>