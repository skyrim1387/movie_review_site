<?php
function add($num1, $num2)
{
    $add = $num1 + $num2;
    return $add;
}
function sub($num1, $num2)
{
    $sub = $num1 - $num2;
    return $sub;
}
function mult($num1, $num2)
{
    $mult = $num1 * $num2;
    return $mult;
}
function div($num1, $num2)
{
    $div = $num1 / $num2;
    return $div;
}
?>

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
    <div class="container mx-5 mt-3">
        <form method="post">
            <div class="row">
              <div class="col-lg-3">

              </div>
              <div class="col-lg-3">
                Enter First Digit
                <input class="mt-2" type="text" name="num1" id="">
              </div>
              <div class="col-lg-3">                
                Enter Second Digit
                <input class="mt-2" type="text" name="num2" id="">
              </div>
              <div class="col-lg-3">

              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-outline-info btn-block mt-3" type="submit" name="submit">Submint</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        
        ?>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="alert  alert-success">
                        Addition :
                        <?php echo add($num1, $num2); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert  alert-info">
                        Subtraction :
                        <?php echo sub($num1, $num2); ?>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="alert  alert-danger">
                        Multiplication :
                        <?php echo  mult($num1, $num2); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert  alert-warning">
                        Dicision :
                        <?php echo div($num1, $num2); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>