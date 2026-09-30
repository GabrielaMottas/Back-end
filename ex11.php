<?php

$nome=$_POST['nome'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];
$IMC=$peso/($altura*$altura);

    if($IMC <=18.5){
        echo "<br>👤 Paciente: $nome";
        echo "<br>⚖️ Peso: $peso";
        echo "<br>📏 Altura: $altura";
        echo "<br>📊 IMC: $IMC";
        echo "<br>Abaixo do peso";
    }
    elseif($IMC >=18.5 && $IMC<=24.9){
        echo "<br>👤 Paciente: $nome";
        echo "<br>⚖️ Peso: $peso";
        echo "<br>📏 Altura: $altura";
        echo "<br>📊 IMC: $IMC";
        echo "<br>Peso normal";
    }
    elseif($IMC >=25 && $IMC <=29.9){
        echo "<br>👤 Paciente: $nome";
        echo "<br>⚖️ Peso: $peso";
        echo "<br>📏 Altura: $altura";
        echo "<br>📊 IMC: $IMC";
        echo "<br>Sobrepeso";
    }
        elseif($IMC >=30){
        echo "<br>👤 Paciente: $nome";
        echo "<br>⚖️ Peso: $peso";
        echo "<br>📏 Altura: $altura";
        echo "<br>📊 IMC: $IMC";
        echo "<br>Obresidade";
    }
    
    echo "<br>O acompanhamento do peso pode ajudar a identificar hábitos que precisam de atenção. <br>Procure um profissional para uma avaliação individualizada.";
    echo"<br>Quer cuidar melhor da sua saúde?";
    echo "<br>Agende uma consulta com nossa nutricionista!";
    
    
?>