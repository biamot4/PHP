<?php

class Aluno{

    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    public function calcularmedia($nota1,$nota2,$peso1,$peso2){

        $media = ($nota1*$peso1 + $nota2*$peso2)/($peso1+$peso2);
        echo "Média: " . $media;
        return $media;
    }

    public function exibirdados ($nome, $idade, $matricula, $nota1, $nota2, $peso1, $peso2){
        echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "<br>" . "Matricula: " . $matricula . "<br>" . 
        "Nota 1: " . $nota1 . "<br>" . "Nota 2: " . $nota2 . "<br>" . "Peso 1: " . $peso1 . "<br>" . "Peso 2: " . $peso2 . "<br>";
    }

    public function verficarAprovacao($media){
        if($media >= 7){
            echo "Status: Aprovado!";
        } else {
            echo "Status: Reprovado!";
        }
    }
}


?>