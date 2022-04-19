<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
    <style>
        .destaque {color: red;}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <hr> 
<?php
    // Geração de texo (string)
    echo "Amanhã tem Corinthians e Palameiras!!";
    // span = uma DIV em linha.
    // Geração de texto estruturado (com tag, atributos)
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "Oi GitHub :)";
?>
</body>
</html>