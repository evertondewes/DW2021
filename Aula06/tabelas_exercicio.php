<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabelas Exercício</title>
</head>
<body>

<?php
$cars = array
(
    array('modelo' => "Volvo", 'estoque' => 22, 'vendidos' => 18),
    array('modelo' => "BMW", 'estoque' => 15, 'vendidos' => 13),
    array('modelo' => "Saab", 'estoque' => 5, 'vendidos' => 2),
    array('modelo' => "Land Rover", 'estoque' => 17, 'vendidos' => 15)
);

?>

<table border="1" style="width:50%">
    <tr>
        <th>Modelo</th>
        <th>Estoque</th>
        <th>Vendidos</th>
    </tr>
    <?php
    for ($i = 0;  $i < count($cars); $i++) {
        ?>
        <tr>
            <td><?php echo $cars[$i]['modelo']  ?></td>
            <td><?php echo $cars[$i]['estoque'] ?></td>
            <td><?php echo $cars[$i]['vendidos'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<table border="1" style="width:100%">
    <tr>
        <th>Modelo</th>
        <th>Estoque</th>
        <th>Vendidos</th>
    </tr>
    <?php
    for ($i = 0;  $i < count($cars); $i++) {
        echo '<tr><td>'. $cars[$i]['modelo'] .'</td><td>'. $cars[$i]['estoque'] .'</td><td>'. $cars[$i]['vendidos'] .'</td></tr>';
    }
    ?>
</table>

<table border="1" style="width:100%">
    <tr>
        <th>Modelo</th>
        <th>Estoque</th>
        <th>Vendidos</th>
    </tr>
    <?php
    foreach ($cars as $linha) {
        ?>
        <tr>
            <td><?php echo $linha['modelo']  ?></td>
            <td><?php echo $linha['estoque'] ?></td>
            <td><?php echo $linha['vendidos'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table border="1" style="width:100%">
    <tr>
        <th>Modelo</th>
        <th>Estoque</th>
        <th>Vendidos</th>
    </tr>
    <?php
    foreach ($cars as $linha) {
        echo '<tr><td>'. $linha['modelo'] .'</td><td>'. $linha['estoque'] .'</td><td>'. $linha['vendidos'] .'</td></tr>';
    }
    ?>
</table>

</body>
</html>

