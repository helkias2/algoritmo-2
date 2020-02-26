<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);

    if($num1 !=''){
        echo verificar_E($num1, $num2);
    }else{
        echo "Erro";
    }

}

function verificar_E($num1, $num2){
    if(($num1 < 10) && ($num2 > 0)){
        return "Verdadeiro";
    }else if($num1 > $num2 || $num1 <> $num2){
        return "Verdadeiro";
    }else{
        return "Erro";
    }
}
