<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
<?php
if (empty($_POST['produto']) || empty($_POST['fabricante']) || empty($_POST['preco']) ) {  ?>
<p style="color:red">Você deve preencher os dados!</p>
<?php
} else {
    $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = $_POST["descricao"];
?>
<section>
    <h2>Dados:</h2>
    <ul>
        <li>Nome do Produto: <?=$produto?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <li>Preço: R$: <?=number_format ($preco, 2, ',','.')?></li>
        <li>Descrição: <?=nl2br($descricao)?></li>
    </ul>
</section>
<?php
}
?>    
</body>
</html>