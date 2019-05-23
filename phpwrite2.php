<?php
$myFile = "ttt.txt";

$fh = fopen($myFile, 'a+') or die("can't open file");
$stringData = $_POST["name"];
if ($stringData <> "")
{
    $existingText = file_get_contents($file);
   fwrite($fh,$existingText .$stringData."\n");
}
// $stringData = $_POST["name"];
// fwrite($fh, $stringData."\n");
fclose($fh);
?>  