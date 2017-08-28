<?php
session_start();

$titles = array(
    0 => "experience",
    1 => "education",
    2 => "courses",
    3 => "knowledge",
    4 => "statistics",
    5 => "interests",
    6 => "goals",
    7 => "referees"
);

require_once('mycvhtml.php.inc');

$hl = $_SESSION['hl'];
echo mycvHtml($hl, $titles);
?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jstree/jstree.min.js"></script>
<script type="text/javascript" src="../js/mycv.js"></script>
