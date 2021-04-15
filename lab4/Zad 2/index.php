<?php
error_reporting(E_ALL);
echo <<<EOL
<form method="post" name="okey">
        <input type="text" name="value" placeholder="What do you want to save?.." required>
        <input type="submit" value="Save"><br>
</form>
EOL;
$txt = $_POST['value']. "\n\r";
$myfile = fopen("testfile.txt", "a+");
fwrite($myfile, $txt);
fclose($myfile);
$fb = fopen("testfile.txt", "a+");
while(!feof($fb)){
    $str = fgets($fb);
    $str = nl2br($str);
    echo($str);
}
?>