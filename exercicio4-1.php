<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção Exercicio</title>
    <style>
        td, th{text-align: center; border: 2px solid red;}
        tr:nth-child(even){background: pink;}
    </style>
</head>
<body>
    <h1>Correção Exercicio</h1>
    <hr>
    <h2>Versão 1: usando vetor (array)</h2>
<?php
$linguagens = [
    "HTML" => "Estruturação", 
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End"
];
?>
<table>
    <caption>Versão 1</caption> <!-- Titúlo da Tabela-->
    <thead> <!-- Cabeçalho da Tabela -->   
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody> <!--Corpo da Tabela (área do conteúdo)-->
        <?php 
        $id = 0;
        foreach($linguagens as $linguagem => $descricao) { ?>
            <tr>
                <td><?=++$id /* $id++ (pós incremento) */?></td>
                <td><?=$linguagem?></td>
                <td><?=$descricao?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<hr>
<h2>Versão 2: usando matriz (array dentro de array)</h2>
<?php
$linguagens2 = [
    [
        "id" => 1,
        "linguagem" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "linguagem" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "linguagem" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "linguagem" => "PHP",
        "descricao" => "Back-End"
    ]
];
?>
    <table>
        <tr>
            <th>ID</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
        <?php foreach($linguagens2 as $linguagem){ ?>
            <tr>
                <td><?=$linguagem['id']?></td>
                <td><?=$linguagem['linguagem']?></td>
                <td><?=$linguagem['descricao']?></td>
            </tr>
        <?php } ?>
    </table>


    
</body>
</html>