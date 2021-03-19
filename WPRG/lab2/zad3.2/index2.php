<?php
$iloscRzutow = $_POST["iloscRzutow"];


for($i = 0; $i < $iloscRzutow; $i++)
{
    $wynik = random_int(0,6);
    echo("Wynik ". ($i+1) . " rzutu wynosi: ". $wynik. "<br>");

}
?>