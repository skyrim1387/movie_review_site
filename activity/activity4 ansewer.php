<?php
  function showForm(){
    echo "<form method = 'post'>";
       echo "<br>";
       echo "input type = 'text' name = 'additional_info' placeholder = 'Enter additional info'>";
       echo "<br>";
    echo "</form>";
  }

  function information($fname, $age, $username, $password, $email){
    echo "Your name is " . $fname;
    echo "<br>";
    echo "Your age is " . $age;
    echo "<br>";
    echo "Your username is " . $username;
    echo "<br>";
    echo "Your password is " . $password;
    echo "<br>";
    echo "Your email is " . $email;
    echo "<br>";
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
  <form action="" method="post">
      <input type="text" name="fname" id="">
      <br>
      <input type="text" name="age" id="">
      <br>
      <input type="text" name="username" id="">
      <br>
      <input type="text" name="password" id="">
      <br>
      <input type="text" name="email" id="">
      <br>
      <button type="submit" name="submit">Submit</button>
      <button type="submit" name="add_info">Add info</button>
  </form>

  <?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email']; 

      information($fname,$age,$username,$password,$email);
    }
    if(isset($_POST['add_info'])){
       showForm();
    }    
    if(isset($_POST['show_info'])){
       $extra_info = $_POST['addtional_info'];

       echo $extra_info;
    }   ?>
</body>
</html>