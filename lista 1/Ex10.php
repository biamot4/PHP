<?php

$nome = "Maria";
$nome2 = "Carlos";
$nome3= "Luis";

    function boasVindas ( string $nome){
        echo 'Bem-vindo(a), ' . $nome . '! <br>';
    }

    boasVindas($nome);
    boasVindas($nome2);
    boasVindas($nome3);

?>