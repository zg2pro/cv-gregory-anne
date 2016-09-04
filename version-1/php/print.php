<?php

require_once('mycvhtml.php.inc');
require_once('headers.strings.php');
require_once('header.php');


$content = writeHeader($ext_string, $hl);

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
$html2pdf->Output('exemple.pdf');
?>
