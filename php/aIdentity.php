<?php

/**
 * get age from date or birthdate
 * @param type $annee
 * @param type $mois
 * @param type $jour
 */
function age($annee, $mois, $jour) {
    $age = (date("md", date("U", mktime(0, 0, 0, $jour, $mois, $annee))) > date("md") ? ((date("Y") - $annee) - 1) : (date("Y") - $annee));
    echo $age;
}
?>
<div class="section-content">
    <svg viewBox="0 0 500 30" preserveAspectRatio="xMinYMin meet">
    <path d="M0,15 C150,30 350,0 500,2 L500,00 L0,0 Z" style="stroke: none;" class="identity-color"></path>
    <text x="30" y="10" fill="white" font-size="10" ><?php echo $ext_string['summary.id']; ?></text>
    </svg>

    <img src="img/id.jpg" id="id-image"  alt="."/>

    <br/>

    <div id="id-text">
        <h4>
            <img src="img/Ggrreyggoyrbyy_bArnbnreb_blue.png" width="300" height="50" alt="Gr&eacute;gory ANNE"/>
            <!--born in September the 6th 1983 (25 yo), single.-->
        </h4>
        <?php if ($hl == 'fr') { ?>
            n&eacute; le 06/09/1983 (<?php echo age(1983, 09, 06); ?> ans).
        <?php } ?>
        <br/>
        <h3>
            <?php echo $ext_string["address.permanent.street"]; ?><br/> <?php echo $ext_string["address.permanent.town"]; ?> <br/>
            <?php echo $ext_string["address.permanent.country"]; ?><br/>
            <?php echo $ext_string["number.mobile"]; ?> <br/> 
                <?php echo $ext_string["number.landline"]; ?>
            <a href="mailto:<?php echo $ext_string['mail']; ?>">
                <?php echo $ext_string["mail"]; ?> 
            </a> <br/>
            <a href="http://www.developpez.net/forums/u158055/zg2pro/">
                <img src="img/social/developpez.png" width="40" height="40" alt="."/>
            </a>
            <a href="http://www.facebook.com/zg2pro">
                <img src="img/social/Facebook.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://www.linkedin.com/in/gregoryanne83">
                <img src="img/social/Linkedin.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://www.twitter.com/zg2pro">
                <img src="img/social/Twitter.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://ubuntuforums.org/member.php?u=757219">
                <img src="img/social/ubuntu.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://www.viadeo.com/en/profile/gregory.anne2">
                <img src="img/social/Viadeo.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://www.youtube.com/zg2pro">
                <img src="img/social/Youtube.png"  width="40" height="40" alt="."/>
            </a>
            <a href="https://github.com/zg2pro">
                <img src="img/social/Github.png"  width="40" height="40" alt="."/>
            </a>
            <a href="http://stackoverflow.com/users/1173344/zg2pro">
                <img src="img/social/stackoverflow.png"  width="40" height="40" alt="."/>
            </a>
        </h3>

    </div>


    <br/>
    <br/>
    <div id="id-title">
        <?php echo $ext_string["title.h1"]; ?>
    </div>
    <div id="id-construction">
        <?php echo $ext_string["title.construction"]; ?>
    </div>
    <div id="id-link">
       &rArr; <a href="version-1">
            <?php echo $ext_string["title.old"]; ?>
        </a>
    </div>
</div>