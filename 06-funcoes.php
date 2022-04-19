<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>
    <h2>Funções como sub-rotina ou procedimento</h2>
<?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Rafael Augusto</p>"; 
        echo "<p>rafah1194@gmail.com</p>"; 
        echo "</div>"; 
    }
?>
<section>
    <h3>Chamada da sub-rotina</h3>
    <?=dadosAutor()?>
    <article>
        <h4>Outra chamada</h4>
        <?=dadosAutor()?>
    </article>
</section>
<hr>
<h2>Função com retorno de dados</h2>
<?php
    function dadosCurso(){
        return "Técnico em Informática para internet";
}
?>
<p>Estamos no curso de <?=dadosCurso()?></p>
<p><?=dadosCurso()?> é o mistrado do Senac Penha</p>
<hr>
<h2>Função com parâmetros (ou argumentos)</h2>
<?php
// Variavel GLOBAL!
function soma($valor1, $valor2, $valor3 = 0){// = 0 é quando permite soma de 2 números
    // variavel LOCAL!
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}
?>
<p><?=soma(10,20,30)?></p>
<p><?=soma(102,230,340)?></p>
<p><?=soma(10,230,1150)?></p>
<!-- VARIAVEL ABAIXO É DE ESCOPO GLOBAL -->
<?php $total = soma(1500,200,4356);?>
<p><?=$total?></p>
<?php
/*Passando uma função como condição de um if*/
if (soma(500,200,500) > 1000) {
    echo "Resultado da função é maior/igual a 1000";
}
function verfificaNegativo($valor){
    //VERSÂO: IF/ELSE tradicional
    // if($valor < 0){
    //     return "negativo";
    // } else{
    //     return "não é negativo";
    // }
    //VERSÃO 2: IF/ELSE usando operador ternário (IF/ELSE 1 linha, shorthand)
    return $valor < 0 ? "negativo" : "não é negativo";
}
?>
<p><?=verfificaNegativo(10)?></p>
<p><?=verfificaNegativo(-150)?></p>
<p><?=verfificaNegativo(258.99)?></p>

</body>
</html>