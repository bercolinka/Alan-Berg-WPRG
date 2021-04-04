<h3>Kalkulator</h3>
<fieldset  >
<form  method="post" action="#" >
<input type="number" name="firstValue"  >
<input type="number" name="secondValue"  > <br> <br>
<input type="radio" name="wyb" value="suma" > Suma <br>
<input type="radio" name="wyb"  value="odejmowanie"> Odejmowanie <br>
<input type="radio" name="wyb" value="mnozenie" >  Mnożenie <br>
<input type="radio" name="wyb"  value="dzielenie"> Dzielenie <br>
<input type="submit" name="wyslij" value="wyslij">
</form>
</fieldset>

<?php

if(isset($_POST['wyslij']))
{
    if(isset ($_POST["firstValue"]) && isset ($_POST["secondValue"]))
{
    $firstValue = (int)$_POST["firstValue"];
    $secondValue = (int)$_POST['secondValue'];

    if(isset ($_POST['wyb']) && ($_POST['wyb'] == "suma"))
    {
        echo "Wynik to : " . ($firstValue + $secondValue);
    }

    if(isset ($_POST['wyb']) && ($_POST['wyb'] == "odejmowanie"))
    {
        echo "Wynik to : " . ($firstValue - $secondValue);
    }
    

    if(isset ($_POST['wyb']) && ($_POST['wyb'] == "mnozenie"))
    {
        echo "Wynik to : " . ($firstValue * $secondValue);
    }
    

    if(isset ($_POST['wyb']) && ($_POST['wyb'] == "dzielenie"))
    {
        echo "Wynik to : " . ($firstValue / $secondValue);
    }
    
}
}

?>