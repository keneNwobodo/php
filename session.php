<!-- // sessions -->
 <!-- # set cookie -->
<?php
//    initialize session start
  session_start();

  if(isset($_SESSION["counter"])) {
    $_SESSION["counter"] += 1;
  } else {
    $_SESSION["counter"] = 1;
  }

  $msg = "You have visited the pages" . $_SESSION["counter"];
  $msg .= "in this session.";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h2>Setting sessions in php</h2>
    <p><?php echo ($msg); ?></p>

    <?php
    //  destroys a particular session
     unset($_SESSION["counter"]);

    // destroys all the sessions
    session_destroy();
    ?>
</body>
</html>