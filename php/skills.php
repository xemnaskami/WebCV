<?php
/**
 * Created by PhpStorm.
 * User: antoinepyre
 * Date: 13/05/2018
 * Time: 11:56
 */

    function buildTableRow($imgSource, $title, $skillLevel) {
        echo "
        <tr>
            <td class=\"two wide\">
                <img class=\"ui tiny image\" src=\"$imgSource\"/>
            </td>
            <td class=\"two wide\">
                <b>$title</b>
            </td>
            <td class=\"twelve wide\">
                <div class=\"ui indicating progress my-bar\" data-value=\"$skillLevel\" data-total=\"5\">
                    <div class=\"bar\"></div>
    
                </div>
            </td>
        </tr>
 
        ";
    }
?>

<table class="ui table">
    <thead>
    <tr>
        <th colspan="3">
            Dévelopement
        </th>
    </tr>
    </thead>
    <tbody>
        <?php buildTableRow("images/cpp.png", "C/C++", "4")?>
        <?php buildTableRow("images/py.png", "Python", "4")?>
        <?php buildTableRow("images/webStack.png", "FrontEnd", "3")?>
        <?php buildTableRow("images/react_logo.svg", "React Native", "4")?>
    </tbody>
</table>
<table class="ui table">
    <thead>
    <tr>
        <th colspan="3">
            Langues
        </th>
    </tr>
    </thead>
    <tbody>
        <?php buildTableRow("images/flag-round-fr.png", "Français", "5")?>
        <?php buildTableRow("images/uk.jpg", "English", "4")?>
    </tbody>
</table>
<table class="ui table">
    <thead>
        <tr>
            <th colspan="2">
                Autres compétences
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="one wide">

            </td>
            <td>
                <div class="ui bulleted list">
                    <div class="item">Git</div>
                    <div class="item">Adaptabilité</div>
                    <div class="item">Travail en groupe</div>
                    <div class="item">Travail en autonomie</div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
