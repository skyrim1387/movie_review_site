<?php
include 'dashboardAction.php';

?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>

<body>
    <header>
        <nav>
            <div class="top bg-dark text-light">
                <div class="container-nav topheader">
                    <div class="d-flex justify-content-between">
                        <div class="left ml-3">
                            <a class="text-light logo lead line-block" terget="_blank" href="index.php">Academy Movie Review</a>
                        </div>
                        <div class="right mr-3">
                            <?php $Movie->getLoggedInUser() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom bg-light sticky-top shadow-sm">
                <div class="container-nav">
                    <ul class="nav nav-bottom nav-fill">
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link text-dark dropdown-toggle" terget="_blank" href="#" data-toggle="dropdown"><span class="d-none d-sm-inline-block d-md-inline-block">Movie List</span></a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="list1.php">2011～2020</a>
                                <a class="dropdown-item" href="#">2001～2010 (Coming Soon)</a>
                                <a class="dropdown-item" href="#">1991～2000 (Coming Soon)</a>
                                <a class="dropdown-item" href="#">1981～1990 (Coming Soon)</a>
                                <a class="dropdown-item" href="#">1971～1980 (Coming Soon)</a>
                                <a class="dropdown-item" href="#">1961～1970 (Coming Soon)</a>
                                <a class="dropdown-item" href="#">1950～1960 (Coming Soon)</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" terget="_blank" href="comment.php"><span class="d-none d-sm-inline-block d-md-inline-block">My Comment</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="recommend.php"><span class="d-none d-sm-inline-block d-md-inline-block">Our Recommend</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="login.php"><span class="d-none d-sm-inline-block d-md-inline-block">Login</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="signup.php"><span class="d-none d-sm-inline-block d-md-inline-block">Sign Up</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="jumbotron">
            <p class="lead text-center display-4">
                Edit Movie
            </p>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="dashboardAction.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ?>">
                    <input type="text" placeholder="Enter User Name" name="username" id="" class="form-control mt-3">
                    <input type="text" placeholder="Enter Password" name="password" id="" class="form-control mt-3">
                    <input type="text" placeholder="Enter Email" name="email" id="" class="form-control mt-3">

                    <button type="submit" name="edit_user" id="" class="btn btn-outline-info btn-block form-control mt-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
    <br>

    <footer class="bg-dark w-100 text-white text-center fixed-bottom">
        Copyright © 2020 Academy Movie Review. All rights reserved
    </footer>