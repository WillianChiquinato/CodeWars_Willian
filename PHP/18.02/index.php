<?php



function printerError($s)
{
    $totalLenght = strtolower($s);
    $error_count = strlen(preg_replace('/[a-m]/', '', $s));

    $totalLenght = strlen($totalLenght);

    return "$error_count/$totalLenght";
}

echo printerError("aaabbbbhaijjjm");

//Remover primeiro e ultimo caracter de uma string
function remove_char(string $s): string
{
    return substr($s, 1, -1);
}

//somar apenas numeros positivos.
function positive_sum($arr)
{
    return array_sum(array_filter($arr, function ($n) {
        return $n > 0; }));
}
