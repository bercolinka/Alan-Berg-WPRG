<?php

function showArray($array)
{
    for($i = 0; $i < count($array); $i++)
    {
        echo($array[$i]. " ");
    }
    echo("<br>");
}



function maxFor($array)
{
    $max1 = 0;
    $max11 = 0;
    for($i = 0; $i < count($array)-1; $i++)
    {
        
        if($array[$i]> $array[$i+1])
        {
            
            $max2 = $array[$i];
            if($max1 < $max2)
            {
                $max1 = $max2;
            }
        }
        else
        {
            
            $max12 = $array[$i+1];
            if( $max12 > $max11)
            {
                $max11 = $max12;
            }
        }        
    }
    if($max1 > $max11)
    {
        echo("Najwieksza wartosc to: ". $max1. "<br>");
    }
    else
    {
        echo("Najwieksza wartosc to: ". $max11. "<br>");
    }

}

function maxWhile($array)
{
    $max1 = 0;
    $max11 = 0;
    $i = 0;
    while($i < count($array)-1)
    {
        if($array[$i]> $array[$i+1])
        { 
            $max2 = $array[$i];
            if($max1 < $max2)
            {
                $max1 = $max2;
            }
        }
        else
        { 
            $max12 = $array[$i+1];
            if( $max12 > $max11)
            {
                $max11 = $max12;
            }
        }  
        $i++;
    }
    if($max1 > $max11)
    {
        echo("Najwieksza wartosc to: ". $max1. "<br>");
    }
    else
    {
        echo("Najwieksza wartosc to: ". $max11. "<br>");
    }
    
}

function maxDoWhile($array){
    $i = 0;
    $max1 = 0;
    $max11 = 0;
    do
    {
        if($array[$i]> $array[$i+1])
        { 
            $max2 = $array[$i];
            if($max1 < $max2)
            {
                $max1 = $max2;
            }
        }
        else
        { 
            $max12 = $array[$i+1];
            if( $max12 > $max11)
            {
                $max11 = $max12;
            }
        }
        $i++;
    }
    while($i < count($array)-1);
    
    
    if($max1 > $max11)
    {
        echo("Najwieksza wartosc to: ". $max1. "<br>");
    }
    else
    {
        echo("Najwieksza wartosc to: ". $max11. "<br>");
    }
   

}
function maxForeach($array){
    $biggest = 0;
    foreach( $array as $index => $wartosc)
    {
        if($wartosc > $biggest){
            $biggest = $wartosc;
        }
    }
    echo("Najwieksza wartosc to: ". $biggest);
}

$tab = [];
for($i = 0; $i < 5; $i++)
{
    $tab[$i] = random_int(0,100);
}

showArray($tab);
maxFor($tab);
maxWhile($tab);
maxDoWhile($tab);
maxForeach($tab);



?>