<?php
$result = readXml($hl, "statistics.xml", "xsl/version-1/statistics.xsl");
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="exp-color"></path>
    <text x="30" y="10" fill="white" font-size="10" ><?php echo $ext_string['summary.s']; ?></text>
    </svg>
<?php
echo trim($result);
?>
</div>