<?php
require_once 'version-1/php/age.php.inc';
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="identity-color"></path>
    <text x="30" y="10" fill="white" font-size="10" ><?php echo $ext_string['summary.id']; ?></text>
    </svg>

    <br/>

    <div id="id-text">
        <h4>
            GREGORY ANNE
            <!--img src="version-1/img/Ggrreyggoyrbyy_bArnbnreb_blue.png" width="300" height="50" alt="Gr&eacute;gory ANNE"/-->
            <!--born in September the 6th 1983 (25 yo), single.-->
        </h4>
        <br/>
        <?php if ($hl == 'fr') { ?>
            n&eacute; le 06/09/1983 (<?php echo age(1983, 09, 06); ?> ans).
        <?php } ?>
        <br/>
        <h3>
            <?php echo $ext_string["address.permanent.town"]; ?> <br/>

            <?php if ($hl == 'en') { ?>
                <?php echo $ext_string["address.permanent.country"]; ?><br/>
            <?php } ?>
            <?php echo $ext_string["number.mobile"]; ?> <br/> 
            <?php echo $ext_string["number.landline"]; ?>
            <a href="mailto:<?php echo $ext_string['mail']; ?>">
                <?php echo $ext_string["mail"]; ?> 
            </a> <br/>
            <a href="http://www.linkedin.com/in/gregoryanne83">
                <img src="version-1/img/social_icons/Linkedin.png"  width="40" height="40" alt="."/>
            </a>
            <a href="https://www.facebook.com/gregory.anne.jobs">
                <img src="version-1/img/social_icons/Facebook.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://www.twitter.com/zg2pro">
                <img src="version-1/img/social_icons/Twitter.png"  width="40" height="40" alt="."/>
            </a>
            <a href="https://github.com/zg2pro">
                <img src="version-1/img/social_icons/Github.png"  width="40" height="40" alt="."/>
            </a>
        </h3>
        <h4>
             <?php echo $ext_string["gdpr.disclaimer"]; ?>
        </h4>

    </div>


    <br/>
    <br/>
    <div id="id-title">
        <?php echo $ext_string["title.h1"]; ?>
    </div>
</div>
