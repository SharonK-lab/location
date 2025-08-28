<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: https://novvasitefortech.com");
// Allow specific methods (e.g., GET, POST)
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser agent :" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);

?>






