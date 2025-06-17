<?php

$produtos = [
    "Livro" => 50,
    "Caneta" => 2,
    "Lápis" => 1
];

foreach($produtos as $nome => $preco){
    echo "Produto: " . $nome . " , " .  "Preço: R$ " . $preco . "<br>";
}

?>