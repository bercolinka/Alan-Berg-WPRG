<?php
function birthday($pesel)
{
    
    if($pesel[0] == 0)
    {
        // osoba urodzona po 2000 roku
        if($pesel[2] == 3) // jesli ktos urodzil sie w grudniu 2000 to poczatek 
                            //peselu 0032...
        {
            echo("Osoba urodzila sie : ". $pesel[4]. $pesel[5]. "-1".
                 $pesel[3]. "-". "20".  $pesel[0]. $pesel[1] ."<br>");

        }
        else
        {
            echo("Osoba urodzila sie : ". $pesel[4]. $pesel[5]. "-0".
                 $pesel[3]. "-". "20".  $pesel[0]. $pesel[1]. "<br>");
        }
    }
    else
    {   // osoba urodzona przed 2000 rokiem.
        echo("Osoba urodzila sie : ". $pesel[4]. $pesel[5]. "-".
            $pesel[2]. $pesel[3]. "-". "19".  $pesel[0]. $pesel[1]. "<br>");
    }
}
$firstpesel = "00231799999";
$secondpesel = "01322499999";
$thirdpesel = "99021499999";

birthday($firstpesel);
birthday($secondpesel);
birthday($thirdpesel);

?> 