<?php
$result = readXml($hl, "education.xml", "version-1/xsl/mycv/education.xsl");
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="edu-color"></path>
    <text x="30" y="10" fill="black" font-size="10" ><?php echo $ext_string['summary.e']; ?></text>
    </svg>

    <div class="description-black">
        <p class='description_content'>
            <?php
            echo $result;
            ?>
        </p>  
    </div>

</div>