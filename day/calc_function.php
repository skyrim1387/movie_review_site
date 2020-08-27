<?php
function addition($num1, $num2)
{
    $total =  $num1 + $num2;

    return $total;
}
function subtraction($num1, $num2)
{
    $difference = $num1 - $num2;

    return $difference;
}
function multiplication($num1, $num2)
{
    $product = $num1 * $num2;

    return $product;
}
function division($num1, $num2)
{
    $quotient = $num1 / $num2;

    return $quotient;
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
    <div class="container">
        <form method="post">
            <div class="row mt-5 w-50 mx-auto">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Enter First Digit</label>
                        <input type="text" name='num1' class="form-control">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Enter Second Digit</label>
                        <input type="text" name="num2" class="form-control">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type='submit' name="calculate" class="btn btn-outline-primary btn-block">Submit</button>
                </div>
            </div>
        </form>

        <?php

        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];


        ?>
            
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="alert alert-success">
                    Addition :
                        <?php echo addition($num1, $num2) ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                    Subtraction :
                        <?php echo subtraction($num1, $num2) ?>
                    </div>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="alert alert-danger">
                    Multiplication :
                        <?php
                        echo multiplication($num1, $num2);
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-warning">
                    Division: 
                        <?php
                            echo division($num1,$num2);

                        ?>
                    </div>
                </div>
            </div>

        <?php

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