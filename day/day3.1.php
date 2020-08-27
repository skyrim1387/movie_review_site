<?php
function add($num1,$num2){
    echo $num1 + $num2;


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
    <form method="post">
      <input type="number" name="num1" id="">
      <br>
      <input type="number" name="num2" id="">
      <br>
      <button type="submit" name="calc">add!</button>
    </form>

<?php
   if(isset($_POST['calc'])){
       $number1 = $_POST['num1'];
       $number2 = $_POST['num2'];

       add($number1,$number2);

   }

?>

</body>
</html>