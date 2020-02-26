<?php

if(isset($_POST['num1'])){
    $num1 = trim($_POST['num1']);
    // $num2 = trim($_POST['num2']);
  

    echo meses($num1);

}

function meses($num1){

    switch($num1){
        case'1':
            return  "Janeiro";
        break;
        case'2':
            return  "Feveriro";
        break;
        case'3':
            return  "Marcos";
        break;
        case'4':
            return  "Maio";
        break;
        case'5':
            return "Abril";
        break;
        case'6':
            return "Junho";
        break;
        case'7':
            return "Julho";
        break;
        case'8':
            return "Agosto";
        break;
        case'9':
            return "Setembro";
        break;
        case'10':
            return "Outubro";
        break;
        case'11':
            return "Novembro";
        break;
        case'12':
            return "Outubro";
        break;
        default:
        return "Entre com valor";
    
    }

}