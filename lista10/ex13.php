<?php
$caracteres = "abcdefghijklmnopqrstuv";

// Embaralha a string e pega apenas os primeiros 8 caracteres
$senha_temporaria = substr(str_shuffle($caracteres), 0, 8);

echo "Sua senha temporária é: " . $senha_temporaria;
// Exemplo de saída: Sua senha temporária é: k7Xb9PqL
?>