<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
          <div class="card mx-auto w-50 mt-5">
              <div class="card-header text-center">
                 Can I DRINK? APP v10 
              </div>
              <div class="card-body">
                  <form method="post">
                      <p class="text-center">Enter Age</p>
                      <input type="text" name="num" id=""  class="form-control mt-3">
                      <button type="submit" name="determine" class="btn btn-success mt-3 w-100">Determine</button>
                  </form>
               </div>
          </div>
     </div>
  
      <?php
      if(isset('determine')){
        $num = $_POST['num'];
        if($num >= 20){
          echo "<div class = 'alert alert-success mt-3 text-center'><strong>Conglatulation!</strong> You Can Drink!</div>";
        }
        else{
          echo "<div class = 'alert alert-danger mt-3 text-center'><strong>SORRY!!</strong> You Cannot Drink</div>";
        }

      }
      ?>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>