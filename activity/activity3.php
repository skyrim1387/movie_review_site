<?php
function submit($fname, $age, $username, $password, $email)
{
    echo "Youre name is: " . $fname;
    echo "<br>";
    echo "Youre age is: " . $age;
    echo "<br>";
    echo "Youre username is: " . $username;
    echo "<br>";
    echo "Youre password is: " . $password;
    echo "<br>";
    echo "Youre email is: " . $email;
}
function basicInformation($fname, $age, $email)
{
    echo "Youre name is: " . $fname;
    echo "<br>";
    echo "Youre age is: " . $age;
    echo "<br>";
    echo "Youre email is: " . $email;
}
function generateUsernameAndPassword($username, $password)
{
    echo "Youre username is: " . $username;
    echo "<br>";
    echo "Youre password is: " . $password;
    echo "<br>";
}

// types of errors: 
// Syntax error : not following the rules of 		programming

// logical error : errors that are not visible
// error in the prgoram flow: not                 working properly 

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
        <br>
        <button type="submit" name="basic">Basic Information</button>
        <br>
        <button type="submit" name="generate">Generate username and password</button>
    </form>
    <br>
    <?php 
        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $age = $_POST['age'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            submit($fname,$age,$username,$password,$email);
        }
        if(isset($_POST['basic'])){
            $fname = $_POST['fname'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            basicInformation($fname,$age,$email);

            
        }
        if(isset($_POST['generate'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            generateUsernameAndPassword($username,$password);
            
        }
    
    ?>

</body>

</html>