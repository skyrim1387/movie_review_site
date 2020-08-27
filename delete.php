<?php
include 'dashboardAction.php';

$movieID = $_GET['movie_id'];

$Movie->deleteMovie($movieID);


$userID = $_GET['user_id'];

$Movie->deleteUser($userID);

$reviewID = $_GET['review_id'];

$Movie->deleteReview($reviewID);

?>
