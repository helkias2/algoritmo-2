<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    
    echo contador($num1);

}

function contador($num1){
    $count = 1;
    while($count < $num1){
        echo "Valor: ".$count."<br>";
        $count+=1;   
    }
    
}