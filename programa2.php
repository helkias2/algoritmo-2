<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    
    $n1 = trim($_POST['num1']);
    $n2 = trim($_POST['num2']);
    $n3 = trim($_POST['num3']);
    $n4 = trim($_POST['num4']);
    $qtdNotas = ($n1 + $n2 + $n3 + $n4);
    if($qtdNotas == 0){
        echo "Valores indevidos!";
    }else{
        $media = $qtdNotas / 4;
        echo "minha media e ".$media;
    }
}