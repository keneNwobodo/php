<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
      $d = date("D");

      if($d == "FRI")
      echo "Have a nice day";

      else 
      echo "Today is a nice day!";

      // using switch operator
      switch($d) {
        case "Mon":
          echo "Today is Monday";
          break;
          case "Tue":
            echo "Today is Tuesday";
            break;
            case "Wed":
              echo "Today is Wednesday";
              break;
              default:
              echo "I don't know if";
      }
    ?>
  </body>
</html>
