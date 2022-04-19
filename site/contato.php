<?php require "includes/cabecalho.php" ?>
        <h2>Contato: </h2>
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>   
<?php require "includes/rodape.php"; ?>