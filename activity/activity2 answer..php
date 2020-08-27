<?php
function submit($fname, $age, $username, $password, $email)
{
    echo "<'div class = alert alert-success'>YOUR NAME IS:" . $fname;
    echo "<br>";
    echo "<'div class = alert alert-success'>YOUR AGE IS:" . $age;
    echo "<br>";
    echo "<'div class = alert alert-success'>YOUR USERNAME IS:" . $username;
    echo "<br>";
    echo "<'div class = alert alert-success'>YOUR PASSWORD IS:" . $password;
    echo "<br>";
    echo "<'div class = alert alert-success'>YOUR EMAIL IS:" . $email;
    // shift+alt+f  make them order
}
function basicInformation($fname, $age, $email)
{
    echo "YOUR NAME IS:" . $fname;
    echo "<br>";
    echo "YOUR AGE IS:" . $age;
    echo "<br>";
    echo "YOUR EMAIL IS:" . $email;
}

function generateUsernameAndPassword($username, $password)
{
    echo "YOUR USERNAME IS:" . $username;
    echo "<br>";
    echo "YOUR PASSWORD IS:" . $password;
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
        <input type="text" name="fname">
        <br>
        <input type="text" name="age">
        <br>
        <input type="text" name="username">
        <br>
        <input type="text" name="password">
        <br>
        <input type="text" name="email">
        <br>
        <button type="submit" name="submit">Submit</button>
        <br>
        <button type="submit" name="basic">Basic Information</button>
        <br>
        <button type="submit" name="generate">Generate username and password</button>
    </form>


    <?php 
         if(isset($_POST['submit'])){
          $fname = $_POST['fname'];          
          $age = $_POST['age'];          
          $username = $_POST['username'];          
          $password = $_POST['password'];          
          $email = $_POST['email'];          
         }
         if(isset($_POST['basic'])){
            $fname = $_POST['fname'];          
            $age = $_POST['age']; 
            $email = $_POST['email'];      
         }
         if(isset($_POST['generate'])){
            $username = $_POST['username'];          
            $password = $_POST['password'];   
         }
         ?>
</body>

</html>