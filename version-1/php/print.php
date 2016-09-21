<?php

require_once('mycvhtml.php.inc');
require_once('headers.strings.php');
require_once('header.php.inc');

$content = "<style>" . file_get_contents("../css/bootstrap.css") .
        file_get_contents("../css/mycv.css") .
        file_get_contents("../css/pdf.css") . "</style>";
$content .= writeHeader($ext_string, $hl, true);

$experiences = $_GET["experience"];


$xml_text = file_get_contents("xml/experience.xml");
$tags = textTags();

foreach ($tags as $tagname) {
    //ajout des CDATA
    $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
    $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
}

$xml = new DOMDocument();
$xml->loadXML($xml_text);

$xpath = new DOMXpath($xml);
$result = $xpath->query("/experience/item");

for ($x = 0; $x < $result->length; $x++) {
    if (!in_array($x, $experiences)) {
        $node2 = $result->item($x);
        $xml->documentElement->removeChild($node2);
    }
}


$xsl = new DOMDocument();
$xsl->substituteEntities = true;
$xsl->load("../xsl/mycv/experience.xsl");

$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl);

$proc->setParameter('', 'hl', $hl);

$finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));
echo $finalContent;

//require_once('html2pdf-4.5.1/vendor/autoload.php');
//require_once('html2pdf-4.5.1/html2pdf.class.php');
//$html2pdf = new HTML2PDF('P', 'A4', 'fr');
//$html2pdf->WriteHTML($content);
//$html2pdf->Output('mycv.pdf');
?>
