<?php

function information($fname, $age, $username, $password, $email)
{
    echo "<div class='jumbotron'>";
    echo "<h1 class='text-center text-danger'>User Information</h1>";
    echo "<h5 class = 'mt-3 text-center text-danger'> Your Name is : " . $fname . "</h5>";
    echo "<br>";
    echo "<h5 class = 'mt-3 text-center text-danger'> Your age is :" . $age . "</h5>";
    echo "<br>";
    echo "<h5 class = 'mt-3 text-center text-danger'> Your username is :" . $username . "</h5>";
    echo "<br>";
    echo "<h5 class = 'mt-3 text-center text-danger'> Your password is :" . $password . "</h5>";
    echo "<br>";
    echo "<h5 class = 'mt-3 text-center text-danger'> Your email is :" . $email . "</h5>";
    echo "</div>";
}
function showForm()
{
    echo "<div class='alert alert-success w-50'> Additional Details avout you</div>";
    echo "<form method = 'post'>";
    echo "<input type = 'text' name = 'additional_info' class='form-control mt-5'>";
    echo "<br>";
    echo "<button type = 'submit' name = 'show_info' class='btn btn-outline-success display-3 mt-3'>Show info</button>";
    echo "</form>";
}

function extra_info($extra_info)
{
    echo "<div class='alert alert-dark font-weight-bold text-center' role='alert'> Add Information is : </div>";
    echo "<div class='alert alert-danger font-weight-bold text-center' role='alert'>" . $extra_info . "</div>";
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
        <div class="row  mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        User Details User Function
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <label for="">Enter First Name</label>
                            <input type="text" name="fname" id="" class="form-control">.
                            <label for="">Enter Age</label>
                            <input type="text" name="age" id="" class="form-control">
                            <label for="">Enter Username</label>
                            <input type="text" name="username" id="" class="form-control">
                            <label for="">Enter password</label>
                            <input type="password" name="password" id="" class="form-control">
                            <label for="">Enter Email</label>
                            <input type="text" name="email" id="" class="form-control">

                            <button type="submit" class="btn btn-outline-info btn-block mt-3" name="submit">Submit</button>
                            <button type="submit" class="btn btn-outline-info btn-block" name="add_info">Add info</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    $age = $_POST['age'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];

                    information($fname, $age, $username, $password, $email);
                }
                if (isset($_POST['add_info'])) {
                    showForm();
                }
                if (isset($_POST['show_info'])) {
                    $extra_info = $_POST['additional_info'];

                    echo $extra_info;
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