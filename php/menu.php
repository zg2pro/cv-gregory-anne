<div class="full-page-menu-wrapper">
    <ul>
        <li> 
            <?php
            if ($hl == "fr") {
                ?>
                <a href="index.php?hl=en">
                    <span class="icon-jack"></span>
                </a>
                <?php
            } else {
                ?>
                <a href="index.php?hl=fr">
                    <span class="icon-fre"></span>
                </a>
                <?php
            }
            ?>
            |
            <a href="#"  data-toggle="modal" data-target="#print-modal"
               title="<?php echo $ext_string['tooltip.pdf']; ?>">
                <span class="icon-printer"></span>
            </a>
            |
            <a href="version-1?hl=<?php echo $hl; ?>" 
               title="<?php echo $ext_string['tooltip.old']; ?>">
                <span class="icon-prev"></span>
            </a>
        </li>
    </ul>
    <ul class="full-page-menu">
        <li data-menuanchor="page0"> 
            <a href="#page0" class="identity-color"><?php echo $ext_string['summary.id']; ?></a>
        </li>
        <li data-menuanchor="page1"> 
            <a href="#page1" class="exp-color"><?php echo $ext_string['summary.pe']; ?></a>
        </li>
        <li data-menuanchor="page2"> 
            <a href="#page2" class="edu-color"><?php echo $ext_string['summary.e']; ?></a>
        </li>
        <li data-menuanchor="page3"> 
            <a href="#page3" class="courses-color"><?php echo $ext_string['summary.c']; ?></a>
        </li>
        <li data-menuanchor="page4"> 
            <a href="#page4" class="kno-color"><?php echo $ext_string['summary.k']; ?></a>
        </li>
        <li data-menuanchor="page5"> 
            <a href="#page5" class="stat-color"><?php echo $ext_string['summary.s']; ?></a>
        </li>
        <li data-menuanchor="page6"> 
            <a href="#page6" class="hob-color"><?php echo $ext_string['summary.ih']; ?></a>
        </li>
        <li data-menuanchor="page7"> 
            <a href="#page7" class="goals-color"><?php echo $ext_string['summary.g']; ?></a>
        </li>
        <li data-menuanchor="page8"> 
            <a href="#page8" class="ref-color"><?php echo $ext_string['summary.r']; ?></a>
        </li>
    </ul>
</div>

<?php
$curDir = getcwd();
chdir("version-1/" . $hl);
require_once('../php/pdfoptions.php');
chdir($curDir);
?>
