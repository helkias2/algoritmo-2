<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);

   echo  verificarNumeros($num1, $num2);

}
function verificarNumeros($num1, $num2){
    if($num1 > $num2){
        $num1 = $num1 + $num2;
        $num2 = $num1 - $num2;
        $num1 = $num1 - $num2;
    }
    return "VALOR de A: ".$num1." VALOR de B: ". $num2;
}