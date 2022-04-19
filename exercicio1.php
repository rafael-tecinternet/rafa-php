<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio</h1>

<?php
// CONFIGURANDO TIME ZONE PARA NOSSA REGIÃO
date_default_timezone_set("America/Sao_paulo");
$data = date("d/m/Y  H:i"); //Função date()
define("NOME", "Rafael");
$curso = "Técnico de Informática para internet";
$cargaHoraria = 1000;
$limiteFaltas = $cargaHoraria * 0.25;
?>
 <p>Data: <?=$data?></p>
 <p>Aluno <?=NOME?> do curso <?=$curso?> tendo carga horária de <?=$cargaHoraria?> horas, com o limite de faltas de  <?=$limiteFaltas?> horas.</p>
    
</body>
</html>