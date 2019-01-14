<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 10:43
 */

include "index.php";

//EXERCICE4 AFFICHER LES CLIENTS POSSEDANT UNE CARTE

function afficher()
{
    global $conn;
    $selection = "SELECT clients.* from clients WHERE card=1";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - LASTNAME " . $row['lastName']." - FIRSTNAME " . $row['firstName'] . " - BIRTHDATE  " . $row['birthDate'] ." - CARD " . $row['card'] ." -  CARDNUMBER" . $row['cardNumber'] ."<br><br>";
    }
}
afficher();