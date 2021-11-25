<?php
require_once ('conexao.php');

session_start();
if(isset($_SESSION['usuario'])){
    $isAdmin = $_SESSION['permissoes'] == 'admin'? true : false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $insert = $pdo->prepare('insert into 
            usuarios (login, senha, nome, permissoes) 
            values (:login, :senha, :nome, :permissoes)');

    $login = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

    if($_SESSION['permissoes'] == 'admin') {
        $permissoes = filter_input(INPUT_POST, 'permissoes', FILTER_SANITIZE_STRING);
    } else {
        $permissoes = 'cliente';
    }


    $senhaParaArmazenarNoBanco = password_hash($senha, PASSWORD_DEFAULT);

    $insert->bindParam('login', $login);
    $insert->bindParam('senha', $senhaParaArmazenarNoBanco);
    $insert->bindParam('nome', $nome);
    $insert->bindParam('permissoes', $permissoes);
    $bolSucesso = $insert->execute();

    if($bolSucesso) {
        header('Location:index.php');
    } else {
        $erro = 'Não foi possível criar o usuário';
    }
}

?>
<html>
<head>
    <script>
        function compararSenhas() {
            let senha = document.getElementById('senha').value;
            let senha_repetida = document.getElementById('senha_repetida').value;

            if(senha == senha_repetida) {
                return true;
            } else {
                alert('São diferentes seu animal imundo');
                return false;
            }
        }
    </script>
</head>
<body>
<form action="cadastro.php" method="post"  onsubmit="return compararSenhas();">
    Nome: <input type="text" name="nome"><br>
    Usuário: <input type="text" name="usuario"><br>
    Senha: <input type="password" name="senha" id="senha"><br>
    Repetir Senha: <input type="password" name="senha_repetida"  id="senha_repetida"><br>
    <?php if(isset($isAdmin) && $isAdmin) { ?>
        <input type="radio" name="permissoes" value="cliente" checked>Cliente
        <input type="radio" name="permissoes" value="admin">Administrador<br>
    <?php }?>
    <input type="submit" value="Cadastrar">
    <a href="index.php">Cancelar</a>
</form>
<?php if(isset($erro)) echo $erro;?>
</body>
</html>