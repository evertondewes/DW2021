<?php

$varA = '1';
$varB = 1;
$varC = true;
$varD = 'true';

if($varA == $varB) {
    echo 'iguais A e B <br>';
} else {
    echo 'diferentes A e B <br>';
}

if($varA == $varC) {
    echo 'iguais A e C <br>';
} else {
    echo 'diferentes A e C <br>';
}

if($varA == $varD) {
    echo 'iguais A e D <br>';
} else {
    echo 'diferentes A e D <br>';
}

if($varC == $varD) {
    echo 'iguais C e D <br>';
} else {
    echo 'diferentes C e D <br>';
}

echo $varC . '<br>';