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
              <div class="card-header">

              </div>
              <div class="card-body">
                  <form method="post">
                      <input type="text" name="num1" id="" placeholder="Enter num1" class="form-control" required>
                      <input type="text" name="num2" id="" placeholder="Enter num2" class="form-control mt-3" required>
                      <button type="submit" name="calculate" class="btn btn-primary mt-3 w-100">Calculate</button>
                  </form>

                  <br><br>
                  <?php
                    if(isset($_POST['calculate'])){
                        $num1 = $_POST['num1']; 
                        $num2 = $_POST['num2'];

                        $add = $num1 + $num2;
                        $sub = $num1 - $num2;
                        $mult = $num1 * $num2;
                        $div = $num1 / $num2;
                  ?>

                   <div class="jumbotron">
                       <div class="row">
                           <div class="col-lg-12 text-center display-4">
                               <p class="lead">
                                 Addition Result
                                </p>
                                  <?php echo $add ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 text-center display-4">
                                <p class="lead">
                                    Subtraction
                                </p>
                                     <?php echo $sub ?>
                            </div>
                            <div class="col-lg-6 text-center display-4">
                               <p class="lead">
                                  Multiplication
                              </p>
                                  <?php echo $mult  ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center display-4">
                              <p class="lead">
                                Division
                               </p>
                               <?php echo $div ?>
                            </div>
                        </div>
                    </div>   

                  <?php           
                  }

                  ?>
              </div>
          </div>
      </div>




  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>