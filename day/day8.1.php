<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <input type="number" name="stopper" id="">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php
      if(isset($_POST['submit'])){
            $loopStopper = $_POST['stopper'];
            for($starter=1; $starter <= $loopStopper; $starter++){
            echo "this is loop number" . $starter;
            echo "<br>";
          }
      }
    ?>
</body>
</html>