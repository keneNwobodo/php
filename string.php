<?php

// strpos func
echo strpos("The name of Okafor is Okenu", "name");

// strlen
echo strlen("Johnny Cage");

// web concepts
// $u_agent = $_SERVER["HTTP_USER_AGENT"];
// $name = "Unknown";
// $platform = "Unknown";
// $version = "";

// // get the platform 
// if(preg_match("/linux/", $u_agent)) {
//     $platform = "Linux";

// } elseif(preg_match("/macintosh|mac os x/i/", $u_agent)) {
//     $platform = "Mac";   
// } elseif(preg_match("/windows|win32/", $u_agent)) {
//     $platform = "Windows";
// }

// get the name of the user agent separately

// random number
// srand(microtime() * 1000000);
$num = rand(1, 4);
echo $num;
?>