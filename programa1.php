<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){

    $salario = trim($_POST['num1']);
    $salarioMinimo = trim($_POST['num2']);
    
    if($salario < 200){
        echo "<script> alert('Nao de certo, o valor e menor!')</script>";
    }else{
        $qtdsalarios = $salario / $salarioMinimo;
        echo "Quantidade de salarios: ".$qtdsalarios;
    }
}