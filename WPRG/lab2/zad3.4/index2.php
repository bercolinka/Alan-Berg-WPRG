<?php
$liczba = $_POST["liczba"];

function is_prime($n)
{
    $jestPierwsza = false;
    $iloscWykonan = 0;
    
    if($n < 4)
    {
        if( ($n == 3) || ($n == 2))
        {
            $jestPierwsza = true;
        }
        else
        {
            $jestPierwsza = false; // liczby pierwsze sa wieksze od 2 
    }
        }
        
    else
    {
        for($j = 2; ($j * $j) < $n; $j++ ) // jesli w zakresie od zera do pierwiastka z liczby 
                                            // nie ma dzielnika to pozniej tez go nie bedzie
                                        
        {
            echo( $n/$j. "<br>");
            if($n % $j ==0)
            {
                $jestPierwsza = false;
                break;
            }
            else
            {
                $jestPierwsza = true;
                
            }
            $iloscWykonan++;
        }
    }
    if($jestPierwsza)
    {
        echo("Liczba jest pierwsza, ilosc obrotow petli wynosi : ". $iloscWykonan);
    }
    else
    {
        echo("Liczba nie jest pierwsza, ilosc obrotwo petli wynosi: ". $iloscWykonan);
    }
}

is_prime($liczba);
?>