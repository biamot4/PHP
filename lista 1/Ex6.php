<?php 

$nota1 = 8;
$nota2 = 9;
$nota3 = 10;

$media = ( $nota1 + $nota2 + $nota3)/3;

if($media >= 7){
    echo 'Média = '. $media . ' <br> O aluno foi APROVADO!';
} else {
    echo 'Média = '. $media .'O aluno foi REPROVADO!';
}


?>