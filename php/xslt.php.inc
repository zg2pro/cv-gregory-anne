<?php

function age($annee, $mois, $jour) {
    $age = (date("md", date("U", mktime(0, 0, 0, $jour, $mois, $annee))) > date("md") ? ((date("Y") - $annee) - 1) : (date("Y") - $annee));
    echo $age;
}

function readXml($hl, $xml_file_name, $xsl_file_name) {

    $context = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
    $url = "version-1/" . $hl . "/xml/" . $xml_file_name;
    $xml_text = file_get_contents($url, false, $context);

    $tags = array("link", "logo", "location",
        "date", "role",
        "degree", "text",
        "field", "title"
    );

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
    $proc->setParameter('', 'rss', '0');

    $html = $proc->transformToXML($xml);
    $html2 = preg_replace('/<\?xml.*\?>/', '', $html, 1);
    $result = str_replace("../img", "version-1/img", $html2);
    return $result;
}
?>