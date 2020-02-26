<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    
    echo "Verificando se e Par: ".soma_de_dois_numeros($num1, $num2);
}


function soma_de_dois_numeros($num1, $num2){
    if($num1 <= 0 && $num2 <= 0){
        return "Numero invalidos";
    }else{ 
        $soma = $num1 + $num2;
        if($soma % 2 == 0){
            return "e Par";
        }else{
            return "Nao e Par";
        }
    }
}