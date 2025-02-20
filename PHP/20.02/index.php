<?php


//Pegar o maior e o menor numero.
function highAndLow(string $numbers): string {
    //Separando a string em um array de numeros.
    $array = explode(" ", $numbers);

    //Ordem crescente
    sort($array);

    $primeiro = reset($array);
    $ultimo = end($array);

    //Exibindo maior e menos numero.
    return $ultimo . " " . $primeiro;
  }

echo highAndLow("1 2 3 4 5");


//Media em score e achar a letra correspondente.
function getGrade($a, $b, $c) {
    $score = ($a + $b + $c) / 3;
    
    switch(true)
    {
        case $score >= 90 && $score <= 100:
            return "A";
            
        case $score >= 80 && $score < 90:
            return "B";

        case $score >= 70 && $score < 80:
            return "C";

        case $score >= 60 && $score < 70:
            return "D";

        case $score >= 0 && $score < 60:
            return "F";

        default:
            return "Nota invalida";
    }
}

echo getGrade(0, 0, 0);

//Fazer a soma ate o chegar no numero N. Soma de incremento em 1.
function summation(int $n): int {
    $incremento = 0;

    for($i = 1; $i <= $n; $i++)
    {
        $incremento += $i;
    }

    return $incremento;
}

echo summation(8);