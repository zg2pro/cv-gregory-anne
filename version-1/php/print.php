<?php

require_once('mycvhtml.php.inc');
require_once('headers.strings.php');
require_once('header.php');

$content = "<style>".file_get_contents("../css/bootstrap.css").
        file_get_contents("../css/mycv.css").
        file_get_contents("../css/pdf.css")."</style>";
$content .= writeHeader($ext_string, $hl, true);

//$content .= mycvHtml($hl, $titles);

/*
  $content = "
  <page>
  <h1>Exemple d'utilisation</h1>
  <br>
  Ceci est un <b>exemple d'utilisation</b>
  de <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
  </page>";
 */

require_once('html2pdf-4.5.1/vendor/autoload.php');
require_once('html2pdf-4.5.1/html2pdf.class.php');
$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('mycv.pdf');
 
//echo $content;
?>
