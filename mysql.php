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

      // connecting to MySQL 
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass);

      if($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf("Connected successfully.<br />");
      
      //create a database
      if($mysqli->query("CREATE DATABASE GROOMS")) {
        printf("Database created successfully");
      }
      // if failed
      if($mysqli->errno){
        printf("Could not create database");
      }

      // selelcting a database
      $retval = mysqli_select_db($mysqli, "world");
      if(!$retval) {
        die("Database could not be selected!" . $mysqli_error($mysqli));
      }
      echo "Database World selected successfully!";

      // create a table
      $sql = "CREATE TABLE sun_tbl(".
        "sun_id INT NOT NULL AUTO_INCREMENT, ".
        "sun_title VARCHAR(100) NOT NULL, ".
        "sun_author VARCHAR(40) NOT NULL, ".
        "submission_date DATE, ".
        "PRIMARY KEY (sun_id)); ";
        if($mysqli->query($sql)) {
          printf("Table sun_tbl created successfully");
        }
        if($mysqli->errno) {
          printf("Could not create sun_tbl");
        }

      // drop a table
      if($mysqli->query("DROP TABLE job_tbl")); {
        printf("Table job_tbl deleted or dropped successfully");
      }

      if($mysqli->errno) {
        printf("Table job_tbl not dropped successfully");
      }
      $mysqli->close();

      // creating database

    ?>
</body>
</html>