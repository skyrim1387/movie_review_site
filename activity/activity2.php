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
    <div class="container mt-5">
        <div class="card mt-5 w-50 mx-auto" >
            <div class="card-header">
              <form method="post"> 
                <div class="row">
                    <div class="col">
                      <p>Enter First Name</p> 
                      <input type="text"  name="fname" id="" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                      <p>Enter Age</p>    
                      <input type="text"  name="age" id=""  class="form-control"> 
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                      <p>Enter Username</p>     
                      <input type="text"  name="uname" id=""  class="form-control"> 
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                      <p>Enter Password</p> 
                      <input type="password"  name="password" id=""  class="form-control"> 
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                      <p>Enter Email</p>   
                      <input type="text"  name="email" id="" class="form-control"> 
                    </div>
                </div>
                
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <button class="btn btn-outline-info btn-block" type="submit" name="allInfo">
                        Submit
                    </button>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <button class="btn btn-outline-danger btn-block" type="submit" name="basicInfo">
                        Basic Information
                    </button>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-12">
                    <button class="btn btn-outline-warning btn-block" type="submit" name="accountInfo">
                        Generate Username and Password
                    </button>
                  </div>
                </div>
              </form> 
            </div>

            <?php
            if(isset($_POST['allInfo'])){
                 $fname = $_POST['fname'];
                 $age = $_POST['age'];
                 $uname = $_POST['uname'];
                 $password = $_POST['password'];
                 $email = $_POST['email'];
                 allInfo($fname,$age,$uname,$password,$email);
                 }

             function allInfo($fname,$age,$uname,$password,$email)
                { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                  <?php echo  "YOUR NAME IS:".$fname; ?>  
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR AGE IS:".$age;?>
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR USERNAME IS:".$uname;?>
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR PASSWORD IS:".$password;?>
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR EMAIL IS:".$email;?> 
                  </p>
                </div>
              </div> 
              
            </div>
            <?php }?>

            <?php
            if(isset($_POST['basicInfo'])){
                 $fname = $_POST['fname'];
                 $age = $_POST['age'];
                 $email = $_POST['email'];
                 basicInfo($fname,$age,$email);
                 }

             function basicInfo($fname,$age,$email)
               { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12" >
                  <p class="form-control text-center">
                  <?php echo "YOUR NAME IS:".$fname; ?>  
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12" >
                  <p class="form-control text-center">
                    <?php echo "YOUR AGE IS:".$age;?>
                  </p>
                </div>
              </div> 

              <div class="row">
                <div class="col-lg-12" >
                  <p class="form-control text-center">
                    <?php echo "YOUR EMAIL IS:".$email;?> 
                  </p>
                </div>
              </div>  
            </div>
            <?php }?>

            <?php
            if(isset($_POST['accountInfo'])){
                 $uname = $_POST['uname'];
                 $password = $_POST['password'];
                 accountInfo($uname,$password);
                 }

             function accountInfo($uname,$password)
                { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR USERNAME IS:".$uname;?>
                  </p>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-12 " >
                  <p class="form-control text-center">
                    <?php echo "YOUR PASSWORD IS:".$password;?>
                  </p>
                </div>
              </div>  
            </div>
            <?php }?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>