<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add NEW RECORD IN MYSQL DATABASE</title>
</head>
<body>
    <?php
     if(isset($_POST["add"])) {
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "Kene10";
    //   $dbname = "world";

      // connecting to MySQL 
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass);

      if($mysqli->connect_errno) {
        printf("Connect failed: %s<br />", $mysqli->connect_error);
        exit();
      }
      printf("Connected successfully.<br />");
      
      //create a database
    //   if($mysqli->query("CREATE DATABASE GROOMS")) {
    //     printf("Database created successfully");
    //   }
    //   // if failed
    //   if($mysqli->errno){
    //     printf("Could not create database");
    //   }

      // selelcting a database
      $retval = mysqli_select_db($mysqli, "world");
      if(!$retval) {
        die("Database could not be selected!" . $mysqli_error($mysqli));
      }
      echo "Database World selected successfully!";

      if (!get_magic_quotes_gpc()) {
        $sales_title = addslashes($_POST["sales_title"]);
        $sales_author = addslashes($_POST["sales_author"]);
      } else {
         $sales_title = $_POST["sales_title"];
         $sales_author = $_POST["sales_author"];
      }

      $submission_date = $_POST["submission_date"];
      $sql = "INSERT INTO sales_tbl".
      "(sales_title, sales_author, submission_date)"."VALUES".
      "('$sales_title', '$sales_author', '$submission_date')";

      if($mysqli->query($sql)) {
        printf("Record inserted successfully!");
      }
      if($mysqli->query(errno)) {
        printf("Could not insert RECORD!");
      }
      // create a table
    //   $sql = "CREATE TABLE sun_tbl(".
    //     "sun_id INT NOT NULL AUTO_INCREMENT, ".
    //     "sun_title VARCHAR(100) NOT NULL, ".
    //     "sun_author VARCHAR(40) NOT NULL, ".
    //     "submission_date DATE, ".
    //     "PRIMARY KEY (sun_id)); ";
    //     if($mysqli->query($sql)) {
    //       printf("Table sun_tbl created successfully");
    //     }
    //     if($mysqli->errno) {
    //       printf("Could not create sun_tbl");
    //     }

     
      $mysqli->close();

      // creating database
    } else {
   
    ?>

    <form method="post" action="<?php $_PHP_SELF ?>">
      <table width="600" border="0" cellpadding="2" cellspacing="1">
        <tr>
            <td width="250">SALES TITLE </td>
            <td><input name="sales_title" type="text" /></td>
        </tr>

        <tr>
            <td width="250">SALES AUTHOR </td>
            <td><input name="sales_author" type="text" /></td>
        </tr>

        <tr>
            <td width="250">SUBMISSION DATE [yyyy-mm--dd] </td>
            <td><input name="submission_date" type="text" /></td>
        </tr>

         <tr>
            <td width="250"> </td>
            <td></td>
        </tr>

         <tr>
            <td width="250"></td>
            <td><input name="add" id="add" type="submit" value="ADD A SALE" /></td>
        </tr>

      </table>
     
    </form>
   <?php
    }
   ?>
</body>
</html>