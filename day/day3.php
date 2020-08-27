<?php
// 1. can be used repeatedllly
// 2. wont run automatically
// 3. waits for the call


// function creation 


function helloworld() {
// block of code to execute
   echo "hello world";
} 




helloworld();

function familyName($fname){
   echo $fname."kimura";

}


familyName('Maho');
echo "<br>";
familyName('naoya');
echo "<br>";
familyName('kurt');



function add($num1,$num2){
      echo $num1 + $num2;
}

echo "<br>";
echo add(10,15);







?>