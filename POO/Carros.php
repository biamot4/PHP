<?php

class Carros{
    //publico é global, privado é local
    public $cor;

    public $modelo;

    public $marca;

    public function acelerar(): void{
        echo "Velozes e Furiosos 🌩";
    }
    
    public function frear() {
        echo " 🚓🚓🚓🚨🚨🚨 PARE O CARRO!!! ⭐⭐⭐⭐⭐";
    }

}

// HERANÇA = EXTENDS 
class CarroEletrico extends Carros {
    //POLIMORFISMO = PUBLIC, PRIVATE OU PROTECTED 
    public $autonomia;

    public function recarregar (){
        echo "Recarregando... 🔋🔋🔋🔋";
    }
}   

?>