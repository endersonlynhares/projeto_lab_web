<?php
    require_once "conexao.php";
    include "equipamento.php";
    include "ordem_servico.php";
    // include "ordem_servico.php";

    // Atributos do equipamento
    $nome = $_POST['nome'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $cliente = $_POST['cliente'];
    // Atributos da ordem de serviço
    $status = $_POST['status'];
    $diagnostico = $_POST['diagnostico'];
    $observacoes = $_POST['observacoes'];
    $tecnico = $_POST['tecnico'];
    echo $status[0];
    try{
        cadastrarEquipamento($con, $nome, $marca, $modelo, $cor, $cliente);
        try{
            $equipamento = $con->insert_id;
            if(cadastrarOS($con, $status[0], $diagnostico, $observacoes, $tecnico, $equipamento)){
                header('Location: ../cadastro_os.php?cadastro=sucesso');
            }else{
                header('Location: ../cadastro_os.php?cadastro=erro');
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
?>