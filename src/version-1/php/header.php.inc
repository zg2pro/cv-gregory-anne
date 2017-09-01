<?php

require_once 'age.php.inc';

function writeHeader($ext_string, $hl, $pdf = false) {
    $content = "";

    if ($hl == 'fr') {
        $content .= "<img src='../img/id.jpg' id='identity-picture' align='right' alt='.'/>";
    }
    $content .= "
        <div class='pdf-generation-comment'>
        This CV is generated on <a href='http://cv.gregory.anne.free.fr/'>http://cv.gregory.anne.free.fr/</a>
        </div>
<br/><h4>
    <img src='../img/Ggrreyggoyrbyy_bArnbnreb_blue.png' width='300' height='50' alt='Gr&eacute;gory ANNE'/>
</h4>
";
    if ($hl == 'fr') {
        $content .= "n&eacute; le 06/09/1983 (" . age(1983, 09, 06) . "ans).";
    }
    $content .= "
<br/>
<h3>";
    if ($pdf) {
        $content .= $ext_string["address.permanent.street"] . "<br/>";
    }
    $content .= $ext_string["address.permanent.town"] . "<br/>";
    if (!$pdf && $hl == 'en') {
        $content .= $ext_string["address.permanent.country"] . "<br/>";
    }
    $content .= $ext_string["number.mobile"] . "<br/>" . $ext_string["number.landline"] .
            "<br/><a href='mailto:" . $ext_string['mail'] . "'>" . $ext_string["mail"] . "</a> <br/>
</h3>
";
    $content .= "
<div id='bookmarks'>
";
    if (!$pdf) {
        $content .= "  <a href='https://www.facebook.com/pages/Gregory-Anne/262147523982'>
        <img src='../img/social_icons/Facebook.png'  width='40' height='40' alt='.'/>
    </a>
    <a href='http://www.youtube.com/zg2pro'>
        <img src='../img/social_icons/Youtube.png'  width='40' height='40' alt='.'/>
    </a>";
    }
    $content .= "<a href='http://www.linkedin.com/in/gregoryanne83'>
        <img src='../img/social_icons/Linkedin.png'  width='40' height='40' alt='.'/>
    </a>
    <a href='http://www.twitter.com/zg2pro'>
        <img src='../img/social_icons/Twitter.png'  width='40' height='40' alt='.'/>
    </a>
    <a href='https://github.com/zg2pro'>
        <img src='../img/social_icons/Github.png'  width='40' height='40' alt='.'/>
    </a>

</div>

<br/>
<br/>

" . $ext_string["title.h1"];
    if ($pdf) {
        $content .= "<hr/>";
    }

    return $content;
}

?>