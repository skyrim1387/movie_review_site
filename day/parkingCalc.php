<?php include 'parkFunctions.php' ?>
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
    <div class="container mt-5">
        <div class="card w-50 mx-auto">
            <div class="card-header bg-danger">
                <p class="lead text-center text-light">
                    Parking Calculator: v1.0
                </p>
            </div>
            <div class="card-body">
                <form method="post">
                    <input type="text" name="plate" id="" placeholder="Enter Plate Number" class="form-control" required>
                    <div class="row  mt-3">
                        <div class="col-6">
                            <input type="radio" name="type" value="car" id="" required> Car
                        </div>
                        <div class="col-6">
                            <input type="radio" name="type" value="bike" id="" required> Bicycle
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <input type="radio" name="type" value="motor" id="" required> Motorbike
                        </div>
                        <div class="col-6">
                            <input type="radio" name="type" value="truck" id="" required> Truck
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Hours
                                    </span>
                                </div>
                                <input type="number" placeholder="ENTER TIME-IN" name="time_in_hours" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Mins
                                    </span>

                                </div>
                                <input type="number" name="time_in_mins" placeholder="" id="" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Hours
                                    </span>
                                </div>
                                <input type="number" placeholder="ENTER TIME-OUT" name="time_out_hours" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Mins
                                    </span>

                                </div>
                                <input type="number" name="time_out_mins" placeholder="" id="" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <button type="reset" class="btn btn-outline-warning btn-block">Reset</button>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="generate_price" class="btn btn-outline-success btn-block">Submit</button>
                        </div>
                    </div>

                </form>
                <?php
                if (isset($_POST['generate_price'])) {
                    $plate = $_POST['plate'];
                    $type = $_POST['type'];
                    $time_in_hours = $_POST['time_in_hours'];
                    $time_in_mins = $_POST['time_in_mins'];
                    $time_out_hours = $_POST['time_out_hours'];
                    $time_out_mins = $_POST['time_out_mins'];
                    $totalHours = $time_out_hours - $time_in_hours;

                    $validation = validateUserInput($time_in_hours, $time_out_hours, $time_out_mins);

                    if ($validation == true) {
                        $price = price($type, $time_in_hours, $time_out_hours, $time_in_mins, $time_out_mins);
                ?>
                        <div class="alert alert-success mt-3">
                            Calculation successful. Refer to the reciept here: <a href="#reciept" data-toggle="modal" class="alert-link">Recipt</a>
                        </div>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="reciept" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">KREDO PARKING RECIEPT</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">Plate Number</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $plate ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">V-Type</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $type ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">Time In</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $time_in_hours . ':' . $time_in_mins ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">Time Out</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $time_out_hours . ':' . $time_out_mins ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">Total Hours</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $totalHours ?></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 alert alert-info">Total Price</div>
                                                <div class="col-lg-6 alert alert-success"><?php echo $price ?></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $('#exampleModal').on('show.bs.modal', event => {
                                var button = $(event.relatedTarget);
                                var modal = $(this);
                                // Use above variables to manipulate the DOM

                            });
                        </script>
                    <?php

                    } else {
                    ?>
                        <div class="alert alert-danger mt-3 text-center">
                            Please write the correct input
                        </div>
                <?php
                    }
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