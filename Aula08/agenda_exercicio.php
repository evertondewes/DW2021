<html>
<head>
    <title>Agenda</title>
</head>

<body>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=agenda', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['apagarTudo'])) {

        $totalExcluidos = $pdo->exec('delete from agenda;');

        if ($totalExcluidos === false) {
            echo 'Erro de exclusão!<br>';
        } else {
            echo "Total de registros excluidos $totalExcluidos!<br>";
        }
    } else if (isset($_POST['Atualizar'])) {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);


        $update = $pdo->prepare('update agenda set nome = :nome, telefone = :telefone, endereco = :endereco, 
                                        cidade = :cidade, data_nascimento = :data_nascimento where id = :id');
        $update->bindParam('id', $id);
        $update->bindParam('nome', $nome);
        $update->bindParam('telefone', $telefone);
        $update->bindParam('endereco', $endereco);
        $update->bindParam('cidade', $cidade);
        $update->bindParam('data_nascimento', $data_nascimento);

        try {
            $bolSucesso = $update->execute();
        } catch (Exception $e) {
            echo '<pre>' . print_r($e, true) . '</pre><br>';

        }

        if ($bolSucesso) {
            echo 'Registro atualizado com sucesso!<br>';
        } else {
            echo 'Erro ao atualizar!<br>';
        }
        unset($nome);
        unset($telefone);
        unset($endereco);
        unset($cidade);
        unset($data_nascimento);
    } else  if (isset($_POST['Cadastrar'])){


        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
        $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);

//    echo '<pre>' . print_r($_POST, true) . '</pre><br>';


        $insert = $pdo->prepare('insert into agenda(nome, telefone, endereco, cidade, data_nascimento)
                                    values (:nome, :telefone, :endereco, :cidade, :data_nascimento )');
        $insert->bindParam('nome', $nome);
        $insert->bindParam('telefone', $telefone);
        $insert->bindParam('endereco', $endereco);
        $insert->bindParam('cidade', $cidade);
        $insert->bindParam('data_nascimento', $data_nascimento);

        try {
            $bolSucesso = $insert->execute();
        } catch (Exception $e) {
            echo '<pre>' . print_r($e, true) . '</pre><br>';

        }

        if ($bolSucesso) {
            echo 'Registro inserido com sucesso!<br>';
        } else {
            echo 'Erro ao inserir!<br>';
        }
        unset($nome);
        unset($telefone);
        unset($endereco);
        unset($cidade);
        unset($data_nascimento);

    }
} else {
    if (isset($_GET['apagarID'])) {
        $apagarID = filter_input(INPUT_GET, 'apagarID', FILTER_SANITIZE_NUMBER_INT);
        $delete = $pdo->prepare('delete from agenda where id = :id ');
        $delete->bindParam('id', $apagarID);
        $bolSucesso = $delete->execute();
        if ($bolSucesso) {
            echo 'Registro apagado com sucesso!<br>';
        } else {
            echo 'Erro ao apagar!<br>';
        }
    } else if (isset($_GET['editarID'])) {

        $editarID = filter_input(INPUT_GET, 'editarID', FILTER_SANITIZE_NUMBER_INT);
        $consulta = $pdo->prepare('select * from agenda where id = :id');
        $consulta->bindParam('id', $editarID);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        if (is_array($resultado[0])) {
            $id = $resultado[0]['id'];
            $nome = $resultado[0]['nome'];
            $telefone = $resultado[0]['telefone'];
            $endereco = $resultado[0]['endereco'];
            $cidade = $resultado[0]['cidade'];
            $data_nascimento = $resultado[0]['data_nascimento'];
        }
    }
}


?>

<form method="post" action="agenda_exercicio.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <label for="nome">Nome: </label><input type="text" id="nome" name="nome" value="<?php echo $nome ?>"/><br>
    <label for="telefone">Telefone: </label><input type="text" id="telefone" name="telefone"
                                                   value="<?php echo $telefone ?>"/><br>
    <label for="endereco">Endereco: </label><input type="text" id="endereco" name="endereco"
                                                   value="<?php echo $endereco ?>"/><br>
    <label for="cidade">Cidade: </label><input type="text" id="cidade" name="cidade" value="<?php echo $cidade ?>"/><br>
    <label for="data_nascimento">Data de nascimento: </label><input type="date" id="data_nascimento"
                                                                    name="data_nascimento"
                                                                    value="<?php echo $data_nascimento ?>"/><br>
    <?php
    if (isset($_GET['editarID'])) {
        echo '<input type="submit" value="Atualizar" name="Atualizar">';
        echo '<input type="submit" value="Cancelar" name="Cancelar">';
    } else {
        echo '<input type="submit" value="Cadastrar" name="Cadastrar">';
    }

    ?>

</form>
<form method="post" action="agenda_exercicio.php">
    <input type="submit" name="apagarTudo" value="Apagar Tudo">
</form>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Cidade</th>
        <th>Data de Nascimento</th>
        <th>Data Cadastro</th>
        <th>Apagar</th>
        <th>Editar</th>
    </tr>
    <?php
    $consulta = $pdo->query('select * from agenda');
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultado as $registro) {
        echo '<tr>';
        echo '<td>' . $registro['id'] . '</td>';
        echo '<td>' . $registro['nome'] . '</td>';
        echo '<td>' . $registro['telefone'] . '</td>';
        echo '<td>' . $registro['endereco'] . '</td>';
        echo '<td>' . $registro['cidade'] . '</td>';
        echo '<td>' . $registro['data_nascimento'] . '</td>';
        echo '<td>' . $registro['data_cadastro'] . '</td>';
        echo '<td><a href="agenda_exercicio.php?apagarID=' . $registro['id'] . '">Apagar</a></td>';
        echo '<td><a href="agenda_exercicio.php?editarID=' . $registro['id'] . '">Editar</a></td>';
        echo '</tr>';
    }
    ?>
</table>
<body>
</html>