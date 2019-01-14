<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 10:50
 */

include "index.php";

//EXERCICE5

function afficher()
{
    global $conn;
    $selection = "SELECT clients.* from clients where lastname LIKE 'M%'  ORDER BY lastName ASC ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - LASTNAME " . $row['lastName']."<br> - FIRSTNAME " . $row['firstName'] ."<br><br>";
    }
}
afficher();