<?php
define("ESCOLA", "Senac");
$curso = "Técnico em Informática para internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificaIdade(int $idade):string {
    return $idade >=18 ? "maior" : "menor";
}

echo $curso;