<?php

$numbers = array(1, 2, 3, 4, 5);

// array
foreach($numbers as $num) {
    echo "num is $num";
}

// associtive arrays
$array = array("name1" => "Kene", "name2" => "James", "name3" => "John");
foreach($array as $key => $val) {
    echo "$key - $val";
}
print("$val");
echo $array["name2"];
?>