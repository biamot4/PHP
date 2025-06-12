<?php
//Console.log() do php
echo"";    
echo"<h1>Hello world</h1>";
echo"<hr>";
//criar variável
$nome = "Ana";  
$idade = 23;
echo $nome;  
echo"<br>";

//condicional
if($nome==='Ana' and $idade===23){  
//Concatenação
echo 'Seja bem-vindo(a) '. $nome;
echo"<br>";
}

//Função
function saudacao( string $nome){
    return "Olá, " . $nome;   
}

echo saudacao($nome) . "<br>";

//Debugando variáveis
var_dump($nome, $idade)

?>