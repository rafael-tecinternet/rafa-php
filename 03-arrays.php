<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays no PHP</title>
</head>
<body>
    <h1>Trabalhando com Arrays (vetores e matrizes)</h1>
    <hr>
    <h2>Arrays com indice numéricos</h2>
<?php
    //Sintaxe com colchetes
    $bandas = ["Savatage","Iron Mainde","Nightwish"];
    //Sintaxe com função array()
    $cursos = array("HTML5", "CSS3", "NodeJS", "Photoshop");
    //Sintaxe indicandi indíce manualmente
    $comidadeBoteco[0] = "Bolinho de Bacalhau";
    $comidadeBoteco[1] = "Pastel";
    $comidadeBoteco[2] = "Esfiha de carne";
    //Constantes de arrays
    define("UNIDADES_SENAC", ["Penha", "Tatuapé", "Itaquera"]);
    const FRUTAS = ["Morango", "Abacaxi"];
?> 
<h3>Acessando os dados</h3>
    <ol>
        <li>Uma das bandas que mais gosto:
            <?=$bandas[2]?>
        </li>
        <li>Linguagem base da web:
            <?=$cursos[0]?>
        </li>
        <li>Quero comer:
            <?=$comidadeBoteco[0]?>
        </li>
        <li>Senac <?=UNIDADES_SENAC[0]?></li>
        <li>Fruta: <?=FRUTAS[1]?></li>
    </ol>
<h2>Array Associativos</h2>
<?php
    $curso = [
        //Chave associativa (identificação => valor)
        "nome" => "gastronomia",
        "cargaHoraria" => 150,
        "unidade" => "Penha"
    ];
?> 
    <p>Nome do curso: <?=$curso["nome"]?></p>
    <p>CH: <?=$curso["cargaHoraria"]?></p>
    <p>Unidade: Senac <?=$curso["unidade"]?></p>
<h2>Matriz (array dentro de array)</h2>
<?php
    //Plano de estudo de Front, Back e Desing
    $planoDeEstudos = [
        ["JavaScript Avançado", "Node.js", "React"],
        ["PHP", "POO", "MySQL", "Python"],
        ["Teoria das Cores", "Photoshop", "UX/UI"]
    ]
?>
    <ol>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[1][0]?>/<?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?></li>
        <li><?=$planoDeEstudos[2][0]?></li>
    </ol>
<h2>Análise de arrays (debug/depuração)</h2>
        <p><?php var_dump($bandas);?></p>
        <pre><?=var_dump($bandas)?></pre>
        <hr>
        <p><?php print_r($bandas);?></p>
        <pre><?=print_r($bandas)?></pre>
        <hr>
        <pre><?=var_dump($planoDeEstudos)?></pre>

</body>
</html>