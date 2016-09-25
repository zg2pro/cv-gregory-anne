<?php

require_once('mycvhtml.php.inc');
require_once('headers.strings.php');
require_once('header.php.inc');

function printExperience($hl) {
    $content = "";

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
    $xsl->load("../xsl/pdf/experience.xsl");

    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);

    $proc->setParameter('', 'hl', $hl);

    $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));

    if ($hl == "en") {
        $content .= "<ul class='breadcrumb'><li class='active'><h2>PROFESSIONAL EXPERIENCE</h2></li></ul>";
    } else if ($hl == "fr") {
        $content .= "<ul class='breadcrumb'><li class='active'><h2>EXPERIENCES PROFESSIONNELLES</h2></li></ul>";
    }

    $content .= $finalContent;
    return $content;
}

function printEducation($hl) {
    $content = "";

    $experiences = $_GET["education"];


    $xml_text = file_get_contents("xml/education.xml");
    $tags = textTags();

    foreach ($tags as $tagname) {
        //ajout des CDATA
        $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
        $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
    }

    $xml = new DOMDocument();
    $xml->loadXML($xml_text);

    $xpath = new DOMXpath($xml);
    $result = $xpath->query("/education/item");

    for ($x = 0; $x < $result->length; $x++) {
        if (!in_array($x, $experiences)) {
            $node2 = $result->item($x);
            $xml->documentElement->removeChild($node2);
        }
    }


    $xsl = new DOMDocument();
    $xsl->substituteEntities = true;
    $xsl->load("../xsl/mycv/education.xsl");

    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);

    $proc->setParameter('', 'hl', $hl);

    $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));

    $content .= $finalContent;
    return $content;
}

function printHtml($ext_string, $hl) {

    $content = '<page backtop="2mm" backbottom="2mm" backleft="3mm" backright="3mm">'
            . "<style>" . file_get_contents("../css/bootstrap.css") .
            file_get_contents("../css/mycv.css") .
            file_get_contents("../css/pdf.css") . "</style>";

    $content .= writeHeader($ext_string, $hl, true);

    $experience = printExperience($hl);
    $education = printEducation($hl);


    $content .= $experience . $education;

    $content .= "</page>";

    return $content;
}

?>
