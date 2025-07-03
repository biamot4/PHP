<?php

require "Desafio1.php";

$aluno = new Aluno();

$aluno->nome = "Beatriz";
$aluno->idade = "18 anos";
$aluno->matricula = "12345";
$aluno->nota1 = 7;
$aluno->nota2 = 8;
$aluno->peso1 = 2;
$aluno->peso2 = 4;



$aluno-> exibirdados( $aluno->nome, $aluno->idade, $aluno->matricula, $aluno->nota1, $aluno->nota2, $aluno->peso1, $aluno->peso2);
echo "<hr>";
$aluno-> calcularmedia($aluno->nota1, $aluno->nota2, $aluno->peso1, $aluno->peso2);
echo "<hr>";
$aluno-> verificarAprovacao($aluno->media);
?>