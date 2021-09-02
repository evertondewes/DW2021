<?php


$nome = '    João da Silva Medeiros      ';

if (strpos($nome, 'Medeiros')) {
    echo 'Tem o sobrenome. Posição: ' . strpos($nome, 'Medeiros') . '<br>';
} else {
    echo 'Não tem o sobrenome <br>';
}

echo str_replace('Silva', 'Dewes', $nome) . '<br>';

echo 'Tamanho original: ' . strlen($nome) . '<br>';

$nome = trim($nome);

echo 'Tamanho depois do trim: ' . strlen($nome) . '<br>';