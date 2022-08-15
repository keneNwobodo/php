<?php

 // loop
 $a = 0;
 $b = 0;

 // for loop
 for($i = 0; $i < 10; $i++) {
    $a += 5;
    $b += 10;
 }

 echo $a, $b;

 $i = 0;
 while($i < 4) {
    print $a += 2;
    echo $i;
    $i += 1;
 }

 # do while loop
 $c = 1;
 do {
    $c++;
 } while ($c < 5);
   echo "The value of c is $c";

   // foreach functiond
   $array = array(1, 2, 3, 4, 5);

   foreach($array as $arr) {
    print("The array value is $arr");
   }

   // break
   $d = 0;
   while($d < 10) {
    $d++;
    if($d == 6) break;

    echo "dollar d is $d";
   }

   // continue
   foreach($array as $num) {
    if($num % 2 == 0) continue;
    echo "The num value is $num";
   }

   
?>