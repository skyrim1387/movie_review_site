<?php 
function loop($input){

    for($x = 1; $x <= $input;$x++){
       for ($y = 1; $y <=$x;$y++){
        echo "*";
      
       }  echo "<br>";
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .contain{
            height: 250px;
             width: 30%;
             border-style: solid;
             border-color: red;
             overflow: scroll;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form method="post">
          <div class="form-group w-50 mx-auto">

          
            <label for="">Enter a number</label>
            <input type="number" name="user_input"   class="form-control" id="">
           
              <br>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

            </div>
      </form>
        <div class="contain mx-auto text-center display-4">
        <?php 
        if(isset($_POST['submit'])){
            $input = $_POST['user_input'];

            loop($input);

            
        }
    
    
    ?>
      
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>