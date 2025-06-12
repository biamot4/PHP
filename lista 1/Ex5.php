<?php

$pontuacao = 100;
echo 'Pontuação inicial: ' . $pontuacao . '<br>';

$rodada1 = - 15;
$rodada2 = 20;
$rodada3 = - 15;

$pontuacao = $pontuacao + $rodada1;
$pontuacao = $pontuacao + $rodada2; 
$pontuacao = $pontuacao + $rodada3;

echo 'Pontuação Final: ' . $pontuacao  . '<br>';

?>