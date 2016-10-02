<?php
require_once("text-tags.php.inc");

function pdfXsl($hl, $val) {
    $file_name = "xml/$val.xml";
    $xml_text = file_get_contents($file_name);
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
    $xsl->load('../xsl/pdfMenu/' . $val . '.xsl');
    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl);
    $proc->setParameter('', 'hl', $hl);
    $finalContent = trim(preg_replace('/<\?xml.*\?>/', '', $proc->transformToXML($xml), 1));
    return $finalContent;
}
?>
<form action="pdf.php" id="print-pdf-form">
    <input type="hidden" name="hl" value="<?php echo $hl; ?>" />
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
                        <li class="main" section="experience">
                            <?php echo $ext_string['summary.pe']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "experience"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="education">
                            <?php echo $ext_string['summary.e']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "education"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="courses">
                            <?php echo $ext_string['summary.c']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "courses"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="knowledge">
                            <?php echo $ext_string['summary.k']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "knowledge"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="statistics">
                            <?php echo $ext_string['summary.s']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "statistics"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="interests">
                            <?php echo $ext_string['summary.ih']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "interests"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="goals">
                            <?php echo $ext_string['summary.g']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "goals"); ?>
                            </ul>
                        </li>
                        <li class="main"  section="referees">
                            <?php echo $ext_string['summary.r']; ?>
                            <ul>
                                <?php echo pdfXsl($hl, "referees"); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <?php echo $ext_string["pdf.close"]; ?>
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <?php echo $ext_string["pdf.generate"]; ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
