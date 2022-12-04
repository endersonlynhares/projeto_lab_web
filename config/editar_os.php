<?php

 require_once "conexao.php";

 $cod = (int) $_POST['cod'];
 $status = $_POST['status'][0];
 $orcamento = $_POST['orcamento_os'];
 $sql = "UPDATE os SET `status` = ?, `orcamento`= ? WHERE cod_OS = ?" ;
 $stmt = $con -> prepare($sql);
 $stmt -> bind_param('ssi', $status, $orcamento, $cod);

 if($stmt -> execute()){
  header('Location: ../servicos_con.php');
 }else{
   echo "Erro em algo";
 }

?>