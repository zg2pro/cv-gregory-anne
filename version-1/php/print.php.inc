<?php

require_once('mycvhtml.php.inc');
require_once('headers.strings.php');
require_once('header.php.inc');

function printExperience($hl) {
    $content = "";

    $experiences = $_GET["experience"];

    if ($experiences != null) {

        $xml_text = file_get_contents("xml/experience.xml");
        $tags = textTags();

        foreach ($tags as $tagname) {
            //ajout des CDATA
            $xml_text2 = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text2);
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
            $content .= "<ul class='cvnavitem'><li class='active'><h2>PROFESSIONAL EXPERIENCE</h2></li></ul>";
        } else if ($hl == "fr") {
            $content .= "<ul class='cvnavitem'><li class='active'><h2>EXPERIENCES PROFESSIONNELLES</h2></li></ul>";
        }

        $content .= $finalContent;
    }
    return $content;
}

function printBySectionName($hl, $sectionName) {
    $content = "";

    $experiences = $_GET[$sectionName];


    if ($experiences != null) {

        $xml_text = file_get_contents("xml/" . $sectionName . ".xml");
        $tags = textTags();

        foreach ($tags as $tagname) {
            //ajout des CDATA
            $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
        }

        $xml = new DOMDocument();
        $xml->loadXML($xml_text);

        $xpath = new DOMXpath($xml);
        $result = $xpath->query("/" . $sectionName . "/item");

        for ($x = 0; $x < $result->length; $x++) {
            if (!in_array($x, $experiences)) {
                $node2 = $result->item($x);
                $xml->documentElement->removeChild($node2);
            }
        }


        $xsl = new DOMDocument();
        $xsl->substituteEntities = true;
        $xsl->load("../xsl/mycv/" . $sectionName . ".xsl");

        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        $proc->setParameter('', 'hl', $hl);

        $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));

        $content .= $finalContent;
    }
    return $content;
}

function printEducation($hl) {
    return printBySectionName($hl, "education");
}

function printCourses($hl) {
    return printBySectionName($hl, "courses");
}

function printBySectionAndSubsections($hl, $sectionName, $subsection1, $subsection2) {
    $content = "";

    $experiences = $_GET[$sectionName];
    if ($experiences != null) {


        $xml_text = file_get_contents("xml/" . $sectionName . ".xml");
        $tags = textTags();

        foreach ($tags as $tagname) {
            //ajout des CDATA
            $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
        }

        $xml = new DOMDocument();
        $xml->loadXML($xml_text);

        $xpath = new DOMXpath($xml);
        $result = $xpath->query("//item");

        for ($x = 0; $x < $result->length; $x++) {
            if (!in_array($x, $experiences)) {
                $node2 = $result->item($x);
                try {
                    $xml->getElementsByTagName($subsection1)->item(0)->removeChild($node2);
                } catch (Exception $e) {
                    
                }
                try {
                    $xml->getElementsByTagName($subsection2)->item(0)->removeChild($node2);
                } catch (Exception $e) {
                    
                }
            }
        }


        $xsl = new DOMDocument();
        $xsl->substituteEntities = true;
        $xsl->load("../xsl/mycv/" . $sectionName . ".xsl");

        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        $proc->setParameter('', 'hl', $hl);

        $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));

        $content .= $finalContent;
    }
    return $content;
}

function printKnowledge($hl) {
    return printBySectionAndSubsections($hl, "knowledge", "science", "miscellaneous");
}

function printStatistics($hl) {
    $content = "";

    $experiences = $_GET["statistics"];


    if ($experiences != null) {

        $xml_text = file_get_contents("xml/statistics.xml");
        $tags = textTags();

        foreach ($tags as $tagname) {
            //ajout des CDATA
            $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
        }

        $xml = new DOMDocument();
        $xml->loadXML($xml_text);

        $xpath = new DOMXpath($xml);
        $result = $xpath->query("/statistics/item");

        for ($x = 0; $x < $result->length; $x++) {
            if (!in_array($x, $experiences)) {
                $node2 = $result->item($x);
                $xml->documentElement->removeChild($node2);
            }
        }


        $xsl = new DOMDocument();
        $xsl->substituteEntities = true;
        $xsl->load("../xsl/pdf/statistics.xsl");

        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        $proc->setParameter('', 'hl', $hl);

        $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));

        $content .= $finalContent;
    }

    return $content;
}

function printInterests($hl) {
    return printBySectionName($hl, "interests");
}

function printGoals($hl) {
    return printBySectionName($hl, "goals");
}

function printReferees($hl) {
    return printBySectionAndSubsections($hl, "referees", "linkedin", "letters");
}

function printHtml($ext_string, $hl) {

    $content = '<page backtop="2mm" backbottom="2mm" backleft="3mm" backright="3mm">'
            . "<style>" . file_get_contents("../css/bootstrap.min.css") .
            file_get_contents("../css/mycv.css") .
            file_get_contents("../css/pdf.css") . "</style>";

    $content .= writeHeader($ext_string, $hl, true);

    $experience = printExperience($hl);
    $education = printEducation($hl);
    $courses = printCourses($hl);
    $knowledge = printKnowledge($hl);
    $st = printStatistics($hl);
    $interests = printInterests($hl);
    $goals = printGoals($hl);
    $referees = printReferees($hl);

    $content .= $experience . $education . $courses . $knowledge . $st . $interests . $goals . $referees;

    $content .= "</page>";

    return $content;
}

?>
