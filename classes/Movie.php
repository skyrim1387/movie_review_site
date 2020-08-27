<?php
include 'Database.php';

class Movie extends Database
{
    // user signup

    public function signUpUser($username, $password, $email)
    {


        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password', '$email')";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {

            header('location:thanks.php');
        } else {
            "Error. sign up user";
        }
    }

    // login

    public function login($username, $password)
    {

        $sql = "SELECT * FROM  users  WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);


        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];



            if ($row['user_status'] == 'U') {
                header('location: thanks.php');
            } else
                header('location:admin.php');
        } else {
            echo "<p class=alert alert-danger text-center> Error: login</p>";
        }
    }

    // // all block without who has account

    // public function getLoggedInUser()
    // {
    //     if($_SESSION["user_id"] != true){
    //         header("Location: login.php");
    //         exit;
    //      }else{
    //          echo "<a href='logout.php' class='text-white'>Logout</a>";
    //      }


    // }

    // all  permission for even no account


    public function getLoggedInUser()
    {
        if ($_SESSION["user_id"] != true) {
            echo "<p text-white>Guest Page</p>";
        } else {
            echo "<a href='logout.php' class='text-white'>Logout</a>";
        }
    }

    // ADMIN PAGE

    // add movie

    public function addMovie($movieName, $movieInfo, $releaseYear, $genre, $fileName)
    {

        $target_dir = 'img/';
        $target_file = $target_dir . basename($fileName);
        $escapedMovieInfo = $this->conn->real_escape_string($movieInfo);
        $sql = "INSERT INTO movies (movie_name, movie_info, release_year, genre, movie_img) VALUES ('$movieName', '$escapedMovieInfo', '$releaseYear', '$genre','$fileName')";
        $result = $this->conn->query($sql);

        if ($result == true) {
            move_uploaded_file($_FILES['movie_img']['tmp_name'], $target_file);
            header('location:movie_list.php');
        } else {
            echo "error in adding movie";
        }
    }



    // edit movie

    public function editMovie($movieName, $movieInfo, $releaseYear, $genre, $fileName, $movieID)
    {

        $target_dir = 'img/';
        $target_file = $target_dir . basename($fileName);
        $escapedMovieInfo = $this->conn->real_escape_string($movieInfo);
        $sql = "UPDATE movies SET movie_name = '$movieName', movie_info = '$escapedMovieInfo', release_year = '$releaseYear', genre = '$genre', movie_img = '$fileName' WHERE movie_id = '$movieID'";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            move_uploaded_file($_FILES['movie_img']['tmp_name'], $target_file);
            header('location:movie_list.php');
        } else {
            echo "error in editing";
        }
    }

    // delete movie

    public function deleteMovie($movieID)
    {
        if ($this->conn->query("DELETE FROM movies WHERE movie_id = '$movieID'") == true) {
            header('location:movie_list.php');
        } else {
            echo "error in deleting";
        }
    }

    // movie list in admin

    public function displayMovie()
    {
        $sql = "SELECT * FROM movies";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }

    // add user

    public function addUser($username, $password, $email)
    {
        $hushPassword = md5($password);
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$hushPassword', '$email')";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {

            header('location:user_list.php');
        } else {
            "Error. adding user";
        }
    }



    // edit user

    public function editUser($username, $password, $email, $userID)
    {
        $hushPassword = md5($password);
        $sql = "UPDATE users SET username = '$username', password = '$hushPassword',  email = '$email' WHERE user_id = '$userID'";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {

            header('location:user_list.php');
        } else {
            "Error. editing user";
        }
    }

    // delete user

    public function deleteUser($userID)
    {
        if ($this->conn->query("DELETE FROM users WHERE user_id = '$userID'") == true) {
            header('location:user_list.php');
        } else {
            echo "Error deleting user";
        }
    }

    // user list

    public function displayUser()
    {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }


    // all message list
    public function adminAllMessage()
    {
        $sql = "SELECT * FROM messages INNER JOIN reviews ON review.review_id = movies.review_id INNER JOIN movies ON messages.movie_id = movies.movie_id";
        // $sql = "SELECT * FROM reviews INNER JOIN movies ON reviews.review_id=movies.movie_id WHERE reviews.movie_id=movies.movie_id INNER JOIN users ON reviews.user_id=users.user_id WHERE reviews.user_id=users.user_id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }



    // display movie 2019
    public function displayMovie2019()
    {
        $sql = "SELECT * FROM movies WHERE movie_id ='1'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }

    // post review
    public function postReview($reviewer, $reviewRate, $reviewComment, $movieID, $userID, $reviewTime)
    {

        // $_SESSION['movie_id'] = $movieID;
        $escapedReviewComment = $this->conn->real_escape_string($reviewComment);
        $sql = "INSERT INTO reviews (reviewer, review_rate, review_comment, movie_id, user_id, review_time) values ('$reviewer', '$reviewRate', '$escapedReviewComment','$movieID', '$userID', '$reviewTime')";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            header('location:award2019.php?movie_id=' . $movieID);
        } else {
            die("error" . $this->conn->error);
        }
    }

    // display review and comment

    public function displayPost($movieID)
    {
        $_SESSION['movie_id'] = $movieID;
        // $sql = "SELECT * FROM reviews INNER JOIN messages ON reviews.review_id = messages.review_id WHERE reviews.movie_id = '$movieID'";
        $sql = "SELECT * from reviews WHERE movie_id = '$movieID'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }

    // display all post
    public function displayUserPost($userID)
    {
        $sql = "SELECT * FROM users INNER JOIN reviews ON users.user_id = reviews.user_id INNER JOIN movies ON reviews.movie_id = movies.movie_id WHERE reviews.user_id = '$userID'";
        // $sql = "SELECT * FROM reviews INNER JOIN movies ON reviews.review_id=movies.movie_id WHERE reviews.movie_id=movies.movie_id INNER JOIN users ON reviews.user_id=users.user_id WHERE reviews.user_id=users.user_id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }

    // display rate avg

    public function avgRate($movieID)
    {

        $sql = "SELECT AVG(review_rate) AS average FROM reviews  WHERE movie_id ='$movieID'";
        $result = $this->conn->query($sql);

        if ($result->num_rows) {
            return $result->fetch_assoc();
        } else {
            echo "No Data";
        }
    }

    // reviewer count

    public function reviewerCount($movieID)
    {

        $sql = "SELECT * FROM reviews WHERE movie_id = $movieID";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {

            return $result->num_rows;
        } else {
            echo 0;
        }
    }

    // edit review

    public function editReview($reviewer, $reviewRate, $reviewComment, $movieID, $userID, $reviewTime, $reviewID)
    {
        $escapedReviewComment = $this->conn->real_escape_string($reviewComment);
        $sql = "UPDATE reviews SET reviewer= '$reviewer',review_rate= '$reviewRate', review_comment = '$escapedReviewComment', movie_id = '$movieID', user_id = '$userID',review_time ='$reviewTime' WHERE review_id = '$reviewID'";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            header('location:comment.php');
        } else {
            return false;
        }
    }

    // delete review

    public function deleteReview($reviewID)
    {
        if ($this->conn->query("DELETE FROM reviews WHERE review_id = '$reviewID'") == true) {
            header('location:comment.php');
        } else {
            echo "Error deleting review";
        }
    }



    public function postMessage($messenger, $message, $messageTime, $movieID, $userID, $reviewID)
    {

        $escapedMessage = $this->conn->real_escape_string($message);
        $sql = "INSERT INTO messages (messenger, message_content, message_time, movie_id, user_id, review_id) values ('$messenger', '$escapedMessage',  '$messageTime', '$movieID', '$userID', '$reviewID')";
        $result = $this->conn->query($sql);

        if ($result == TRUE) {
            echo header('location:award2019.php?movie_id=' . $movieID);
        } else {
            die("error" . $this->conn->error);
        }
    }

    // display reply post
    public function allMessage($reviewID)
    {
        // $sql = "SELECT * FROM messages INNER JOIN reviews ON messages.review_id = reviews.review_id WHERE messages.message_id = '$messageID'";
        $sql = "SELECT * FROM messages WHERE review_id = '$reviewID'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = array();
            while ($rows = $result->fetch_assoc()) {
                $row[] = $rows;
            }
            return $row;
        } else {
            return FALSE;
        }
    }

    // comment counter

    public function commentCount($reviewID)
    {

        $sql = "SELECT count(message_id) AS cnt FROM messages WHERE review_id = $reviewID";
        $result = $this->conn->query($sql);

        if ($result->num_rows) {
            return $result->fetch_assoc();
        } else {
            echo 0;
        }
    }



}
?>