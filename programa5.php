<?php

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);

    echo "Validacao se e Igualdade: ".igualdade($num1, $num2)."<br>";
    echo "Validacao se e diferenca: ".diferrenca($num1, $num2)."<br>";
    echo "Validacao se e Menor: ".menor($num1, $num2)."<br>";
    echo "Validacao se e Maior: ".maior($num1, $num2)."<br>";
    echo "Validacao se e Menor e Igual: ".menorIgual($num1, $num2)."<br>";
    echo "Validacao se e Maior e Igual: ".maiorIgual($num1, $num2)."<br>";
}


function igualdade($num1, $num2){
    return $num1 == $num2 ? "TRUE":"FALSE";
}
function diferrenca($num1, $num2){
    return $num1 <> $num2 ? "TRUE":"FALSE";
};
function menor($num1, $num2){
    return $num1 < $num2 ? "TRUE":"FALSE";
};
function maior($num1, $num2){
    return $num1 > $num2 ? "TRUE":"FALSE";
};
function menorIgual($num1, $num2){
    return $num1 <= $num2 ? "TRUE":"FALSE";
};
function maiorIgual($num1, $num2){
    return $num1 >= $num2 ? "TRUE":"FALSE";
};