<?php
include 'dashboardAction.php';

?>


<!doctype html>
<html lang="en">

<head>
    <title>Add Movie</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">

<body>
    <header>
        <nav>
            <div class="top bg-dark text-light">
                <div class="container-nav topheader">
                    <div class="d-flex justify-content-between">
                        <div class="left ml-3">
                            <a class="text-light logo lead" terget="_blank" href="index.php">Academy Movie Review</a>
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
    <div class="jumbotron">
        <p class="lead text-center  display-4">
            Add Movie
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="dashboardAction.php" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Enter Movie Name" name="movie_name" id="" class="form-control mt-3">
                    <textarea name="movie_info" id="" cols="150" rows="5" placeholder="Enter Movie Info" class="mt-3"></textarea>
                    <select name="release_year" class="form-control mt-3">
                        <option value="" disabled selected>Enter Release Year</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                    </select>
                    <select name="genre" id="" class="form-control mt-3">
                        <option value="" disabled selected>Select Genre</option>
                        <option value="action">Action</option>
                        <option value="comedy">Comedy</option>
                        <option value="fantasy">Fantasy</option>
                        <option value="horror">Horror</option>
                        <option value="romance">Romance</option>
                        <option value="sf">SF</option>
                        <option value="thriller">Thriller</option>
                        <option value="documentary">Documentary</option>
                        <option value="anime">Anime</option>
                        <option value="other">Other</option>
                    </select>
                    <input type="file" name="movie_img" id="" class="mt-3">

                    <button type="submit" name="add_movie" id="" class="btn btn-outline-info btn-block form-control mt-3">Save Movie</button>

                </form>
            </div>
        </div>
    </div>
    <br>

    <footer class="bg-dark w-100 text-white text-center fixed-bottom">
        Copyright © 2020 Academy Movie Review. All rights reserved
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>