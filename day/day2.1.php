<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  1st step : create form -->
    <form method="post">
       <input type="text" name="sample" id="">
       <br>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php 

    //   isset - is set?? - validates if there is data( return true or false)
    // 2nd step: create a condition (if the button is cliked)
    if(isset($_POST['submit'])){

        // if the button has data 
        // if the button is clicked
    // 3nd step: collect data and convert them into variables

        $sample = $_POST['sample'];
    //  4nd step: process the data/variable
        echo $sample;
    }
    ?>
</body>
</html>