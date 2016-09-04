<?php

function mycvHtml($hl, $titles) {

    $finalContent = "";

    foreach ($titles as $ind => $val) {

        $file_name = "xml/$val.xml";
        // if(file_exists($file_name)) echo "File exists";
        // else echo "$file_name";
        $xml_text = file_get_contents($file_name);


        //print_r($xml_text); 


        $tags = array("link", "logo", "location",
            "date", "role",
            "degree", "text",
            "field", "title"
        );

        foreach ($tags as $tagname) {

            //ajout des CDATA
            $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
            $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
        }
        //print_r($xml_text); 

        $xml = new DOMDocument;
        $xml->loadXML($xml_text);
        //echo $xml->saveXML();
        //var_dump($xml); die;

        $xsl = new DOMDocument;
        $xsl->substituteEntities = true;
        $xsl->load('../xsl/' . $val . '.xsl');

        //echo $xsl->saveXML();
        // Configuration
        $proc = new XSLTProcessor;
        $proc->importStyleSheet($xsl);

        $proc->setParameter('', 'hl', $hl);
        
        $finalContent .= "<a name='" . $val . "'></a>";

        $finalContent .= trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));
    }
    return $finalContent;
}

?>