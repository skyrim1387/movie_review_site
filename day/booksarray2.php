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
        <div class="row">
            <div class="col-lg-6">
                <div class="card mx-auto w-75 mt-5">
                    <div class="card-header bg-danger text-light">
                        How many books do you want to save??
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input type="number" name="length" placeholder="How many?" class="form-control">
                            <br>
                            <button type="submit" name="submit" class="btn btn-outline-primary">Generate</button>
                        </form>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 pb-5">
                <?php
                if (isset($_POST['submit'])) {
                    $length = $_POST['length'];

                    for ($x = 1; $x <= $length; $x++) {
                ?>
                        <div class="jumbotron mt-5">
                            <form method="post">
                                <p class="lead text-center">Book Information</p>
                                <div class="row ">

                                    <div class="col-lg-6">
                                        <input type="text" name="book_name[]" placeholder="Enter Book name" class="form-control">

                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="author[]" placeholder="Enter Author name" class="form-control">

                                    </div>

                                </div>

                        </div>
                    <?php
                    }
                    ?>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <button type="submit" name="save" class="btn btn-outline-info w-50 d-block mx-auto"> save </button>
                        </div>
                    </div>


                    </form>


                    <?php
                } elseif (isset($_POST['save'])) {
                    $bookname = $_POST['book_name'];
                    $author = $_POST['author'];
                    $arrayLength = count($author);

                    for ($x = 0; $x < $arrayLength; $x++) {



                    ?>
                        <div class="row mt-5">
                            <table class="table table-bordered table-danger text-light table-hover table-striped">
                                <thead>
                                    <th class="w-50">Book Name</th>
                                    <th class="w-50">Book Author</th>
                                </thead>
                                <tbody>
                                    <td class="w-50"><?php echo $bookname[$x]?></td>
                                    <td class="w-50"><?php echo $author[$x]?></td>
                                </tbody>
                            </table>



                        </div>




                <?php
                    }
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