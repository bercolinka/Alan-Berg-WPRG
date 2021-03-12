<?php
function Censure($beforeCensure)
{  
    $isItBadWord = False;

    $wordsToCensore = ["pedaly", "przerzutki", "kierownica",
                        "siodelko", "rama","dzwonek" ];



    foreach($wordsToCensore as $word )
    {
        if($word == $beforeCensure)
        {
            $isItBadWord = True;
        }
    }
    if($isItBadWord)
    { 
        $a = strlen($beforeCensure);
        for($b = 0; $b < $a; $b++)
        {
            
            echo("*" );
        }
        echo("<br>");
    }
    else
    {
        echo("Slowo jest cenzuralne <br>");
    }
}   

$firstWord = "Silnik";
$secondWord = "pedaly";
$thirdWord = "przerzutki";
Censure($firstWord);
Censure($secondWord);
Censure($thirdWord);
?> 