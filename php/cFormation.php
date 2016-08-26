<?php
$context = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
$url = "version-1/" . $hl . "/xml/education.xml";
$xml_text = file_get_contents($url, false, $context);

$tags = array("organization", "date", "role",
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
$xsl->load("version-1/xsl/education.xsl");

$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl);

$proc->setParameter('', 'hl', $hl);
$proc->setParameter('', 'rss', '0');

$html = $proc->transformToXML($xml);
$html2 = preg_replace('/<\?xml.*\?>/', '', $html, 1);
$result = str_replace("../img", "version-1/img", $html2);
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="edu-color"></path>
    <text x="30" y="10" fill="black" font-size="10" ><?php echo $ext_string['summary.e']; ?></text>
    </svg>

    <div class="description-black">
        <p class='description_content'>
        <?php
        echo trim($result);
        ?>
        </p>  
    </div>

</div>