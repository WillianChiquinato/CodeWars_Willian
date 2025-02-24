<!-- URL BASE:
C:\Users\Willian001\Desktop\Projects\CodeWars\PHP\"PASTA\SCRIPT".php -->

# Anotações 🚀

**Transformar variavel**: so colocar (Tipo que vc quer) atras da variavel.
Ex: $num = 123;
$StringNum = (string) $num;

**sqrt($Variavel)**: Calcula a raiz quadrada do numero da variavel.
**floor($Variavel)**: Verifica de a raiz quadrada é um numero inteiro (Uma raiz válida).

**rsort()**: Faz um array descrescente.
**sort()**: Faz um array crescente.

**reset() e end()**: Pega o primeiro e o ultimo elemento respectivamente.

**strtolower(VARIAVEL)**: Transforma a variavel de string em minuscula

**preg_replace('Padrao alfabeto', 'Substituição', 'variavel string')**: Transforma a variavel de string e retira a pontuação e numeros, deixando apenas letras

**array_unique()**: Remove os valores duplicados de um array

**str_split()**: Transforma uma string em um array, e separa em cada indice um caracter da string e fica em STRING.

**strlen()**: Retorna o tamanho de uma string, contando espaços e caracteres especiais

**array_count_values()**: Retorna um array associativo com a quantidade de vezes que um valor se repete em um array
Entao se a letra se repetir, ele separa em um array cada caracter, e conta quantas vezes ela se repete

**array_sum()**: Soma todos os valores de um array

**array_filter(array $array, callable $callback, int $mode = 0)**: Filtra os valores de um array com base em uma função que voce coloca em callback

**substr(string $string, int $start, int $end)**: Retorna uma parte de uma string, começando do indice start e indo até o indice final lenght

**array_pop(array &$array)**: Remove o ultimo valor de um array
**array_shift(array &$array)**: Remove o primeiro valor de um array

**implode(string $glue, array $pieces)**: Transforma um array em uma string
$glue = "O que separa os elementos do array";
$pieces = "Array que voce quer transformar em string";
"Ele junta todos os elementos do array em uma string, e voce pode escolher o que separa os elementos";

**explode()**: Divide a string em um array de numeros.

**decbin($variable)**: Transforma um numero em binários, Ex: 14 -> 1110.