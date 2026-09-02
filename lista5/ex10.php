<?php

$peso = 60;
$altura = 1.65;
$imc = $peso/($altura*$altura);
echo " seu imc é: ", $imc;
echo "<br>";

if($imc >=19 && $imc <=24){
    echo"Peso ideal";
}
else if($imc >=25 && $imc <=29){
    echo "Sobrepeso";
}
else if($imc >= 30 && $imc<=34){
    echo"Obesidade grau 1";
}
else if($imc >=35 && $imc <= 39){
    echo"Obesidade grau 2";
}
else if($imc >=40){
    echo"Obesidade grau 3";
}
?>