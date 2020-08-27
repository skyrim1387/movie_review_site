<?php
include 'dashboardAction.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Our Recommend</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

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
					<?php $Movie->getLoggedInUser()?>
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
        <img src="img/fork-in-road.jpg" alt="Fork Road" class="mx-auto d-block mt-5 w-50 h-50">
        <h4 class="text-center mt-3">Do you want to start our recommend?</h4>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-warning mt-2" data-toggle="modal" data-target="#modal3">Click Start</button>
        </div>

        <!-- Modal -->
        <!-- A-1 -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="modal3Label">Your choice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you like New or Old?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal5" data-dismiss="modal">New</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal10" data-dismiss="modal">Old</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- A-1-1 -->
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="modal5Label">Your choice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you like romance?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal7" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal8" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- A-1-1-1 -->
        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="modal7Label">Your choice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you over 18?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal13" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal13" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- A-1-2 -->
        <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal8Label">Which is your choice?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you play FPS?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal13" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal13" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- B-1 -->
        <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="modal10Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal10Label">Which is your choice?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Truth or Fiction, which do you like?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal11" data-dismiss="modal">Truth</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal12" data-dismiss="modal">Fiction</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- B-1-1 -->
        <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="modal11Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="modal11Label">Your choice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you believe in God?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal13" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal13" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- B-1-2 -->
        <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="modal12Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="modal12Label">Your choice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you interest in show business?
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal13" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal13" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- answer -->

        <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="modal13Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="modal3Label">Our recommend is....</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-warning form-control"><a href="award2019.php?movie_id=1" style="text-decoration: none;" class="text-center text-white">Go to the link</a></button>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-center" data-toggle="modal" data-target="#modal3" data-dismiss="modal">Select Again</button>
                    </div>
                </div>
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