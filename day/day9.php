<?php
// // creating an array
// // 1st form
// $arr = array();
// // 2nd form
// $arr2 = [];
// // 3rd form
// $arr3[] = ''; 
// $arr3[] = ''; 
// $arr3[] = '';

// ----------------------------------------------

// 1. debugging - remove the error 
// 2. debugging tools -
// 3. but- error
// pre-defined function : count() - counts the elements / data inside the array

// $name - ['1', 'kurt', 'true', '1.5'];
// $names = array(1,'kurt', true,1.5);
$names[] = 1;
$names[] = 'kurt';
$names[] = true;
$names[] = 1.5;

// count($name); 
// count the number of the array
//  = ↓

$arrCount = count($names);



for($position = 0; $position < $arrCount, $position++ ;){
    
    echo $names[$position];
echo "<br>";
}

// echo "<pre>";
// print_r($names);
// echo "</pre>";
// //  pre - display as same as html ex space
// echo $name[2];

// echo "<pre>";
//   var_damp($names);
// echo "</pre>";

// // var_damp - check int string bool float
// // array_push - plus array
// array_push($name, 'naoya');
// echo "<pre>";
//   var_damp($names);
// echo "</pre>";

// $name[] = 'maho';
// echo "<pre>";
// print_r($names);
// echo "</pre>";

// unset($name[1]);
// echo "<pre>";
// print_r($names);
// echo "</pre>";



?>