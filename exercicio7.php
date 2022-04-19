<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
<form action="processa-exercicio.php" method="post">    
  <p>
      <label for="produto">Nome do Produto: </label>
      <input type="text" name="produto" id="produto">
  </p>
    <?php 
    $fabricantes = ["Intel", "Asus", "Dell", "Acer", "Apple", "Samsung"];
    ?>
  <p>
      <label for="fabricante">Fabricante: </label>
      <select name="fabricante" id="fabricante">
          <option value=""></option>
            <?php 
            foreach ($fabricantes as $fabricante) {?>
            <option><?=$fabricante?></option>
            <?php } ?> 
      </select>
  </p> 
  <p>
      <label for="preco">Preço: </label>
      <input type="number" min="100" max="10000" step="0.01" name="preco" id="preco">
  </p>
  <p>
      <label for="descricao">Descrição: </label><br>
      <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
  </p> 
  <button type="submit" name="Enviar">Enviar dados</button>
</form>
</body>
</html>