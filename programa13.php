<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    
    echo taboada($num1, $num2);
}

function taboada($num1,$num2){
    switch($num1){
        case'1':
            return soma($num2);
        break;
        case'2':
            return sub($num2);
        break;
        case'3':
            return mult($num2);
        break;
        case'4':
            return div($num2);
        break;
    }
}

function soma($num2){
    $count = 0;
    while($count <= 10){
        echo $num2. " + " .$count. " = ".($num2 + $count)."<br>";
        $count+=1;
    }
}
function sub($num2){
    $count = 0;
    while($count <= 10){
        echo $num2. " - " .$count. " = ".($num2 - $count)."<br>";
        $count+=1;
    }
}
function mult($num2){
    $count = 0;
    while($count <= 10){
        echo $num2. " x " .$count. " = ".($num2 * $count)."<br>";
        $count+=1;
    }
}
function div($num2){
    $count = 0;
    while($count <= 10){
        echo $num2. " / " .$count. " = ".($num2 / $count)."<br>";
        $count+=1;
    }
}