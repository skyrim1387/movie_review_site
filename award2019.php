<?php
include 'dashboardAction.php';

// if (empty($_SESSION['movie_id'])) {
$movieID = $_GET['movie_id'];
$reviewID = $_GET['review_id'];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Award 2019</title>
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
        <div class="row mt-3">
            <div class="col-lg-6 mt-3">
                <iframe width="500" height="315" src="https://www.youtube.com/embed/Wg_Ql89fWy4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php
                foreach ($Movie->displayMovie2019() as $row) {
                ?>
                    <br>
                    <h2><?php echo $row['movie_name']; ?> <?php echo $row['release_year']; ?></h2>
                    <p><?php echo $row['movie_info']; ?></p>
                    <p><b>Genre : </b><?php echo $row['genre']; ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 mt-4">
                <h4><b>Average <span class="fa fa-star" id="avg"><?php $row_average = $Movie->avgRate($movieID);echo ROUND($row_average['average'], 2); ?></b>
                <span class="ml-4">All reviews : <?php echo $Movie->reviewerCount($movieID); ?></span>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-lg ml-5" data-toggle="modal" data-target="#modelID1">Review</button></h4>

                <!-- Modal -->
                <div class="modal fade" id="modelID1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Review & Comment</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="dashboardAction.php" method="post">
                                        Your name <br>
                                        <input type="hidden" name="movie_id" value="<?php echo $movieID ?>">
                                        <input type="text" name="reviewer" placeholder="Enter your name" required><br>
                                        Rate <br>
                                        <select name="rate" required>
                                            <option value="1">★</option>
                                            <option value="2">★★</option>
                                            <option value="3">★★★</option>
                                            <option value="4">★★★★</option>
                                            <option value="5">★★★★★</option>
                                        </select> <br>
                                        <textarea name="comment" id="" cols="5" rows="5" placeholder="Enter Your Review Comment" class="form-control mt-3" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="review" class="btn btn-warning">Review</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="comment-box-wrapper">
                    <h4 class="mt-2">Comment&Review</h4>

                    <?php if ($Movie->displayPost($movieID) == FALSE) { ?>
                        <div class="comment-box shadow-none p-1 mb-2 bg-light rounded">
                            <div class="comment-content p-2">
                                <div class="commenter-head">
                                    <span>Adam</span>
                                    <span>★3</span>
                                    <span class="float-right small .text-muted">2020-08-15 06:33</span>
                                </div>
                                <div class="comment-body">
                                    <span class="comment">This is sample comment</span>
                                </div>
                            </div>
                        </div>
                        <?php } else {
                        foreach ($Movie->displayPost($movieID) as $row) {
                            $reviewID = $row['review_id'];
                        ?>

                        <!-- display review status -->

                            <div class="comment-box shadow-none p-1 mb-2 bg-light rounded">

                                <div class="comment-content p-2">
                                    <div class="commenter-head">
                                        Name: <span><?php echo $row['reviewer']; ?></span>
                                        <span>★<?php echo $row['review_rate']; ?></span>
                                        <span class="float-right small .text-muted"><?php echo $row['review_time']; ?></span>
                                    </div>
                                    <div class="comment-body">
                                        <span><?php echo $row['review_comment']; ?></span>
                                        <br>
                                        <span class="text-info" style="cursor: pointer;" data-toggle="modal" data-target="#model2ID_<?php echo $reviewID ?>">Reply
                                         <?php $row_count = $Movie->commentCount($reviewID); echo $row_count['cnt'];?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- post reply -->

                            <div class="modal fade" id="model2ID_<?php echo $reviewID ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Replies</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php if ($Movie->allMessage($reviewID) == FALSE) { ?>
                                                <div class="comment-box shadow-none bg-light rounded">
                                                    <div class="comment-content p-2">
                                                        <div class="comment-body">
                                                            <span class="comment">No Comment <?php echo $messageID ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } else {
                                                foreach ($Movie->allMessage($reviewID) as $row) {
                                                    $reviewID = $row['review_id'];
                                                ?>
                                                    <div class="comment-box shadow-none bg-light rounded mt-2">
                                                        <div class="comment-content p-2">
                                                            <div class="commenter-head">
                                                                Name: <span><?php echo $row['messenger']; ?></span>
                                                                <span class="float-right small .text-muted"><?php echo $row['message_time']; ?></span>
                                                            </div>
                                                            <div class="comment-body">
                                                                <span><?php echo $row['message_content']; ?></span>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php }
                                            } ?>
                                            <form action="dashboardAction.php" method="post" class="mt-3">
                                                <input type="hidden" name="movie_id" value="<?php echo $movieID ?>">
                                                <input type="hidden" name="review_id" value="<?php echo $reviewID ?>">

                                                <input type="text" name="messenger" placeholder="Enter your name" class="mt-2" required><br>
                                                <textarea name="message_content" id="" cols="3" rows="3" placeholder="Enter Your reply" class="form-control mt-2" required></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="message" class="btn btn-primary">Post</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                    <?php    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <br><br>

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