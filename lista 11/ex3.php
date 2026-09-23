<?php

$nota1=$_POST["n1"];
$nota2=$_POST["n2"];
$nota3=$_POST["n3"];
$media= ($nota1+$nota2+$nota3)/3;

echo "Sua média é: ", $media;
if($media >=6){
    echo "<br>Você passou!";
}
else{
    echo"<br>Você não passou";
}
?>