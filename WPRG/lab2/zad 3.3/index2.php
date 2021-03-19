<?php
$wielkosc = $_POST["wielkosc"];
for($j = 1; $j <= $wielkosc; $j++)
{
    for($i = 1; $i <= $wielkosc; $i++)
{

    echo(($i*$j ). "\t" . "\t". "\t");
}
echo("<br>");
}



?>