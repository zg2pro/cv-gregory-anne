<?php
session_start();

$hl = "en";
$_SESSION["hl"] = "en";

if (!isset($_GET["p"]))
    $p = "print";
else {
    $p = $_GET["p"];
}

if (isset($_GET["titles"])) {
    $titles = $_GET["titles"];
} else if (!isset($_SESSION["titles"])) {
    $titles = array(
        1 => "experience"/* ,
              2 => "education",
              3 => "courses",
              4 => "knowledge",
              5 => "statistics",
              6 => "interests",
              7 => "goals",
              8 => "referees" */
    );
}

if (file_exists("../php/" . $p . ".php"))
    require_once ("../php/" . $p . ".php");
else {
    if (file_exists($p . ".php"))
        require_once ($p . ".php");
    else {
        echo "<div id='attention'>
				The page you have requested is not yet available in english.
				Thanks for your understanding.
				</div>
				";
        require_once ("../fr/" . $p . ".php");
    }
}
?>
