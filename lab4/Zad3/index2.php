<?php
extract($_POST);


$file = fopen("tabelka.txt","a");
for($i = 0; $i < $iloscgosci; $i++)
{
    fwrite($file ,"Imię : ". $imie[$i]. "<br>" ) ;
    fwrite($file ,"Nazwisko : " . $nazwisko[$i] . "<br>");

    if($i <= 0){
        fwrite($file,"Adres : ". $adres . "<br>");
        fwrite($file,"Nr Karty : ". $nrKarty. "<br>");
        fwrite($file,"Email : ". $email. "<br>");
        fwrite($file,"Data przyjazdu ". $arrivedata. "<br>");
        fwrite($file,"Data wyjazdu ". $checkoutdata. "<br>");

    }
}
fclose($file);



$fd = fopen("tabelka.txt", "r+");
echo fread($fd, filesize("tabelka.txt"));
fclose($fd);

?>