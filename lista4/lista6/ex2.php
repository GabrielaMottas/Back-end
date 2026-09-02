<?php
// Simulação discando opção 2 no celular
$opcao=2;

switch($opcao){
    case 1:
        echo"Segunda via da fatura";
        break;
    case 2:
        echo"Upgrade no plano";
        break;
    case 3:
        echo"Falar com atendente";
        break;
    default:
        echo"Opção inválida!";
        break;
}
?>