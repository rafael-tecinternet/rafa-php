<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        .dados1 {
            margin: auto;
            padding: 10px;
            font-size: 1.5rem;
            border: 2px black solid;
            width:40%;
            text-align: center;
            border-radius: 20px;
            background-color: rgb(31, 147, 177);
            box-shadow: 5px 5px 5px;
        }
        .dados2 {
            margin: auto;
            padding: 10px;
            font-size: 1.5rem;
            border: 2px black solid;
            width:40%;
            text-align: center;
            border-radius: 20px;
            background-color: pink;
            box-shadow: 5px 5px 5px;
        }
        
    </style>
</head>
<body>
    <h1>Exercicio</h1>
    <hr>
<?php
    $dados1 = ["rafa.fcarmo", "abc123", 27, "Masculino", "São Paulo", "rafa@gmail.com" ];
    $dados2 = ["gisele.marques", "01234abcd", 15, "Feminimo", "Rio de Janeiro", "gisele@gmail.com"];
?>
    <section class="dados1">
        <p>Nome de Usuário: <?=$dados1[0]?></p>
        <p>E-mail: <?=$dados1[5]?></p>
        <p>Idade: <?=$dados1[2]?></p>
        <p>Sexo: <?=$dados1[3]?></p>   
    </section>
    <hr>
    <section class="dados2">
        <p>Nome de Usuário: <?=$dados2[0]?></p>
        <p>E-mail: <?=$dados2[5]?></p>
        <p>Idade: <?=$dados2[2]?></p>
        <p>Sexo: <?=$dados2[3]?></p>   
    </section>
</body>
</html>