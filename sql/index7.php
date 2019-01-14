<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 14/01/2019
 * Time: 11:04
 */

include "index.php";

//EXERCICE 7

/*
function afficher()
{
    global $conn;
    $selection = "SELECT clients.* from clients ";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - LASTNAME " . $row['lastName']."<br> - FIRSTNAME " . $row['firstName'] . " <br> - BIRTHDATE  " . $row['birthDate'] ." <br> - CARD " . $row['card'] ."<br> -  CARDNUMBER" . $row['cardNumber'] ."<br><br>";
    }
}
afficher();
*/

function afficher()
{
    global $conn;
    $selection = "SELECT clients.*, cardTypes.id, cards.cardTypesId, cards.cardNumber from clients, cardTypes, cards where cardTypes.id=cards.cardTypesId AND  cards.cardNumber=clients.cardNumber";
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) {
        echo " - LASTNAME " . $row['lastName']."<br> - FIRSTNAME " . $row['firstName'] . " <br> - BIRTHDATE  " . $row['birthDate'] ."<br>";

            if ($row ['card']==1 && $row['cardTypes.id'==1]) {echo "- CARD: OUI <br> -  CARDNUMBER" . $row['cardNumber'] ."<br><br>";}
            else {echo "- CARD:NON <BR><br>";}
    }
}
afficher();