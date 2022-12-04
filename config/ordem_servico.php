<?php

    function cadastrarOS($con, $status, $diagnostico, $observacoes, $tecnico, $equipamento ){
        $sql = "INSERT INTO os (`status`, `diagnostico`, `observacoes`, `cod_tecnico`, `cod_equipamento`)
        VALUES ( ?, ?, ?, ?, ?)";        
        $stmt = $con -> prepare($sql);
        $stmt -> bind_param('sssii', $status, $diagnostico, $observacoes, $tecnico, $equipamento);
        return $stmt -> execute();
    }



?>