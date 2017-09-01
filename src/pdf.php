<?php
session_start();

$hl = $_GET["hl"];
chdir("version-1/" . $hl);

if (!isset($_GET["p"])){
    $p = "printPdf";
} else {
    $p = $_GET["p"];
}

if (file_exists("../php/" . $p . ".php")) {
    require_once ("../php/" . $p . ".php");
} else {
    if (file_exists($p . ".php")) {
        require_once ($p . ".php");
    } else {
        echo "<div id='attention'>
				The page you have requested is not yet available in english.
				Thanks for your understanding.
				</div>
				";
        require_once ("../fr/" . $p . ".php");
    }
}
?>
