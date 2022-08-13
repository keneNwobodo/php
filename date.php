<?php

# time
print time();


$date_array = getdate();

foreach($date_array as $key => $val) {
    print "$key = $val";
}

$formatted_date = "Today's date is ";
$formatted_date .= $date_array["mday"] . "/";
$formatted_date .= $date_array["mon"] . "/";
$formatted_date .= $date_array["year"] . "/";
echo $formatted_date;

# use the date function
$date_val = date("d:m:y", time());
print $date_val;
// echo date("d:m:y", time());

print "Today is ";
print date("j of F Y, \a\\t g.i.a", time());

?>