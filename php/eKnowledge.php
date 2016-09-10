<?php
$result = readXml($hl, "knowledge.xml", "version-1/xsl/mycv/knowledge.xsl");
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="kno-color"></path>
    <text x="30" y="10" fill="black" font-size="10" ><?php echo $ext_string['summary.k']; ?></text>
    </svg>
</div>

<div class="description-black">
    <p class='description_content'>
        <?php
        echo trim($result);
        ?>
    </p>  
</div>