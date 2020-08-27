<?php
$personAge = array(
    27 => 'Toukachan',
    22 => 'Maho Kimura',
    26 => 'Naoya Fujimoto'
);

?>


<!doctype html>
<html lang="en">

<head>
    <title>INDEX ARRAYS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="card w-50 mx-auto mt-5">
        <div class="card-header">
            <h3 class="display-4">whose age do you want to know??</h3>
        </div>
        <div class="card-body">
            <form method="post">
                <select name="choosen_name" id="" class="form-control">
                    <?php
                    foreach ($personAge as $age => $name) {
                        echo "<option value ='" . $age . "'>" . $name . "</option>";
                    }

                    ?>


                 


                </select> <br>

                <button type="submit" name="done" id="" class="btn btn-primary btn-lg btn-block">Done</button>
                <button type="submit" name="display_all" id="" class="btn btn-primary btn-lg btn-block">Display Ages</button>


        </div>
    </div>
    </form>
    <br>
    <h2 class="display-2 text-center">
        <?php

        if (isset($_POST['done'])) {
            $age = $_POST['choosen_name'];

            echo "the age of " . $personAge[$age] . " is " . $age;
        }
        elseif (isset($_POST['display_all'])) {
            foreach ($personAge as $age => $names) {

                echo "The age of " . $names . " is " . $age . "<br>";
            }
        }

        ?>
    </h2>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>