<?php
$arr = [32, 12, 56, 34, 23, 89, 54, 32, 43, 11];
$maiorValor = $arr[0];
$menorValor = $arr[0];
$somaTotal = 0;

for ($i = 0; $i < 10; $i++) {
    if ($arr[$i] > $maiorValor) {
        echo 'O valor atual na posição ' . $i . ' é ' . $arr[$i] .
            ' e é maior que ' . $maiorValor . '<br>';
        $maiorValor = $arr[$i];
    }
    if ($arr[$i] < $menorValor) {
        echo 'O valor atual na posição ' . $i . ' é ' . $arr[$i] .
            ' e é menor que ' . $menorValor . '<br>';
        $menorValor = $arr[$i];
    }
    $somaTotal += $arr[$i];
    if ($arr[$i] % 2 != 0) {
        echo 'O valor na posição ' . $i . ' é ' . $arr[$i] . ' e ele é impar <br>';
    }
}

echo "O maior valor encontrado no array é: $maiorValor <br>";
echo "O menor valor encontrado no array é: $menorValor <br>";
echo "A soma total é: $somaTotal <br>";

