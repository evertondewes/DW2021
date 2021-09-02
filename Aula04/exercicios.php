<?php
/*
Usando FOR exiba todos os números de 0 a 100;
Usando WHILE exiba todos os números pares de 0 a 100;
Usando DO-WHILE apresente em ordem decrescente todos os números de 500 até 10;
Faça um programa que percorra uma String apresentando seus caracteres, porém não exibe as vogais.
Faça um programa que conte o total de ‘R’ e ‘L’ de uma string.

 */
echo '------1)<br>';
for ($i = 0; $i <= 100; $i++)
    echo "$i,";

echo '------2)<br>';

$i = 0;
while ($i <= 100) {
    if ($i % 2 == 0)
        echo "$i,";
    $i++;
}

echo '------3)<br>';

$i = 500;
do {
    echo "$i,";
    $i--;
} while ($i >= 10);

echo '------4)<br>';

$frase = 'O Gremio vai sair campeao!  RR LLL';
$tamanho = strlen($frase);
for ($i = 0; $i < $tamanho; $i++) {

    if (strtolower($frase[$i]) != 'a'
        && $frase[$i] != 'e' && $frase[$i] != 'E'
        && $frase[$i] != 'i' && $frase[$i] != 'I'
        && strtolower($frase[$i]) != 'o'
        && $frase[$i] != 'u' && $frase[$i] != 'U') {
        echo $frase[$i];
    }
}

echo '<br>------5)<br>';
echo substr_count($frase, 'R') . '<br>';
echo substr_count($frase, 'L');