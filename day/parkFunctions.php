<?php 
// MDAS - MULTUPLICATION, DIVISION, ADDITION, SUBTRACTION
function price($type,$timeInHours,$timeOutHours){
    if($type == 'car'){
        $initPrice = 30;
        $hours = $timeOutHours - $timeInHours;
        if($hours > 3){
            $extraHrs = ($hours - 3)*5;
            return $total = $initPrice + $extraHrs;

        }else{
            return $initPrice;
        }
    }elseif($type == 'bike'){
        return 20;

    }elseif($type == 'motor'){
        $initPrice = 20;
        $hours = $timeOutHours - $timeInHours;
        if($hours > 2){
            $extraHrs = ($hours - 2) * 5;
            return $total = $initPrice + $extraHrs;
        }else{
            return $initPrice;
        }

    }else{
        $initPrice = 40;
        $hours = $timeOutHours - $timeInHours;
        if($hours > 3){
            $extraHrs = ($hours - 2) * 5;
            return $total = $initPrice + $extraHrs;
        }else{
            return $initPrice;
        }
    }


}


function validateUserInput($timeInHours,$timeOutHours,$timeOutMins){
    if($timeInHours < 1 OR $timeOutHours >24 OR  $timeOutMins >60){
        return FALSE;
    }else{
        if($timeInHours > $timeOutHours){
            return FALSE;

       
        }else{
        return TRUE;
        }
    
    }
}
?>
