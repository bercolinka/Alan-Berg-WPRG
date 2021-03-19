<?php
function randomArray($x){
    for($i =0; $i < 5; $i++){
        $tab[$i] = random_int(0,100);
    }
    echo($tab[$x]. "<br>");
    
    
}
randomArray(1);
randomArray(2);
randomArray(3);
randomArray(4);


?>