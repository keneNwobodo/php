<?Php

# function
 echo "Hello, World";

 function add($num1, $num2) {
    $sum = $num1 + $num2;
    echo "Sum is $sum";
 }

 echo add(5, 20);

 function num(&$num) {
    $num += 20;
    echo $num;
 }

 $origNum = 17;
 num($origNum);

 #  reference a function 
 function numValue($num2) {
    $num2 += 30;
    echo $num2;
 }

 $newOrigi = 46;
 numValue($newOrigi);

 # return value
 function anotherSum($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
 }

 $returned_value = anotherSum(5, 7);
 echo "The returned sum is: $returned_value";

 # default params
 function printMe($param = null) {
    print $param;
 }

 # invoke the func
 printMe("This is a text");
 printMe();

 # dynamic func call
 function sayHello() {
    echo "Hello friend! <br />";
 }

 $friend_call = "sayHello";
 $friend_call();

 #cookie
?>