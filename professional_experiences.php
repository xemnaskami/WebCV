<?php
/**
 * Created by PhpStorm.
 * User: antoinepyre
 * Date: 13/05/2018
 * Time: 12:31
 */

function buildProfessionalExperiences($imgSource, $business, $goal, $location, $dates, $technologies){
    echo "
<div class=\"ui card full-width\">
<div class='ui content'>
<div class=\"ui items\">
<div class=\"item\">
<div class=\"ui tiny image\">
<img class=\"tiny image middle centered\" src=\"$imgSource\"/>
</div>
<hr/>
<div class=\"content\" style=\"padding: 1rem;\">
<b>$business</b>
<br/>
<b>$goal</b>
<br/>
<i>$location</i>
<br/>
$dates
<br/>
$technologies
</div>
</div>
</div>
</div>
</div>";
}
?>

<?php buildProfessionalExperiences("images/smardtv_logo.png", "SmarDTV", "Développement d'un driver HDMI-CEC", "Cesson Sévigné - France","Avril - Août 2017", "C - Méthode Agile")?>
<?php buildProfessionalExperiences("images/sfr_logo.jpg", "SFR", "Développement d'un site web de gestion de données", "Rennes - France", "Août - Décembre 2015", "Java - HTML / CSS / JavaScript - MySQL")?>
