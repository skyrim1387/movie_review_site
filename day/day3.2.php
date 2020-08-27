<?php
// contatinator - combinator - used to combine php variables and a string
function determineName($person,$age,$address){
    echo "hello there ".$person;
    echo "<br>";
    echo "Your age is ".$age;
    echo "<br>";
    echo "You live in ".$address;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
      <input type="text" name="fname" id="" placeholder="name">
      <br>
      <input type="text" name="age" id="" placeholder="age">
      <br>
      <input type="text" name="location" id="" placeholder="location">

      <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
      if(isset($_POST['submit'])){
         $fname = $_POST['fname'];
         $age = $_POST['age'];
         $location = $_POST['location'];

         determineName($fname,$age,$location);

      }
    ?>

</body>
</html>