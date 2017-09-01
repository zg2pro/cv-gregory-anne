<?php

require_once('print.php.inc');
require_once('html2pdf-4.5.1/vendor/autoload.php');
require_once('html2pdf-4.5.1/html2pdf.class.php');

$content .= printHtml($ext_string, $hl);

$html2pdf = new HTML2PDF();
$html2pdf->WriteHTML($content);
$html2pdf->Output('mycv.pdf');

?>
