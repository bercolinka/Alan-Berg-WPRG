<?php
extract($_POST);

echo ("Dane do rezerwacji <br>");


for($i = 0; $i < $iloscgosci; $i++)
{
    echo("Imię : ". $imie[$i]. "<br>" ) ;
    echo("Nazwisko : " . $nazwisko[$i] . "<br>");

    if($i <= 0){
        echo("Adres : ". $adres . "<br>");
        echo("Nr Karty : ". $nrKarty. "<br>");
        echo("Email : ". $email. "<br>");
        echo("Data przyjazdu ". $arrivedata. "<br>");
        echo("Data wyjazdu ". $checkoutdata. "<br>");

    }
    }
   
?>