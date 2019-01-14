<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 10:10
 */

include "index.php";

//EXERCICE 1 AFFICHER CLIENTS

function afficher()
{
    global $conn;
    $selection = "SELECT clients.* from clients ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - LASTNAME " . $row['lastName']." - FIRSTNAME " . $row['firstName'] . " - BIRTHDATE  " . $row['birthDate'] ." - CARD " . $row['card'] ." -  CARDNUMBER" . $row['cardNumber'] ."<br><br>";
    }
}
afficher();

