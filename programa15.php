<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    
    fatorial1($num1);
    fatorial2($num2);

}

function fatorial1($num1){
    $fat = 1;
    for($i = $num1; $i > 1; $i--){
        $fat = $fat * $i;
        echo $fat."<pre>";
    }
    
}
function fatorial2($num2){  
    $fat = 1;
    $count = 1;
    while($num2 > $count){
        $fat = $fat * $num2;
        echo $fat."<br>";
        $num2--;
    }
}
