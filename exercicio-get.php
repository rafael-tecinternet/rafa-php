<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <?php 
        $produto = $_GET['produto'];
        $fabricante = $_GET['fabricante'];
        $preco = $_GET['preco'];
        $descricao = $_GET['descricao'];
    ?>
    <h2>Dados:</h2>
    <ul>
        <li>Produto: <?=$produto?></li>
        <li>Fabricante: <?=$fabricante?></li>
        <li>Preço: <?=$preco?></li>
        <li>Descrição: <?=$descricao?></li>
    </ul>
</body>
</html>