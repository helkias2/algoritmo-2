<?php
// const VALOR_IMPOSTO = 2

if(isset($_POST['num1']) && !empty($_POST['num2'])){
    $horasTrabalhadas = trim($_POST['num1']); 
    $valor_horas = trim($_POST['num2']);
    $valor_desconto = descontoSalario($valor_horas,$horasTrabalhadas);

    echo "========================================"."`<br>";
    echo "Horas trabalhadas....................:".$horasTrabalhadas."<br>";
    echo "Valor da Horas.......................:".$valor_horas."<br>";
    echo "Valor desconto INSS(10%).............:".$valor_desconto."<br>";
    echo "Salario Liquido......................:".salarioLiquido($valor_horas, $valor_desconto,$horasTrabalhadas);
}


function descontoSalario($valor_horas, $horasTrabalhadas){
    $valor_horas = $valor_horas * $horasTrabalhadas;
   return $salario = ($valor_horas / 100) * 10;
}

function salarioLiquido($valor_horas, $valor_desconto, $horasTrabalhadas){
    return ($valor_horas * $horasTrabalhadas) - $valor_desconto;
 }