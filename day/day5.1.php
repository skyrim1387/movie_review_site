<?php
function determineAge($birthYear, $currentYear){
    $age = $currentYear - $birthYear;

    return $age;
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
        <input type="text " name="birthYear" placeholder="Enter Birthyear" id="">
        <br>
        <input type="text" name="currentYear" placeholder="Enter Current Year" id="">
        <br>
        <button type="submit" name="calculateAge">Submit</button>
    </form>
<?php
  if(isset($_POST['calculateAge'])){
     $bYear = $_POST['birthYear'];
     $cYear = $_POST['currentYear'];

     echo "Your Birthyear is:" .$bYear;
     echo "<br>";
     echo "Current Year is: ".$cYear;
     echo "<br>";
 
     echo "Your age is: ".determineAge($bYear,$cYear);
 
    }  
  
  
  ?>
</body>
</html>