<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <style>
        .tabela{
            text-align: center;
        }
        td {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h2>Exercicio</h2>
<table class="tabela">
    <tr>
        <td>ID</td>
        <td>Linguagem</td>
        <td>Descrição</td>
    </tr>
<?php
$linguagens = [
    "HTML" => "Estruturação", 
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End"
];
$i = 1; 
foreach($linguagens as $linguagem => $descricao){
?>
  <tr>
        <td><?=$i++?></td>
        <td><?=$linguagem?></td>
        <td><?=$descricao?></td>
    </tr>  
<?php 
} 
?>
    
    
</table>    
</body>
</html>