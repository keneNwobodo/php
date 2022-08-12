<!-- # cookie
 # set cookie -->
 <?php
 setcookie("name", "Kene is on the path to be a php developer", time()+3600, "/", "", 0);
 setcookie("age", "35", time()+3600, "/", "", 0);

 # delete cookie
 setcookie("name", "", time()-60, "/", "", 0);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h2>Setting cookie in php</h2>
    <p><?php echo "Set cookies" ?></p>

    <?php
     # read cookie 
     echo $_COOKIE["name"];
     
     # equivalent to
     echo $HTTP_COOKIE_VARS["name"];

     # check if cookie exists
     if( isset($_COOKIE["name"]))
       echo "Welcome " . $_COOKIE["name"] . "<br />";

     else
       echo "sorry... not recognized" . "<br />";
    ?>

    <p><?php echo "Deleted cookies" ?></p>
</body>
</html>