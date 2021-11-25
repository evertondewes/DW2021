<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    die('atenção, usuário não logado. Isso será reportado');
}
?>
<html>
<body>
<h1>Bem vindo cliente <?php echo $_SESSION['nome'] ?></h1>
<a href="logoff.php">Sair</a>
</body>
</html>
