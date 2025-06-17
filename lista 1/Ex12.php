<?php

$cadastro =[
    "Nome" => "Beatriz",
    "Idade" => 18,
    "Email" => "beatrizmotasesi@exemple.com"
];

    foreach ($cadastro as $key => $dado){
        echo $key . ": " . $dado . "<br>";
    }
?>