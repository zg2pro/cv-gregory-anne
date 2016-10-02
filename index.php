<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gr&eacute;gory ANNE 's Curriculum Vitae</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Gregory Anne" />
        <meta name="keywords"  content="gregory,anne,cv" />
        <meta name="Resource-type" content="Document" />

        <link rel="stylesheet" type="text/css" href="version-1/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="version-1/js/jstree/themes/default/style.min.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="css/site.css" />
    </head>
    <body>
        <?php
        if (isset($_GET["hl"])) {
            $hl = $_GET["hl"];
        } else if (!isset($_SESSION["hl"])) {
            $hl = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
        }

        switch ($hl) {
            case"fr":
                $_SESSION["hl"] = "fr";
                //header("location: fr/");
                break;

            default:
                $_SESSION["hl"] = "en";
                // header("location: en/");
                break;
        }
        require_once('version-1/' . $hl . '/headers.strings.php');
        require_once( $hl . '/headers.strings.php');
        ?>
        <?php
        include ("php/menu.php");
        include ("php/page.php");
        ?>
    </body>
    <script type="text/javascript" src="version-1/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="version-1/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script>
        $(document).ready(function () {
            $('#fullpage').fullpage({
                verticalCentered: false,
                anchors: ["page0", "page1", "page2", "page3", "page4", "page5", "page6", "page7", "page8"],
                menu: 'ul.full-page-menu',
                scrollingSpeed: 600,
                css3: true
            });
            var width = $(window).width();
            var minWidth = 1366;
            var language = <?php echo "\"" . $hl . "\""; ?>;
            if (width < minWidth) {
                if (language === 'fr') {
                    alert("Ce site requiert une largeur d'écran >= " + minWidth
                            + "\nLa votre est actuellement de : " + width + "px."
                            + "\nVous allez être redirigé vers l'ancienne version du site.");
                } else {
                    alert("This website requires a screen width >= " + minWidth
                            + "\nYours is currently: " + width + "px."
                            + "\nYou are going to be redirected to the old version");
                }
                window.location.href = "version-1";
            }
        });
    </script>
    <script type="text/javascript" src="version-1/js/jstree/jstree.min.js"></script>
    <script type="text/javascript" src="version-1/js/mycv.js"></script>
</html>
