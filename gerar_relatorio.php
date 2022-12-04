<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require_once __DIR__.'/bibliotecas/dompdf/autoload.inc.php';

//Instanciar a classe
$options = new Options();
$dompdf = new Dompdf($options);

$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

ob_start();
require __DIR__.'/relatorio.php';
$dompdf->loadHtml(ob_get_clean());


$dompdf->render();

$dompdf->stream("relatorio.pdf", array('Attachment'=>false));
?>