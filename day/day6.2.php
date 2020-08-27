<?php

// $name = 'kanike';

// if($name == 'kurt'){
//     echo "you are kurt";
// }elseif($name == 'naoya'){
//     echo "you are naoya";
// }elseif($name == 'maho'){
//     echo "you are maho";
// }else{
//      echo "i dont know you!";
// }

$age = 23;

if($age > 0 AND $age <=60){
   if($age >= 1 AND $age <= 12){
      echo "You are a kid";
   }elseif($age >= 13 AND $age <= 20){
      echo "You are a teen";
   }elseif($age >= 21 AND $age < 35){
      echo "You are an early adult";
   }elseif($age >= 36 AND $age <= 60){
      echo "You are late adult";
   }else{
      echo "You are either too old or too young"; 
   }

}else{
     echo "You re age is not in our record!";
}



?>