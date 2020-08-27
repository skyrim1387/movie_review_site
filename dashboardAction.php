<?php
include 'classes/Movie.php';
$Movie = new Movie;

// user signup

if (isset($_POST['signup'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$len = strlen($password);

	if ($len < 4) {
		echo "You need to input more than 4 characters";
	} elseif ($len >= 4) {

		$Movie->signUpUser($username, $password, $email);
	}
}

// login

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$Movie->login($username, $password, $email);
}


// ADMIN PAGE

// add movie

if (isset($_POST['add_movie'])) {
	$movieName = $_POST['movie_name'];
	$movieInfo = $_POST['movie_info'];
	$releaseYear = $_POST['release_year'];
	$genre = $_POST['genre'];
	$movieImg = $_FILES['movie_img']['name'];


	$Movie->addMovie($movieName, $movieInfo, $releaseYear, $genre, $movieImg);
}

//  edit movie

if (isset($_POST['edit_movie'])) {
	$movieName = $_POST['movie_name'];
	$movieInfo = $_POST['movie_info'];
	$releaseYear = $_POST['release_year'];
	$genre = $_POST['genre'];
	$movieImg = $_FILES['movie_img']['name'];
	$movieID = $_POST['movie_id'];

	$Movie->editMovie($movieName, $movieInfo, $releaseYear, $genre, $movieImg, $movieID);
}

// add user

if (isset($_POST['add_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];


	$Movie->addUser($username, $password, $email);
}

//  edit user

if (isset($_POST['edit_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$userID = $_POST['user_id'];
	$len = strlen($password);

	if ($len < 4) {
		echo "*You need to input more than 4 characters";
	} elseif ($len >= 4) {
		$Movie->editUser($username, $password, $email, $userID);
	}
}



// post review

if (isset($_POST['review'])) {
	$reviewer = $_POST['reviewer'];
	$reviewRate = $_POST['rate'];
	$reviewComment = $_POST['comment'];
	$movieID = $_POST['movie_id'];
	$userID = $_SESSION['user_id'];
	$reviewTime = date("Y-m-d H:i:s");

	$Movie->postReview($reviewer, $reviewRate, $reviewComment,  $movieID, $userID, $reviewTime);
}



// edit review

if (isset($_POST['edit_review'])) {
	$reviewer = $_POST['reviewer'];
	$reviewRate = $_POST['rate'];
	$reviewComment = $_POST['comment'];
	$movieID = $_POST['movie_id'];
	$userID = $_SESSION['user_id'];
	$reviewTime = date("Y-m-d H:i:s");
	$reviewID = $_POST['review_id'];

	$Movie->editReview($reviewer, $reviewRate, $reviewComment,  $movieID, $userID, $reviewTime, $reviewID);
}

// post reply

if (isset($_POST['message'])) {
	$messenger = $_POST['messenger'];
	$messageContent = $_POST['message_content'];
	$messageTime = date("Y-m-d H:i:s");
	$movieID = $_POST['movie_id'];
	$userID = $_SESSION['user_id'];
	$reviewID = $_POST['review_id'];

	$Movie->postMessage($messenger, $messageContent, $messageTime, $movieID, $userID, $reviewID);
}


