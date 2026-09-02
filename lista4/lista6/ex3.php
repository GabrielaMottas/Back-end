<?php

echo "Caixa Eletrônico - Itaú <br>";
echo "1 - Consulta saldo, 2 - Fazer saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair<br>";

$opcao=3;

switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650,90";
        break;
    case 2:
        echo "Qual valor?";
        break;
    case 3:
        echo "Qual valor?";
        break;
    case 4:
        echo"Depósito de R$200    -    Data 02/09";
        break;
    default:
        echo"Obrigado!";
        break;
}
?>