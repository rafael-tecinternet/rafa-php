<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <style>
        .aprovado{color: blue;}
        .reprovado{color: red;}
    </style>
</head>
<body>
    <h1>Exercicio</h1>
<?php
function calculaMedia($n1, $n2){
    $media = ($n1 + $n2) / 2;
    return $media;
  // return ($n1 + $n2) / 2;
}
function verificaSituacao($m){
   return $m >= 7 ? "aprovado" : "reprovado";
}
$nota1 = 8;
$nota2 = 8;
$media = calculaMedia($nota1, $nota2);
    
// $media = ($nota1 + $nota2) / 2;

// if($media >= 7) {
//     $situacao = "aprovado";
// } else {
//     $situacao = "reprovado";
// }
?>
<p><?=$media?></p>
<p class="<?=verificaSituacao($media)?>"><?=verificaSituacao($media)?></p>


    
</body>
</html>