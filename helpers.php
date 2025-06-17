<?php

/**
 * Função de validação de e=mail
 * @param string $email Endereço de email a ser validado
 * @return bool Resultado booleano da validação
 */

function validarEnderecoEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$diadaSemana = 1;

switch ($diadaSemana) {

    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda";
        break;
    case 3:
        echo "Terça";
        break;
    case 4:
        echo "Quarta";
        break;
    case 5:
        echo "Quinta";
        break;
    case 6:
        echo "Sexta";
        break;
    case 7:
        echo "sábado";
        break;

    default:
        echo "O número informado não equivale a um dia da semana válido";

}

$resultado = match ($diadaSemana) {
    1 => "Domingo",
    2 => "Segunda",
    3 => "Terça",
    4 => "Quarta",
    5 => "Quinta",
    6 => "Sexta",
    7 => "Sábado",
    default => "O número informado não equivale a um dia da semana válido"
};
    echo "<br>";
    var_dump($resultado);

?>