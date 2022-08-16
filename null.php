<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "Kene10";
      $dname = "WORLD";
      $tutorial_count = null;

      // connecting to MySQL 
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dname);

      if($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf("Connected successfully.<br />");
    
      if(isset($tutorial_count)){
        $sql = "SELECT tutorial_author, tutorial_count FROM tcount_tbl WHERE tutorial_count =" + $tutorial_count;
      } else {
        $sql = "SELECT tutorial_author, tutorial_count FROM tcount_tbl WHERE tutorial_count IS  NULL";
      }

      $result = $mysqli->query($sql);   

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            printf("Author: %s,  Count: %s \n",
            $row["tutorial_author"],
             $row["tutorial_count"]);
        } 
      } else {
        printf("No record found!");
      }

      mysqli_free_result($result);
      $mysqli->close();
    ?>

</body>
</html>