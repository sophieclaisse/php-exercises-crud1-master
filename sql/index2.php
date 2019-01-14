<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 10:35
 */

include "index.php";

//EXERCICE 2 AFFICHER SPECTACLES

function afficher()
{
    global $conn;
    $selection = "SELECT shows.* from shows ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - TITLE " . $row['title']." - PERFORMER " . $row['performer'] . " - DATE " . $row['date'] ." - DURATION" . $row['duration'] ." -  START TIME" . $row['startTime'] ."<br><br>";
    }
}
afficher();

function showsType()
{
    global $conn;
    $selection = "SELECT showTypes.* from showTypes ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo $row['id']." - TYPE " . $row['type'] . "<br><br>";
    }
}
showsType();




