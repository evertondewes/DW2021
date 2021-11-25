<?php

$pdo = new PDO('mysql:host=localhost;dbname=sistema_autenticacao',
    'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
