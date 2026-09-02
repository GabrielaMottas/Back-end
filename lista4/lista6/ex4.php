<?php

echo" 1 - Pizza<br>2 - Hamburguer<br>3 - Refrigerante<br>4 - Sobremesa<br>5 - Sair<br><br>";

$opcao=1;

switch($opcao){
    case 1:
        echo "Qual sabor?";
        break;
    case 2:
        echo "Qual opção?";
        break;
    case 3:
        echo "Coca Cola ou Guaraná?";
        break;
    case 4:
        echo "Pudim ou sorvete?";
        break;
    default:
        echo"Obrigada";
        break;
}
?>