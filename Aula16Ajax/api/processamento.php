<?php


file_put_contents('mensagens.txt', $_GET['mensagem'] . PHP_EOL, FILE_APPEND);

$mensagens = file_get_contents('mensagens.txt');

echo $mensagens;