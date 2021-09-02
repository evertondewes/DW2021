<?php

$stringOriginal =  'A soma de 432 com 456 é: ';

$varA = $stringOriginal[10] . $stringOriginal[11] . $stringOriginal[12];

$varB = $stringOriginal[18] . $stringOriginal[19] . $stringOriginal[20];

echo "Var A: $varA   --- Var B: $varB <br>";

echo $stringOriginal . ($varA + $varB) . '<br>';


$varA = substr($stringOriginal, 10, 3);
$varB = substr($stringOriginal, 18, 3);

echo "Var A: $varA   --- Var B: $varB <br>";

echo $stringOriginal . ($varA + $varB) . '<br>';

$arrPalavras = explode(' ', $stringOriginal);

$varA = $arrPalavras[3];
$varB = $arrPalavras[5];

echo "Var A: $varA   --- Var B: $varB <br>";

echo $stringOriginal . ($varA + $varB) . '<br>';


$pattern = '/[^@\s]*@[^@\s]*\.[^@\s]*/';

$emailaddress = 'test@gmail.com';

if (preg_match($pattern, $emailaddress) === 1) {
    echo 'Email válido <br>';
} else {
    echo 'Email inválido <br>';
}


$textoEntrada = 'Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
Um teste para proteger o test@gmail.com e proteger a informação <br>
';

echo print_r(preg_replace($pattern, 'XXXXX', $textoEntrada), true);