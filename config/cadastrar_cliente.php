<?php
    include_once "conexao.php";


    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cod_usuario = (int) $_POST['cod_usuario'];

    $sql = "INSERT INTO cliente (nome, rg, cpf, telefone, cod_usuario) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt-> bind_param('ssssi', $nome, $rg, $cpf, $telefone, $cod_usuario);


    if($stmt->execute()){
        header('Location: ../cadastro_cliente.php?cadastro=sucesso');
    }else{
        header('Location: ../cadastro_cliente.php?cadastro=erro');
    }

    
?>