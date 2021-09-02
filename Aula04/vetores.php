<?php

$vetor = [
    1,
    2,
    3,
    4
];

echo $vetor[2] . '<br>';

$vetor[2] = 123;

echo $vetor[2] . '<br>';


$vetor = array(
    "Everton" => "111111111",
    "João" => "22222222",
    "Paulo" => "333333333",
);

$vetor = [
    "Everton" => "111111111",
    "João" => "22222222",
    "Paulo" => "333333333",
];

echo $vetor['Paulo'] . '<br>';

$vetor['Maria'] = '44444444';
$vetor[] = '123123123';
$vetor['João'] = '8888888';

echo $vetor['Maria'] . '<br>';


foreach ($vetor as $valor ) {
    echo 'número '. $valor . '<br>';
}

echo '--------<br>';
foreach ($vetor as $chave => $valor ) {
    echo 'O '. $chave . ' possui o número '. $valor . '<br>';
}
echo '--------<br>';

$indices = array_keys($vetor);
for($i = 0; $i < count($indices); $i++) {
    echo 'O '. $indices[$i] . ' possui o número '. $vetor[$indices[$i] ] . '<br>';
}
