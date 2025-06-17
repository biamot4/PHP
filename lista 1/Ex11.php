<?php

$valores = [10, 15, 20, 25, 30];
$soma = 0;
$i = 1;


foreach ($valores as $preco) {

    echo "Preço " . $i . " = " . $preco . "<br>";
    $soma = $soma + $preco;
    $i++;
}

    echo "Soma = ". $soma . "<br>";
?>