<?php
require "config/conexao.php";
require_once __DIR__ . '/bibliotecas/dompdf/autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="estilos/headers.css">
   <link rel="stylesheet" href="estilos/bootstrap-5.1.3-dist/css/bootstrap.min.css">
   <title>Relatório</title>
   <style>
      @page {
         margin: 70px 0px ;
      }

      body{
         margin: 0;
         padding: 0;
      }

      .header{
         text-align: center;
         position: fixed;
         top: -70px;
         left: 0;
         width: 100%;
         right: 0;
      }

      table{
         width: 100%;
         margin: 0;
         padding: 0;
         border: 1px solid black;
      }

      table, th, td{
         border: 1px solid black;
         border-collapse: collapse;
         text-align: center;
         padding: 20px;
      }
   </style>
</head>

<body>
   <div class="header">
      <img src="imgs/teste.png" height="40" alt="">
   </div>

   <table border="1" width="100%">
      <tr>
         <th>Codigo</th>
         <th>Status</th>
         <th>Orçamento</th>
      </tr>


      <?php
      $sql = "SELECT * FROM os";
      $ordens_servico = mysqli_query($con, $sql);
      if ($ordens_servico->num_rows) {
         while ($os = $ordens_servico->fetch_object()) {

      ?>

            <tr>
               <td><?php echo $os->cod_OS ?></td>
               <td><?php echo $os->status ?></td>
               <td><?php echo $os->orcamento ?></td>
            </tr>

      <?php
         }
      }
      ?>

   </table>
</body>

</html>