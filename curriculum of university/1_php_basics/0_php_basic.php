<?php
function section(){
    echo "<br>----------<br>";
}

//!
section();
//Section: Arrays

$person = array(
    "ad"=>"muhammed tarık", 
    "uçar", 
    "jobs"=>[
        "software developer",
        "video editor"
    ],
    20);
    
print_r($person);
echo $person[1];

//!
section();
//Section: Loops
for($i = 0;$i<=10;$i++){
    echo $i;
}

foreach($person as $keys => $element):
    echo $keys."->".$element."<br>";
endforeach;

//!
section();
//Section: functions
$functions = [
    "ilk"=>function(){
        echo "1<br> ";    
    },
    function(){
        echo "2<br>";
    }
];

$functions["ilk"]();

$var = "DENENEN";

$person = array_map(function($value) use($var){
    return $value.$var;
},$person);
print_r($person);
echo "<br>";
$ilk = function($par) use($var){
    echo "test".$par.$var;
};
echo $ilk("deneme");

//!
section();
//section: already defined functions
    /*
        print_r(); print array
        var_dump(); print array with more detail
        explode(); make the string split
        implode(); make the array to string
        count(); array counter
        is_array(); control the array existing
        shuffle(); sort the array randomly
        array_combine(); merge the two array
        array_count_values(); value counter
        array_flip(); reverse the between array keys and values
        array_key_exists(); control the key existing in the array 
    */
?>