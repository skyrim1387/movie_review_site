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
           $data = $_POST['person_name'];
           
        //    
           print_r($data);
       
        }
     ?>
</body>
</html>