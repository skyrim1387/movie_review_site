<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <!-- input number to how many times you want the loop to occur -->
        <input type="number" name="input_num" id="" placeholder="Enter a number">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $stopper = $_POST['input_num'];

            echo "<form method = 'post'>";
            // looping of the form input
            for($starter = 1; $starter <= $stopper; $starter++){
                ?>
                    <input type="text" name="author[]" placeholder=" Enter A-Name">
                    <br>
                    <input type="text" name="book[]" id="" placeholder="Enter B-Name">
                    <br>
                <?php
            }
            echo "<button type='submit' name='save_book'>Submit</button>";
            echo "</form>";
        }elseif(isset($_POST['save_book'])){
            // gettign the arrays from the form
            $books = $_POST['book'];
            $author = $_POST['author'];
            // counting the length of the arrays: YOU DONT NEED TO COUNT THE OTHER ARRAY. WHY? ITS BECAUSE THESE TWO INPUT TEXTS ARE ALWAYS DISPLAYING BY PAIR. MEANING IF YOU WANT TO DISPLAY 3 INPUTS YOU WILL GET 6 IN TOTAL.
            $arrLenght = count($books);

            // display all of the data inside the aray
            for($starter = 0; $starter < $arrLenght; $starter++){
                echo "Book Name: ".$books[$starter];
                echo "<br>";
                echo "Author Name: ".$author[$starter];
                echo "<br>";
            }


        }
    
    ?>
</body>
</html>