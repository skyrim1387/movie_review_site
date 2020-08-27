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
    <div class="container mx-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="card mx-auto w-75 mt-5">
                        <div class="card-header bg-danger text-light">
                            How many books do you want to save?
                        </div>
                        <div class="card-body">
                            <input type="number" name="books" id="" placeholder="How many?" class="form-control">
                            <button type="submit" name="generate" class="btn btn-outline-primary mt-3">Generate</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 pb-5">
                <?php
                if (isset($_POST['generate'])) {
                    $books = $_POST['books'];

                    for ($x = 0; $x < $books; $x++) {
                ?>
                        <div class="jumbotron text-center mt-3">
                            <form method="post">
                                <h5 class="text-center">Book Information</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="bName[]" placeholder="Enter Book name" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="aName[]" placeholder="Enter Author name" class="form-control">
                                    </div>
                                </div>
                        </div>



                    <?php
                    } ?>

                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <button type="submit" name="save" class="btn btn-outline-info mt-3 form-control">Save</button>";
                        </div>
                    </div>
                    </form>

                <?php
                    }elseif (isset($_POST['save'])) {
                        $bName = $_POST['bName'];
                        $aName = $_POST['aName'];
                        $arrayCount = count($bName);
                        
                        for ($x = 0; $x < $arrayCount; $x++){
                ?>
                          <div class="row mt-5">
`                         <table class="table table-bordered table-danger text-light table-hover table-striped">
                          <thead>
                          <th class="w-50">Book Name</th>
                          <th class="w-50">Author Name</th>
                          </thead>
                          <tbody>
                          <td class="w-50"><?php echo $bName[$x]?> </td>
                          <td class="w-50"><?php echo $aName[$x] ?></td>
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