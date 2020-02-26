<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    
     loop($num1);

}

function loop($num1){
    for($i = 10; $i >= 0; $i--){
       echo $num1." x ".$i." = ".($num1 * $i)."<br>";
    }
}