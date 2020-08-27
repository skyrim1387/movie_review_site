<?php
$personAge = array(
    23 => 'Kurt John Mojado', 
    22 => 'Maho Kimura', 
    26 => 'Naoya Fujimoto');
?>
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
    <div class="container w-50 mt-5 mx-auto">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    whose age do you want to know??
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <select name="personage" id="" class="mt-1 form-control">                        
                          <?php
                         
                        foreach($personAge as $key => $value){
                            ?>
                        <option value="<?php echo $key?>"><?php echo $value?>
                        </option>
                        <?php 
                        }
                        ?>
                        </select>
                        <button type="submit" name="done" class="text-center btn btn-outline-info form-control mt-2">Done</button><br>
                        <button type="submit" name="all" class="text-center btn btn-outline-info mt-1 form-control">Display Ages</button>
                    </form>
                </div>
            </div>
            <?php  
            if(isset($_POST['done'])){
                $key = $_POST['personage'];
                echo "The age of" . $personAge[$key] . "is" . $key;
            
            
            }elseif (isset($_POST['all'])) {
                   foreach ($personAge as $key => $value) {
                    echo "The age of" . $value . "is" . $key;
                    echo "<br>";
                }
            }
            ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>