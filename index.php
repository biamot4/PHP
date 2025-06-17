<?php

require 'helpers.php';
echo "<hr>";
echo validarEnderecoEmail('ana@example.com');
echo validarEnderecoEmail('https://google.com');

//Console.log() do php
echo "";
echo "<h1>Hello world</h1>";
echo "<hr>";
//criar variável
$nome = "Ana";
$idade = 23;
echo $nome;
echo "<br>";

//condicional
if ($nome === 'Ana' and $idade === 23) {
    //Concatenação
    echo 'Seja bem-vindo(a) ' . $nome;
    echo "<br>";
}

/**
 * Função de saudação
 * @param string $nome de usuário
 * @return string mensagem de saudação ou o nome do usuário 
 * @author Beatriz <beatriz@exemplo.com>
 */


//Função
function saudacao(string $nome)
{
    return "Olá, " . $nome;
}

echo saudacao($nome) . "<br>";

//Debugando variáveis
var_dump($nome, $idade);

//1ª forma de criar array
$arr = array(1, 2, 3, 4, 5);

//1ª forma de criar array
$arr2 = [1, 2, 3, 4, 5];

//Encontrando um elemento pela sua posição dentro de um array
echo "<br>" . $arr[0] . " " . $arr2[1] . "<br>";

foreach ($arr2 as $number) {
    echo "Número " . $number . "<br>";
}

//Criação de array associativo 
$cadastro = [
    "Nome" => "Beatriz",
    "Idade" => 18,
    "Email" => "beatrizmotasesi@exemple.com"
];

foreach ($cadastro as $key => $dado) {
    echo $key . ": " . $dado . "<br>";
}
?>