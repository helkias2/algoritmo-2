<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);

    echo verifica_sexo($num1);
}

function verifica_sexo($num1){
    if($num1 == "M" || $num1 == "m" ){
        return "Masculino";
    }else{
        return "Feminino";
    }

}