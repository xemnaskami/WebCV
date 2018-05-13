<?php
/**
 * Created by PhpStorm.
 * User: antoinepyre
 * Date: 13/05/2018
 * Time: 12:13
 */

    function buildFormation($schoolLogo, $schoolName, $program, $location, $date, $diploma){
        echo "
<div class=\"ui card full-width\">
<div class='ui content'>
<div class=\"ui items\">
<div class=\"item\">
<div class=\"ui tiny image middle centered \">
<img class=\"tiny image \" src=\"$schoolLogo\"/>
</div>
<hr/>
<div class=\"content middle aligned\" style=\"padding: 1rem;\">
<b>$schoolName</b>";
        if ($program){
            echo "<i> - $program</i>";
        }
        echo "
<br/>
<i>$location</i>
<br/>
$date";
        if ($diploma) {
            echo "<br/><b>$diploma</b>";
        }
        echo "
</div>
</div>
</div>
</div>
</div>
        ";
    }

?>

<?php buildFormation("images/DCU_logo.jpg","Dublin City University", "Study abroad program", "Dublin - Irlande", "2017 - 2018", null)?>
<?php buildFormation("images/Epitech_logo.jpg","Epitech", "École supérieure d'informatique", "Paris - France", "2014 - 2019", "Diplôme d'Expert en technologie de l'information - Niveau 1")?>
<?php buildFormation("images/assomption_logo.png","Lycée Jean-Marie de la Mennais", null, "Retiers - France", "2010 - 2014", "Baccalauréat scientifique spécialité mathématiques")?>
