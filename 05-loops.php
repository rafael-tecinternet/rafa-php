<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS PHP</title>
</head>
<body>
    <h1>Estrututas de Controle de Repetição</h1>
<hr>
    <h2>While (enquanto)</h2>
<?php
$i = 1; // i = indice ou contador
while($i <= 5){
    echo "<p>$i</p>";
    //$contador = $contador + 1;
    $i++; //Usando incremento
     // selecionar + ctrl D selecionar comandos de uma ves para modficar
}
?>
<!-- Sintaxe alternativa -->
<?php
$i = 1;
while($i <= 5){
?>
    <p><?=$i?></p>
<?php 
    $i++;
}
?>
<hr>
<h2>Do / while (repita)</h2>
<?php
$j = 1;
do{
?>
   <div><h3>Olá!</h3></div>
<?php
    $j++;
} while($j <= 3);
?>
<hr>
<h2>For (para)</h2>
<?php
//para i de 1 ate 10 faça
//controle; condição; atualização
for($i = 1; $i <= 10; $i++){
 echo $i." "; // operador ponto é para concatenação
}
?>
<hr> 
<h2> Exercicio </h2>
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ];
?>
<ol>
    <?php 
    $quantidade = count($meses);
    for($i = 0; $i < $quantidade; $i++){ ?>    <!-- < count()  pega todos os dados dentro do array -->
    <li><?=$meses[$i]?></li>
<?php } ?>
</ol>
<hr>
<h2>foreach (para cada ...)</h2>
<ol>
    <?php foreach($meses as $mes){ ?>    
    <li><?=$mes?></li>
    <?php } ?>
</ol>
<?php
// Array Associativo
$clubes = [
    "Corinthians" => "Timão",
    "Palmeiras" => "Porco",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];
//foreach($clubes as $clube)
foreach($clubes as $clube => $apelido){
?>
 <p>O <?=$clube?> é conhecido como <?=$apelido?>.</p>
<?php
}
//MATRIZ (array dentro de array)
$alunos = [
    [
        "nome" => "chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 20
    ],
    [
        "nome" => "chiquinha",
        "idade" => 10
    ]
];
foreach($alunos as $aluno){
?>
    <p>Nome: <?=$aluno["nome"]?></p>
    <p>Idade: <?=$aluno["idade"]?></p>
    <hr>
<?php
}
?>

</body>  
</html>