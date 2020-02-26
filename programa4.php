<?php

const QTD_WATT = 5;
const DESCONTO = 15;

if(isset($_POST['num1']) && !empty($_POST['num2'])){

    $salarioMinimo = trim($_POST['num1']);
    
    $quilowattSalario = trim($_POST['num2']); 

    $valor_quilowatt = calcularWatt($salarioMinimo);
    
    $valor_pago = valor_pago_n($salarioMinimo,$quilowattSalario, $valor_quilowatt);

    $valor_pago_desconto = valor_pago_desconto_n($valor_pago);

    echo"============================================="."<br>";
    echo"Salario Minimo...............................".$salarioMinimo."<br>";

    echo"Quantidade de quilowatt......................".$quilowattSalario."<br>";

    echo"Valor de cada quilowatt......................".$valor_quilowatt."<br>";

    echo"Valor de pago................................".$valor_pago."<br>";

    echo"Valor a ser pago com desconto................".$valor_pago_desconto."<br>";

}


function calcularWatt($salarioMinimo){
    return $salarioMinimo / QTD_WATT;
}

function valor_pago_n($salarioMinimo,$quilowattSalario, $valor_quilowatt){
    return  $salarioMinimo -  ($quilowattSalario * $valor_quilowatt);
}

function valor_pago_desconto_n($valor_pago){
    return  $valor_pago - (($valor_pago * DESCONTO) / 100);

}