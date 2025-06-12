<?php

$produto = "Livro";
$precoInicial = 50;
$percentual = 0.20;
$precoFinal = $precoInicial - $precoInicial * ($percentual);

echo 'Produto: ' . $produto .'<br>';
echo 'Preço do produto: ' . $precoInicial . '<br>';
echo "Desconto aplicado: 20% <br>";

echo 'O preço final do ' . $produto . ' é = ' . $precoFinal;

?>