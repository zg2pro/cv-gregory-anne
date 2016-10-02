<?php
$result = readXml($hl, "goals.xml", "version-1/xsl/mycv/goals.xsl");
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="goals-color"></path>
    <text x="30" y="10" fill="black" font-size="10" ><?php echo $ext_string['summary.g']; ?></text>
    </svg>
</div>


<div class="description-black">
    <?php
    echo $result;
    ?>
</div>