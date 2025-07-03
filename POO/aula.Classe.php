<?php
require "Carros.php";
require "Animais.php";

// OBJETO (INSTÂNCIA DE UMA CLASSE)
$carro = new Carros();
$carro2 = new Carros();
// USO DO POLIMORFISMO 
$gato = new Gato();

// USO DA HERANÇA 
$carroeletrico = new CarroEletrico();


echo emitirSom ($gato);

echo "<hr>";
$carroeletrico->cor = "Branco";
$carroeletrico->marca = "BYD";
$carroeletrico->modelo = "Seal";
$carroeletrico->autonomia = "372km";

// ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
$carro->cor = "Preto";
$carro->marca = "Fiat";
$carro->modelo = "uno velho";

$carro2->cor = "Roxo";
$carro2->marca = "BMW";
$carro2->modelo = "320I 2.0 16V Turbo M Sport";


echo "Cor: " . $carro->cor. "<br>" . "Marca: " . $carro->marca . "<br>" . "Modelo: " . $carro->modelo;
echo "<hr>" . "Cor: " . $carro2->cor . "<br>" . "Marco: " . $carro2->marca . "<br>" . "Modelo: " . $carro->modelo;
echo "<hr>" . "Cor: " . $carroeletrico->cor . "<br>" . "Marca: " . $carroeletrico->marca . "<br>" . "Modelo: " . $carroeletrico->modelo . "<br>" . "Autonomia: " . $carroeletrico->autonomia;

?>