<?php>
$myfile = "location.txt";
//$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"]. "\nIP: " .$_SERVER["REMOTE_ADDR"] . "\nUser agent :" .$_GET["uagent"] ;
file_put_contents($myfile, $txt, FILE_APPEND);
//fwrite($myfile, $txt);
//fclose($myfile);

?>

