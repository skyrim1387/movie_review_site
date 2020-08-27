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
    <form method="post">
      <div class="box">
        No.of product to buy
        <input type="number" name="products">
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
    <hr>

    <?php
    if (isset($_POST['submit'])) {
      $products = $_POST['products'];

      for ($x = 1; $x <= $products; $x++) {
    ?>

        <div class="w-100">
          <form method="post">
            Quantity
            <input type="number" name="quantity[]">
            Price
            <input type="number" name="price[]">
          <?php
        } ?>
          <br>
          <input type="submit" name="compute" value="compute">
          </form>
        </div>
      <?php
    } elseif (isset($_POST['compute'])) {
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      $sum = 0;
      $arrayCount = count($quantity);
      
?>
        <div class="row mt-5 w-50 mx-auto">
          <table class="table table-striped">
            <thead>
              <tr>
                <th><strong>Quantity</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Amount<strong></th>
              </tr>
            </thead>
            <tbody>
              <!-- for( $x = 1 $x < count($quantity); $x++)  is okey-->
<?php
      for ($x = 0; $x < $arrayCount; $x++) {
        $amount = $quantity[$x] * $price[$x];
        $sum = $sum + ($quantity[$x] * $price[$x]);
        // iteration 
        
      ?>
              <tr>
                <td><?php echo $quantity[$x]; ?></td>
                <td><?php echo $price[$x]; ?></td>
                <td><?php echo $amount; ?></td>
              </tr>
  <?php
      }
      ?>
              <tr>
                <td>The Amount to be paid is</td>
                <td></td>
                <td><?php echo $sum;?></td>
              </tr>  
            </tbody>
          </table>
        </div>
      <?php
    }
      ?>



  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>