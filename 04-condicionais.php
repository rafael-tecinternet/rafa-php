<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>
    <style>
        .ok {color: blue}
        .repor {color: red}
    </style>
</head>
<body>
    <h1>Estruturas de Controle Condicional</h1>
    <hr>
    <h2>Simples</h2>
<?php
    $numero = 5;
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }
    //Sintaxe alternativa (omitindo chaves)
    if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>
<hr>
    <h2>Composta</h2>
<?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; // o que temos no momento
    $qtdCritica = 14; // mínimo necessário

    echo"<h3>$produto</h3>";
    if($qtdEmEstoque < $qtdCritica){
        echo"<p class=\"repor\">É necessário comprar!</p>";
    //condicional alinhada
    if($qtdEmEstoque === 0){
         echo"<mark><b>URGENTE!</b></mark>";
    }
    } else {
        echo"<p class=\"ok\">Estoque OK</p>";
    }
    //Sintaxe alternativa (omitindo chaves)
    if($qtdEmEstoque < $qtdCritica) echo"<p class=\"repor\">É necessário comprar!<p>";
    if($qtdEmEstoque === 0) echo"<mark><b>URGENTE!</b></mark>";
    else echo"<p class=\"ok\">Estoque OK</p>";
?>    
<hr>
    <h2>Encadeada</h2>
<?php
    /*Cardápio Digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida*/
    $opcao = 1;
    
    //Sintaxe completa
    if($opcao === 1){
        echo"<p>Pastel</p>";
    } elseif($opcao === 2){ //senão se ()
        echo"<p>Pizza</p>";
    } elseif($opcao === 3){
        echo"<p>Esfiha</p>";
    } else { //Fimse
        echo"<p>Opção inválida!</p>";
    } 
    //Sintaxe açternativa (omitindo chaves)
    if($opcao === 1) echo"<p>Pastel</p>";   
    elseif ($opcao === 2) echo"<p>Pizza</p>";
    elseif ($opcao === 3) echo"<p>Esfiha</p>";
    else echo"<p>Opção inválida!</p>";
    //outro jeito
    if($opcao === 1){
        $opcaoEscolhida = "Pastel";
    } elseif($opcao === 2){ //senão se ()
        $opcaoEscolhida = "Pizza";
    } elseif($opcao === 3){
        $opcaoEscolhida = "Esfiha";
    } else { //Fimse
        $opcaoEscolhida = "Opção inválida!";
    } 
    echo "<p>$opcaoEscolhida</p>";
    //Sintaxe alternativa (omitindo chaves)
    if($opcao === 1) $opcaoEscolhida = "Pastel";
    elseif ($opcao === 2) $opcaoEscolhida = "Pizza";
    elseif ($opcao === 3) $opcaoEscolhida = "Esfiha";
    else echo $opcaoEscolhida = "Opção inválida!";   
?>
<hr>
<h2>Switch/Case</h2>
<?php
    switch($opcao){ //caso
        case 1: $pedido = "Pastel"; break;
        case 2: $pedido = "Pizza"; break;
        case 3: $pedido = "Esfiha"; break;
        default: $pedido = "Opção inválida!"; break; //Outro caso 
    }
    echo "<p>$pedido</p>";
?>
</body>
</html>