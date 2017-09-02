<?php

require_once('print.php.inc');
require_once('vendor/autoload.php');
require_once('vendor/spipu/html2pdf/html2pdf.class.php');

$content .= printHtml($ext_string, $hl);

$html2pdf = new HTML2PDF();
$html2pdf->WriteHTML($content);
$html2pdf->Output('mycv.pdf');

?>
