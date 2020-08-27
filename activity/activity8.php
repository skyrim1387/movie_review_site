<?php
function totalHours($timeOut,$timeIn){
    $totalHours = $timeOut - $timeIn;
    return $totalHours;
}
function totalAmount ($amount,$excessAmount){
    $totalAmount = $amount + $excessAmount;
    return $totalAmount;
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
        <form action="" method="post" class="mx-5">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class=" mt-5">VEHICLE PARKING CALCULATOR</h3>
                    <div class="div mt-5">
                        plate#
                        <input type="text" name="plate" required>
                    </div>
                    <div class="radio button mt-3">
                        Vehicle Type
                        <input type="radio" name="vehicleType" value="car" checked>
                        <label for="car">Car</label>
                        </input>
                        <input type="radio" name="vehicleType" value="motorBike">
                        <label for="motorbike">Motorbike</label>
                        </input>
                        <input type="radio" name="vehicleType" value="bike">
                        <label for="bike">Bike</label>
                        </input>
                        <input type="radio" name="vehicleType" value="truck">
                        <label for="truck">Truck</label>
                        </input>
                    </div>
                    <div class="mt-3">
                        Time In
                        <input type="text" name="timeIn">
                    </div>
                    <div class="mt-3">
                        Time Out
                        <input type="text" name="timeOut">
                    </div>
                    <div class="mt-3">
                        <button type="reset" name="reset" class="btn btn-outline-danger text-center mx-3">Reset</button>
                        <button type="submit" name="submit" class="btn btn-outline-info text-center mx-3">Calculate</button>
                    </div>
                </div>

                <div class='col-lg-6 item-center'>
                    <h3 class='text-center mt-5'>PARKING BILL</h3>
                    <?php
                    if (isset($_POST['submit'])) {
                        $plate = $_POST['plate'];
                        $vehicleType = $_POST['vehicleType'];
                        $timeIn = $_POST['timeIn'];
                        $timeOut = $_POST['timeOut'];
                        $totalHours = totalHours($timeOut,$timeIn);
                       

                        if ($vehicleType == 'car') {
                            $totalHours = $timeOut - $timeIn;
                            $amount =  30;
                            $excessHours = $totalHours - 3;
                            $excessAmount = $excessHours * 5;
                            $price = totalAmount($amount,$excessAmount);

                            echo "<div class='jumbotron text-center'>";
                            echo    "<div class='mt-2'> plate#:"  . $plate . "</div>";
                            echo    "<div class='mt-2'> Vehicle Type:" . $vehicleType . "</div>";
                            echo    "<div class='mt-2'> Time In:" . $timeIn . "</div>";
                            echo    "<div class='mt-2'> Time Out:" . $timeOut . "</div>";
                            echo    "<div class='mt-2'> Total Hours:" . $totalHours . "</div>";
                            echo    "<div class='mt-2'> Amount to be Paid:" . $price . "</div>";
                            echo "</div>";
                             
                        } elseif ($vehicleType == 'motorBike') {
                            $totalHours = $timeOut - $timeIn;
                            $amount =  20;
                            $excessHours = $totalHours - 2;
                            $excessAmount = $excessHours * 5;
                            $price = totalAmount($amount,$excessAmount);

                            echo "<div class='jumbotron text-center'>";
                            echo    "<div class='mt-2'> plate#:"  . $plate . "</div>";
                            echo    "<div class='mt-2'> Vehicle Type:" . $vehicleType . "</div>";
                            echo    "<div class='mt-2'> Time In:" . $timeIn . "</div>";
                            echo    "<div class='mt-2'> Time Out:" . $timeOut . "</div>";
                            echo    "<div class='mt-2'> Total Hours:" . $totalHours . "</div>";
                            echo    "<div class='mt-2'> Amount to be Paid:" . $price . "</div>";
                            echo "</div>";
                             
                        } elseif ($vehicleType == 'bike') {
                            $totalHours = $timeOut - $timeIn;
                            $amount =  20;
                            $excessHours = $totalHours - 1;
                            $excessAmount = $excessHours * 20;
                            $price = totalAmount($amount,$excessAmount);

                            echo "<div class='jumbotron text-center'>";
                            echo    "<div class='mt-2'> plate#:"  . $plate . "</div>";
                            echo    "<div class='mt-2'> Vehicle Type:" . $vehicleType . "</div>";
                            echo    "<div class='mt-2'> Time In:" . $timeIn . "</div>";
                            echo    "<div class='mt-2'> Time Out:" . $timeOut . "</div>";
                            echo    "<div class='mt-2'> Total Hours:" . $totalHours . "</div>";
                            echo    "<div class='mt-2'> Amount to be Paid:" . $price . "</div>";
                            echo "</div>";
                        }
                        elseif ($vehicleType == 'truck') {
                            $totalHours = $timeOut - $timeIn;
                            $amount =  30;
                            $excessHours =  $totalHours - 3;
                            $excessAmount = $excessHours * 10;
                            $price = totalAmount($amount,$excessAmount);

                            echo "<div class='jumbotron text-center'>";
                            echo    "<div class='mt-2'> plate#:"  . $plate . "</div>";
                            echo    "<div class='mt-2'> Vehicle Type:" . $vehicleType . "</div>";
                            echo    "<div class='mt-2'> Time In:" . $timeIn . "</div>";
                            echo    "<div class='mt-2'> Time Out:" . $timeOut . "</div>";
                            echo    "<div class='mt-2'> Total Hours:" . $totalHours . "</div>";
                            echo    "<div class='mt-2'> Amount to be Paid:" . $price . "</div>";
                            echo "</div>";
                            
                        }
                        // elseif ($timeOut >= 1 and $timeOut <= 24 and $timeIn >= 1 and $timeIn <= 24) {
                        //     echo "<div class='jumbotron text-center'>";
                        //     echo    "<div class='mt-2'> plate#:"  . $plate . "</div>";
                        //     echo    "<div class='mt-2'> Vehicle Type:" . $vehicleType . "</div>";
                        //     echo    "<div class='mt-2'> Time In:" . $timeIn . "</div>";
                        //     echo    "<div class='mt-2'> Time Out:" . $timeOut . "</div>";
                        //     echo    "<div class='mt-2'> Total Hours:" . $totalHours . "</div>";
                        //     echo    "<div class='mt-2'> Amount to be Paid:" . $price . "</div>";
                        //     echo "</div>";
                        // }
                         else {
                            echo "<div class='alert alert-danger display-4 text-center'> Number is incorrect! </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>