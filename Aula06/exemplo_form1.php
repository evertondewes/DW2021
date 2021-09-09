<?php
if (isset($_GET['nome'])) {
    $titulo = 'Página do ' . $_GET['nome'];
} else {
    $titulo = 'Página sem dono!';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            echo $titulo;
        ?>
    </title>
</head>
<body>
<form method="get" action="exemplo_form1.php">
    Nome: <input type="text" name="nome"/>
    <input type="submit" name="Enviar"/>
</form>
<?php
    echo $titulo;
?>
</body>
</html>
