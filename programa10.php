<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $num3 = trim($_POST['num3']);

    echo verificarMaiorMenor($num1, $num2, $num3);

}

function verificarMaiorMenor($num1, $num2, $num3){
    
    if(($num1 > $num2) && ($num2 > $num3)){
        $maior = $num1;
        $menor = $num3;
        
    }else if(($num1 > $num3) && ($num3 > $num2)){
        $maior = $num1;
        $menor = $num2;

    }else if(($num2 > $num1) && ($num1 > $num3)){
        $maior = $num2;
        $menor = $num3;

    }else if(($num2 > $num3) && ($num3 > $num1)){
        $maior = $num2;
        $menor = $num1;

    }else if(($num3 > $num1) && ($num1 > $num2)){
        $maior = $num3;
        $menor = $num2;
    }else{
        $maior = $num3;
        $menor = $num1;
    }
 return "Numero Maior: ".$maior." Numero Menor ".$menor;
 
}