<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamento de dados usando GET</h1>
    <hr>

<?php
if (empty($_POST['nome']) || empty($_POST['email']) ){
?>
    <p style="color:red">Você deve preencher nome e e-mail!</p>
<?php
} else {
// filtro de entrada/ INPUT_POST / Nome do campo/ Nome do filtro.
//capturando os dados transmitidos e sanitizando (limpando).
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    /* Usando o operador de coalescência nula ?? se houver interesses, armazene seus valores.Senão, deixei o array vazio. */
    // $interesses = $_POST["interesses"] ?? [];
    $interesses = filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);
    $informativos = filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS)
?>

    <h2>Dados:</h2>
    <pre> <?=var_dump($_POST)?></pre>
    <ul>
     
        <li>Nome: <?=$nome?></li>
        <li>Idade: <?=$idade?> anos</li>
        <li>E-mail: <?=$email?></li>
        <li>Informativos: <?=$informativos?></li>
        <?php if (!empty($interesses)) { ?>
         <!-- Opção 1: implodir o array, transformando em string -->  
        <li>Interesses: <?=implode(", ", $interesses)?></li>
        <li>Interesses:
            <ul>
               <!-- Opção 2: acessar o array usando lopp -->
                <?php foreach ($interesses as $interesse) { ?>
                    <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
<?php
} // fim if/else da validação de campos obrigatórios
?>



</body>
</html>
