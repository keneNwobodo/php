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

      // connecting to MySQL 
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dname);

      if($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf("Connected successfully.<br />");
    

      // sort a record
      if($mysqli->query("SELECT * FROM sales_tbl ORDER BY sales_author DESC")) {
        printf("RECORD SUCCESSFULLY SORTED!");
      }

      if($mysqli->errno) {
        printf("RECORD WAS NOT SORTED SUCCESSFULLY");
      }
      // select the fields belws from the sales table
      $sql = "SELECT sales_id, sales_title, sales_author, submission_date from sales_tbl";

      $result = $mysqli->query($sql);   

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            printf("Id: %s, Title: %s, Author: %s, Date: %d <br />",
            $row["sales_id"],
            $row["sales_title"],
            $row["sales_author"],
            $row["submission_date"]);
        } 
      } else {
        printf("No record found!");
      }

      mysqli_free_result($result);
      $mysqli->close();
    ?>

</body>
</html>