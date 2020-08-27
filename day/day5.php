<?php
// 1, use only 1 return
//  use return if you have 1 result data
//  for display : use echo

// function old($num){
//     echo $num;
// }

// old(5) + old(7);  = 570



// function old(int $num){
//     return $num;
// }

// old(5) + old(7);     = 12

function old(bool $name){
    return false;
}


function determineAge(int $bYear, int $cYear){
   $age = $cYear-$bYear;

   return $age;
}

function add($num1,$num2){

    $total = $num1 + $num2;
    
     return $total;

}

function sub($num1,$num2){
   $sub = $num1 - $num2;

   return $sub;

}

 echo sub(15,10);



$result1 = add(5,15);
$result2 = add(2,3);




// echo $result1;
// echo "<br>";
// echo $result2;
echo "<br>";
echo $result1 + $result2;

// echo determineAge(1993,2020);
?>

