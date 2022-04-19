<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio</h1>
<?php
    $salario = 1440.88
?>    
<?php    
    if($salario < 500) {
        $novoSalario = $salario * 1.15;
    }
    elseif($salario <= 1000){
        $novoSalario = $salario * 1.10;
    }
    else $novoSalario = $salario * 1.05
?>
   <p>Salário antigo: R$<?=number_format ($salario, 2, ',','.')?></p>
   <p>Novo salário: R$<?=number_format ($novoSalario, 2, ',','.')?></p>


    
</body>
</html>