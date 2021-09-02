<?php


function passagemParametros($var1, &$var2, $var3 = 10) {
    $var1 = 15;
    $var2 = 35;

    echo 'var1: ' . $var1 . '<br>';
    echo 'var2: ' .$var2 . '<br>';
    echo 'var3: ' .$var3 . '<br>';
    return 33;
}


$varExterna1 = 10;
$varExterna2 = 30;


$retorno = passagemParametros($varExterna1, $varExterna2);




echo 'varExterna1: ' . $varExterna1 . '<br>';
echo 'varExterna2: ' . $varExterna2 . '<br>';
echo 'retorno: ' . $retorno . '<br>';