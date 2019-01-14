<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 10:40
 */

include "index.php";

//EXERCICE3 AFFICHER LES 20 PREMIERS CLIENTS
function afficher()
{
    global $conn;
    $selection = "SELECT clients.* from clients LIMIT 20 "; //SLECTION DE TRUCS A AFFICHER
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo " - LASTNAME " . $row['lastName']." - FIRSTNAME " . $row['firstName'] . " - BIRTHDATE  " . $row['birthDate'] ." - CARD " . $row['card'] ." -  CARDNUMBER" . $row['cardNumber'] ."<br><br>";
    }
}
afficher();