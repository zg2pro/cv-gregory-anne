<?php

require_once("version-1/php/text-tags.php.inc");

function readXml($hl, $xml_file_name, $xsl_file_name) {

    $context = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
    $url = "version-1/" . $hl . "/xml/" . $xml_file_name;
    $xml_text = file_get_contents($url, false, $context);

    $tags = textTags();

    foreach ($tags as $tagname) {
        //ajout des CDATA
        $xml_text2 = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
        $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text2);
    }

    $xml = new DOMDocument;
    $xml->loadXML($xml_text);

    $xsl = new DOMDocument;
    $xsl->substituteEntities = true;
    $xsl->load($xsl_file_name);

    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);

    $proc->setParameter('', 'hl', $hl);

    $html = $proc->transformToXML($xml);
    $html2 = preg_replace('/<\?xml.*\?>/', '', $html, 1);
    $result = str_replace("../img", "version-1/img", $html2);
    $result = str_replace("../pdf", "version-1/pdf", $html2);
    return $result;
}

?>