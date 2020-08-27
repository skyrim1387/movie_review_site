<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <input type="text" name="person_name[]" id="">
      <br>
      <input type="text" name="person_name[]" id="">
      <br>
      <input type="text" name="person_name[]" id="">
      <br>
      <input type="text" name="person_name[]" id="">
      <br>
      <input type="text" name="person_name[]" id="">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
       if(isset($_POST['submit'])){
           $names = $_POST['person_name'];
           $arrCount = count($names);

           for($num = 0 ; $num <= $arrCount; $num++){
            echo $names[$num] ;
            echo "<br>"; 

     }
    }
     ?>
</body>
</html>