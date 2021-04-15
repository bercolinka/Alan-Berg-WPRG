<?php
extract($_POST);
echo ($wyb . " ");
switch($wyb){
    case "suma":
        include 'dodawanie.php';
        break;
    case "odejmowanie":
       include 'odejmowanie.php';
        break;
    case "mnozenie":
        include 'mnozenie.php';
        break;
    case "dzielenie":
       include 'dzielenie.php';
        break;

}
?>