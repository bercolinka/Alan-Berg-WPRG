<?php
$podst1 = $_POST["trazpod1"];
$podst2 = $_POST["trazpod2"];
$wys = $_POST["trazwysokosc"];
$poletrap = (($podst1 + $podst2) * $wys)/2;
echo("Pole twojego trapez wynosi : ". $poletrap);