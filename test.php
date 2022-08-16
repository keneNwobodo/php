<?php
  $location = "https://www.yahoo.com";
  if($_POST["name"] || $_POST["age"] || $_POST["course"]){
    // validation
    if(preg_match("/[^A-Za-z-]/", $_POST["name"])) {
        die("Name should be strings or alphabets only!");
    }

    if(preg_match("/[^0-9]/")) {
        die("Age shoulf be a number");
    }
    
    echo "Welcome" . $_POST['name'];
    echo "You are " . $_POST['age'] . "years old.";
    echo "You study" . $_POST["course"];
    header("Location:$location");
 
    exiit();
}

?>

<html>
  <body>
    <h1>Hello World!</h1>
    <form action="<?php $_PHP_SELF ?>" method="post">
      Name: <input type="text" name="name" /> Age:
      <input type="text" name="age" />
      <select name="courses">
        <option value="html">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">JavaScript</option>
      </select>
      <input type="submit" />
    </form>
  </body>
</html>
