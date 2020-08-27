<?php

// arrayName = [$key => $value]
// to access the data, you need the key to get the value 
// syntax: $arrayName[$key]
// associative - associate -> to give / to partner with
    $instruments = array('guitar' => 'talent-one','piano' => 'talent-two','drums' =>'talent-three');

    echo $instruments['guitar'];

// syntax: foreach($arrayName AS $keyvariableName){
    // code goes here
// }

    foreach($instruments as $instrument):
        echo $instrument;
        echo "<br>";

    endforeach;

    echo "<hr>";

    foreach($instruments as $key => $value):
        echo "the key of ". $value . "is" . $key;
        echo "<br>";

    endforeach;

    $index = array(
        'sample1',
        'sample2',
        'sample3',
    );

echo "<hr>";

// index = array( 1 => 'sample1' 2 => 'sample2' 3 => 'sample3')

    foreach($index as $key => $value){
    echo $value;
    echo "<br>";
}
?>