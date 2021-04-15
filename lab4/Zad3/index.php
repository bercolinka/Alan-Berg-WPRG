<h3>Rezerwacja</h3>
<form action="#" method="post" >

Ilość osob: <select name ="lista" >
    <option value="1"> 1 </option>
    <option value="2"> 2 </option>
    <option value="3"> 3 </option>
    <option value="4"> 4 </option>
</select>
<input type="submit" name="sub" value="wyslij">
</form>

<form action="index2.php" method="POST">
    

<?php
if (isset($_POST['sub']))
{
    $liczaGosci = $_POST["lista"];
    echo '<input type="hidden" name="iloscgosci" value="'. $liczaGosci . '">';
    for( $i =0; $i < $_POST['lista']; $i++)
    {
        
        echo  $i+1 . ' Imie: <input type ="text" name = "imie['. $i .']"><br>';
        echo  ' Nazwisko:  <input type="text" name = "nazwisko['. $i . ']"><br>';
        if($i <=0 ){
            echo  ' Adres:  <input type="text" name = "adres"><br>';
            echo  ' Nr Karty  <input type="text" name = "nrKarty"><br>';
            echo  ' Email <input type="email" name = "email"><br>';
            echo  ' Data przyjazdu <input type="date" name = "arrivedata"><br>';
            echo  ' Data wyjazdu <input type="date" name = "checkoutdata"><br>';
        } 
        echo  ' Łóżko dla dziecka <input type="checkbox" name = "udogodnienia" ><br>';
        echo  ' Klimatyzacja <input type="checkbox" name = "udogodnienia" ><br>';
        echo  ' Pokój dla palacza <input type="checkbox" name = "udogodnienia" ><br>';
        echo '<br>';
        
        

    }
}
?>
<form action="index2.php" method="post">
<input type="submit" value="Potwierdzam">
</form>


</form>
