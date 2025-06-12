<?php

$nome = "Beatriz";
$nomecerto = "Ana";

$senha = 1234;
$senhacerta = 12345;

if($nome === $nomecerto and $senha === $senhacerta){
    
    echo "Login realizado com sucesso!";
} else {

    echo "Suas credencias são inválidas!";
}
?>