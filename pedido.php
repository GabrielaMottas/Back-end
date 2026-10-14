<?php
// Recebe os dados do formulário
$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'];
$borda = $_POST['borda'];
$cupom = $_POST['cupom'];

// Conta a quantidade de sabores
$qtd = count($sabores);

// Define o preço base da pizza
if ($tamanho == 'Broto') {
    $total = 45;
} else {
    $total = 65;
}

// Soma o preço do refrigerante
if ($refri == 'Coca 2L') {
    $total = $total + 12;
}
elseif ($refri == 'Guaraná 2L') {
    $total = $total + 10;
}
elseif ($refri == 'H20 500ML') {
    $total = $total + 7;
}
elseif ($refri == 'Fanta uva 1L') {
    $total = $total + 10;
}

//Borda
if ($borda != 'Nenhuma') {
    $total = $total + 5;
} else {
    $total = $total + 0;
}

//Cupom
if ($cupom == 'PROMO10') {
    $total = $total - 10;
    $cupom= "Válido (R$10)";
} else {
    $total = $total + 0;
    $cupom= "Inválido";
}


// Junta os sabores escolhidos em um texto
$texto_sabores = implode(', ', $sabores);

// Cria o link do WhatsApp
$msg = "Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri + Borda $borda Total: R$ $total,00";
$link = "https://api.whatsapp.com/send?text=" . urlencode($msg);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria Toscana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="toscana.png" alt="Logo da Pizzaria">
        <h1>🍕 Seu pedido</h1>
        <p>Pizza: <?php echo $tamanho; ?></p>
        <p>Sabores: <?php echo $texto_sabores; ?></p>
        <p>Refrigerante: <?php echo $refri; ?></p>
        <p>Borda: <?php echo $borda; ?></p>
        <p>Desconto: <?php echo $cupom; ?></p>
        <p><strong>Total: <?php echo $total; ?></strong></p>
        <a href= "<?php echo $link; ?>"class="btn wsp">
        Pedir no WhatsApp</a>
        <br>
        <a class="btn" href="index.html"> Voltar</a>
    </div>
</body>
</html>