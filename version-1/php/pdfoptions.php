<?php

function pdfXsl($hl, $val) {
    $file_name = "xml/$val.xml";
    $xml_text = file_get_contents($file_name);
    $tags = array("link", "location",
        "date", "role",
        "mention", "school", "text",
        "field", "title");
    foreach ($tags as $tagname) {
        //ajout des CDATA
        $xml_text = str_replace("<$tagname>", "<$tagname><![CDATA[", $xml_text);
        $xml_text = str_replace("</$tagname>", "]]></$tagname>", $xml_text);
    }
    $xml = new DOMDocument;
    $xml->loadXML($xml_text);
    $xsl = new DOMDocument;
    $xsl->substituteEntities = true;
    $xsl->load('../xsl/pdfMenu/' . $val . '.xsl');
    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);
    $proc->setParameter('', 'hl', $hl);
    $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));
    return $finalContent;
}
?>
<form action="print.php">
    <div class="modal fade" tabindex="-1" role="dialog" id="print-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <?php
                        echo $ext_string["tools.p"];
                        ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <?php
                        $hl = $_SESSION['hl'];
                        ?>
                        <li>
                            <?php echo $ext_string['summary.pe']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "experience"); ?>
                            </ul>
                        </li>
                        <li>
                            <?php echo $ext_string['summary.e']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "education"); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo $ext_string["pdf.close"]; ?>
                    </button>
                    <button type="button" class="btn btn-primary">
                        <?php echo $ext_string["pdf.generate"]; ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>