<?php
function age($annee, $mois, $jour) {
    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $jour, $mois, $annee))) > date("md") ? ((date("Y") - $annee) - 1) : (date("Y") - $annee));
    return $age;
}
?>