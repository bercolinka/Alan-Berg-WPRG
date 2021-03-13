<?php
 $figura = $_POST["figura"];

 switch($figura) 
 
 { 
     case "trojkat":
         
        ?>
        <form action="Triangle.php" method="POST">
        <p>Podaj podstawe trojkata</p>
        <input type="number" name="trojkatPodstawa"></br>
        <p>Podaj wysokosc trojkata</p>
        <input type="number" name="trojkatWysokosc"></br>
        <input type="submit" value="wyślij">
        </form>
        <?php
        break;
     case "prostokat":
         
         ?>
         <form action="rectangle.php" method="POST">
         <p>Podaj jeden bok prostokata</p>
         <input type="number" name="prostBok1"></br>
         <p>Podaj drugi bok prostokata</p>
         <input type="number" name="prostBok2"></br>
         <input type="submit" value="wyślij">
         </form>
         <?php

         break;
     case "trapez":
         
        ?>
         <form action="trapeze.php" method="POST">
         <p>Podaj krótszą podstawę trapezu</p>
         <input type="number" name="trazpod1"></br>
         <p>Podaj dluzsza podstawe</p>
         <input type="number" name="trazpod2"></br>
         <p>Podaj wysokosc trapezu</p>
         <input type="number" name="trazwysokosc"></br>
         <input type="submit" value="wyślij">
         </form>
         <?php

         break;
     default:
     echo("Błąd wczytywania figury");
 
 }
 
 
 ?>