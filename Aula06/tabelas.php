<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabelas</title>
</head>
<body>

<?php
$dados = [
    ['nome' => 'Everton', 'idade' => 25],
    ['nome' => 'João', 'idade' => 23],
    ['nome' => 'Pedro', 'idade' => 45],
    ['nome' => 'Paulo', 'idade' => 65],
    ['nome' => 'Mateus', 'idade' => 76],
    ['nome' => 'Judas', 'idade' => 89],
];
?>

<table border="1" style="width:100%">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    for ($i = 0;  $i < count($dados); $i++) {
    ?>
        <tr>
            <td><?php echo $dados[$i]['nome']  ?></td>
            <td><?php echo $dados[$i]['idade'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>

<table border="1" style="width:100%">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    for ($i = 0;  $i < count($dados); $i++) {
        echo '<tr><td>'. $dados[$i]['nome'] .'</td><td>'. $dados[$i]['idade'] .'</td></tr>';
    }
    ?>
</table>

<table border="1" style="width:100%">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    foreach ($dados as $linha) {
        ?>
        <tr>
            <td><?php echo $linha['nome']  ?></td>
            <td><?php echo $linha['idade'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table border="1" style="width:100%">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php
    foreach ($dados as $linha) {
        echo '<tr><td>'. $linha['nome'] .'</td><td>'. $linha['idade'] .'</td></tr>';
    }
    ?>
</table>

</body>
</html>

