<?php

// somar todos os numeros dos array ao quadrado
function square_sum(array $numbers): int
{
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i] * $numbers[$i];
    }
    return $sum;
}

$numbers = [1, 3, 2];

echo square_sum($numbers);

//Contar se a ovelhas ou nao (0, 1);
function countSheep($arr)
{
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] == 1) {
            return true;
        }
        else
        {
            false;
        }
    }
}

//Com a soma de dois numeros, pegue-se o resultado e transforme em binário.
function add_binary($a, $b) 
{
    $sum = $a + $b;
    return decbin($sum);
}

echo add_binary(5, 9);

//Criar uma funcao que aceite 10 numeros inteiros (Sendo de 0 a 9) e retorne o numero de telefone formatado.
function createPhoneNumber($numbersArray) {
    $numbersArray = implode('', $numbersArray);
    return "(".substr($numbersArray, 0, 3).") ".substr($numbersArray, 3, 3)."-".substr($numbersArray, 6);
}

echo createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);