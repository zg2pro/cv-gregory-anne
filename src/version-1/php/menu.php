<br/><br/><br/>
<h2><?php echo $ext_string["summary.head"]; ?></h2>
<ul class="nav nav-tabs nav-stacked">
    <li><a href="index.php?p=mycv#experience"><?php echo $ext_string["summary.pe"]; ?></a></li>
    <li><a href="index.php?p=mycv#education"><?php echo $ext_string["summary.e"]; ?></a></li>
    <li><a href="index.php?p=mycv#courses"><?php echo $ext_string["summary.c"]; ?></a></li>
    <li><a href="index.php?p=mycv#knowledge"><?php echo $ext_string["summary.k"]; ?></a></li>
    <li><a href="index.php?p=mycv#statistics"><?php echo $ext_string["summary.s"]; ?></a></li>
    <li><a href="index.php?p=mycv#interests"><?php echo $ext_string["summary.ih"]; ?></a></li>
    <li><a href="index.php?p=mycv#goals"><?php echo $ext_string["summary.g"]; ?></a></li>
    <li><a href="index.php?p=mycv#referees"><?php echo $ext_string["summary.r"]; ?></a></li>
</ul>

<br/>
<h2><?php echo $ext_string["tools.head"]; ?></h2>
<ul class="nav nav-tabs nav-stacked">
    <li>
        <a href="../<?php
        if ($hl == 'en') {
            echo 'fr';
        } else {
            echo 'en';
        }
        ?>/index.php?p=<?php echo $p; ?>">
            <img src="../img/<?php
            if ($hl == 'en') {
                echo 'fr';
            } else {
                echo 'en';
            }
            ?>.gif" alt="<?php
                 if ($hl == 'en') {
                     echo 'fr';
                 } else {
                     echo 'en';
                 }
                 ?>" width="15" height="13" border="0" vspace="6"  align="middle"/>
            <?php echo $ext_string["tools.vf"]; ?> </a>
    </li>
    <li>
        <!--a href="../pdf/CV<?php echo $hl; ?>_GregANNE.pdf"-->
        <a href="#"  data-toggle="modal" data-target="#print-modal">

            <i class="icon-print"></i>
            <?php echo $ext_string["tools.p"]; ?> </a></li>
    <li>
        <a href="http://github.com/zg2pro">
            <i class="icon-briefcase"></i>
            <?php echo $ext_string["tools.portfolio"]; ?>
        </a>
    </li>
</ul>
<br/><br/><br/>
<div align="center">
    <br/><br/>
    <p>
        <a href="http://jigsaw.w3.org/css-validator/">
            <img style="border:0;width:88px;height:31px"
                 src="http://jigsaw.w3.org/css-validator/images/vcss"
                 alt="CSS Valide !" />
        </a>
        <br/>
        <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fcv.gregory.anne.free.fr%2Fversion-1%2F<?php echo $hl; ?>">
            <img style="border:0;width:88px;height:31px"
                 src="http://jigsaw.w3.org/css-validator/images/vh40"
                 alt="HTML Valide !" />
        </a>
    </p>



    <br/><br/><br/><hr/>
    <small><?php echo $ext_string['copyright']; ?>
        <br/><br/>

    </small>

</div>
<small>
    <?php echo $ext_string['technologies.title']; ?></small>
<ul>
    <li><small><?php echo $ext_string['technologies.xml']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.rss']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.css']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.php']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.pdf']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.bootstrap']; ?></small></li>
    <li><small><?php echo $ext_string['technologies.flash']; ?></small></li>
</ul>

<br/><br/><br/>

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FGregory-Anne%2F262147523982&amp;width=200&amp;colorscheme=light&amp;connections=10&amp;stream=true&amp;header=true&amp;height=587" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:587px;" ></iframe>

<?php
require_once('../php/pdfoptions.php');
?>

