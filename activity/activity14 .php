<?php 
$personAge = array(
    23 => 'Kurt John Mojado',
    22 => 'Maho Kimura',
    26 => 'Naoya Fujimoto'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        select a name    
        <select name="key" id="">
            <?php 
                foreach($personAge as $key => $value){
                    ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php 
                }
            ?>
        </select>
        <button type="submit" name="submit">Submit</button>
        <button type="submit" name="show_all">Submit</button>
    </form>
    <?php 
        if(isset($_POST['show_all'])){
            foreach($personAge as $key => $value){
                echo "the age of ".$value." is ".$key;
                echo "<br>";
            }

        }elseif(isset($_POST['submit'])){
            $key = $_POST['key'];

            echo "the age of ".$personAge[$key]." is ".$key;

        }
    ?>
</body>
</html>