<?php

require_once("text-tags.php.inc");

function mycvHtml($hl, $titles) {

    $finalContent = "";

    foreach ($titles as $ind => $val) {

        $file_name = "xml/$val.xml";

        $xml_text = file_get_contents($file_name);

        $tags = textTags();

        foreach ($tags as $tagname) {

            //ajout des CDATA
            $xml_text2 = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text2);
        }
        //print_r($xml_text); 

        $xml = new DOMDocument;
        $xml->loadXML($xml_text);

        $xsl = new DOMDocument;
        $xsl->substituteEntities = true;
        $xsl->load('../xsl/mycv/' . $val . '.xsl');

        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        $proc->setParameter('', 'hl', $hl);

        $finalContent .= "<a name='" . $val . "'></a>";
        $finalContent .= trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));
    }
    return $finalContent;
}

?>