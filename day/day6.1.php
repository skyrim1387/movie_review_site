<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <input type="text" name="num1" id="">
      <br>
      <input type="text" name="num2" id="">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <!-- impossible if isset inside isset coz two buttons cant be push -->

    <?php
      if(isset('submit')){
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
        if($num1 < $num2){
          echo "first number is lesser than second number";
        }
        else{
          echo "second number is lesser than first number";
        }

      }

      ?>
</body>
</html>