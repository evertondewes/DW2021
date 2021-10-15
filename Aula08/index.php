<html>
<head>
    <title>Cadastro de Guitarras</title>
</head>

<body>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=guitarras', 'root', 'root');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['apagarTudo'])) {

        $totalExcluidos = $pdo->exec('delete from guitarra;');

        if($totalExcluidos === false) {
            echo 'Erro de exclusão!<br>';
        } else {
            echo "Total de registros excluidos $totalExcluidos!<br>";
        }
    } else {
        $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING );
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT );
        $estoque = filter_input(INPUT_POST, 'estoque', FILTER_SANITIZE_NUMBER_INT );

        $insert = $pdo->prepare('insert into guitarra(modelo, preco, estoque) values (:modelo, :preco, :estoque)');
        $insert->bindParam('modelo', $modelo);
        $insert->bindParam('preco', $preco);
        $insert->bindParam('estoque', $estoque);
        $bolSucesso = $insert->execute();

        if($bolSucesso) {
            echo 'Registro inserido com sucesso!<br>';
        } else {
            echo 'Erro ao inserir!<br>';
        }
    }
}



?>

<form method="post" action="index.php">
    <label for="modelo">Modelo: </label><input type="text" id="modelo" name="modelo" /><br>
    <label for="preco">Preço: </label><input type="text" id="preco" name="preco" /><br>
    <label for="estoque">Estoque: </label><input type="number" id="estoque" name="estoque" /><br>
    <input type="submit" value="Cadastrar" name="Cadastrar">
</form>
<form method="post" action="index.php">
    <input type="submit" name="apagarTudo" value="Apagar Tudo">
</form>

<table border="1">
<tr>
    <th>Id</th>
    <th>Modelo</th>
    <th>Preço</th>
    <th>Estoque</th>
</tr>
<?php
$consulta = $pdo->query('select * from guitarra');
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $guitarra) {
    ?>

    <tr>
        <td><?php echo $guitarra['id']?></td>
        <td><?php echo $guitarra['modelo']?></td>
        <td><?php echo $guitarra['preco']?></td>
        <td><?php echo $guitarra['estoque']?></td>
    </tr>

    <?php

}

//echo '<pre>' . print_r($resultado, true) . '</pre><br>';

?>
</table>
<body>
</html>