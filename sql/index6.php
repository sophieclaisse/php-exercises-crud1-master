<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 11:00
 */

include "index.php";

//EXERCICE 6

function afficher()
{
    global $conn;
    $selection = "SELECT shows.* from shows ORDER BY title ASC ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - SPECTACLE " . $row['title']." PAR " . $row['performer'] . " LE " . $row['date'] ." A " . $row['startTime'] ."<br><br>";
    }
}
afficher();