<?php
function jakiej_jestem_narodowosci($country){
    $countries = array("Polska" => "Polak", "Niemcy" => "Niemiec"
                        , "Hiszpania" => "Hiszpan", "Czechy" => "Czech");
    echo("Podano :". $country. "  wiec : ". $countries[$country]); 
    echo("<br>");
}

jakiej_jestem_narodowosci("Polska");
jakiej_jestem_narodowosci("Niemcy");
jakiej_jestem_narodowosci("Hiszpania");
jakiej_jestem_narodowosci("Czechy");





?> 