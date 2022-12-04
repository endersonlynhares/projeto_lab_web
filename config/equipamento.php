<?php
function cadastrarEquipamento($con, $nome, $marca, $modelo, $cor, $cliente)
{
    $sql = "INSERT INTO equipamento (equipamento, marca, modelo, cor, cod_cliente ) 
        VALUES (?, ?, ?, ?, ?)";
    $stmt = $con -> prepare($sql);
    $stmt -> bind_param('ssssi', $nome, $marca, $modelo, $cor, $cliente);

    return $stmt->execute();
}

function consultarEquipamento($con)
{
    $sql = "SELECT * FROM equipamento";
    $stmt = $con -> prepare($sql);
    return $stmt->execute();
}
