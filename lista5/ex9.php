<?php
// Calculadora, troque a operação 4 vezes para testar +, -, *

$n1 = 10;
$n2 = 5;
$operacao = "+";

if($operacao == "+"){
    echo "A soma é: ", $n1 + $n2;
}
else if($operacao == "-"){
    echo"A subtração é: ", $n1 - $n2;
}
else if($operacao == "*"){
    echo"A multiplicação é: ", $n1 * $n2;
}
else if($operacao == "/"){
    echo"A divisão é: ", $n1 / $n2;
}
else{
    echo"Operação inválida";
}

?>