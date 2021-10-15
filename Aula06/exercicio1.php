<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>
Faça um programa que receba o nome de uma pessoa e apresente quantas vogais tem;
<form method="post" action="exercicio1.php">
    Nome: <input type="text" name="nome"/>
    <input type="submit" name="Enviar"/>
</form>

<?php

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $total = 0;
    for ($i = 0; $i < strlen($nome); $i++) {
        if ($nome[$i] == 'a' or $nome[$i] == 'A' ||
            $nome[$i] == 'e' || $nome[$i] == 'E' ||
            $nome[$i] == 'i' || $nome[$i] == 'I' ||
            $nome[$i] == 'o' || $nome[$i] == 'O' ||
            $nome[$i] == 'u' || $nome[$i] == 'U') {
            $total++;
        }
    }
    echo "O total é $total <br>";
    echo '<pre>' . print_r($_POST, true) . '</pre>';

}

?>
</body>
</html>
