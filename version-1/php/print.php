<?php

echo $_POST;

/*
  require_once('mycvhtml.php.inc');
  require_once('headers.strings.php');
  require_once('header.php.inc');

  $content = "<style>".file_get_contents("../css/bootstrap.css").
  file_get_contents("../css/mycv.css").
  file_get_contents("../css/pdf.css")."</style>";
  $content .= writeHeader($ext_string, $hl, true);


  require_once('html2pdf-4.5.1/vendor/autoload.php');
  require_once('html2pdf-4.5.1/html2pdf.class.php');
  $html2pdf = new HTML2PDF('P', 'A4', 'fr');
  $html2pdf->WriteHTML($content);
  $html2pdf->Output('mycv.pdf');
 */
?>
