<?php
include 'dashboardAction.php';

?>


<!doctype html>
<html lang="en">

<head>
	<title>list1</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
	<div class="container mx-5">
		<h1 class="mt-3">Academy Movie Review 2011~2020</h1>
		<hr>
		<?php if ($Movie->displayMovie() == FALSE) {

			ECHO "NO MOVIE";
		}else{
			foreach ($Movie->displayMovie() as $row) {
				$movieID = $row['movie_id'];
		?>
				<div class="row">
					<div class="col-lg-6 mt-3 mb-3">
						<a href="award<?php echo $row['release_year']; ?>.php?movie_id=<?php echo $movieID ?>"><img src="img/<?php echo $row['movie_img'];?>" alt="No data" class="w-100 h-100"></a>
						<!-- <a href="award2019.php?movie_id=1"><img src="img/<?php echo $row['movie_img'];?>" alt="No data" class="w-100 h-100"></a> -->
					</div>
					<div class="col-lg-6">
						<br>
						<h2>Release Year : <?php echo $row['release_year']; ?></h2>
						<h3><?php echo $row['movie_name']; ?></h3>
						<p><?php echo mb_substr($row['movie_info'], 0, 300); ?>....</p>
						<p>Genre : <?php echo $row['genre']; ?></p>
						<button class="btn btn-warning"><a class="text-white" style="text-decoration: none;" href="award2019.php?movie_id=<?php echo $movieID ?>">Review</a></button>
						<!-- <button class="btn btn-warning"><a class="text-white" style="text-decoration: none;" href="award2019.php?movie_id=1">Review</a></button> -->
					</div>
				</div>
				<hr>
		<?php    }

		}
		?>



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