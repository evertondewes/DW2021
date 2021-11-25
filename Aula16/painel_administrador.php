<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    die('atenção, usuário não logado. Isso será reportado');
}
if($_SESSION['permissoes'] != 'admin') {
    die('atenção, você não tem permissão para estar aqui');
}
?>
<html>
<body>
<h1>Bem vindo administrador <?php echo $_SESSION['nome'] ?></h1>
<a href="logoff.php">Sair</a>
</body>
</html>
