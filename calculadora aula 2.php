<?php

$op=1;

while ($op)
{
echo " Calculadora " . PHP_EOL;
echo " 1-Adição (+) " . PHP_EOL;
echo " 2-Subtração (-) " . PHP_EOL;
echo " 3-Divisão (/) " . PHP_EOL;
echo " 4-Multiplicação (*) " . PHP_EOL;

$option= readline ("Digite a operação desejada:") . PHP_EOL;
$num1= readline ("Qual o primeiro número?:") . PHP_EOL;
$num2= readline ("Qual o segundo número?:") . PHP_EOL;
$result=0;

switch ($option)
{   
    case '1': $result=$num1+$num2;
        break;

    case '2': $result=$num1+$num2;
        break;
    
    case '3': $result=$num1/$num2;
        break;

    case '4': $result=$num1*$num2;
        break;
    
    default: echo "Opção Inválida!";
             echo "Tente Novamente";
            break;
}
echo "Resultado: $result" . PHP_EOL;
}

$op= readline ("Gostaria de realizar outra operação?: sim ou nao") . PHP_EOL;

if ($op='SIM' || $op='sim')
{ 
    $op=1;
}
elseif ($op='NAO' || $op='nao')
{
    $op=0;
}
}   