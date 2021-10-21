<html>
<head>
    <script src="biblioteca.js"></script>
</head>
<body>
<form action="formulario.php" method="post" onsubmit="return validarSenha(
                                                                document.getElementById('senha'),
                                                                document.getElementById('senha_repetida'),
                                                                document.getElementById('mensagem_erro') );">

    Entre com a nova senha: <input type="password" name="senha" id="senha" onkeyup="senhaEstaNoPadrao(
                                                                document.getElementById('senha'),
                                                                document.getElementById('mensagem_erro'),
                                                                document.getElementById('senha_digitada')
    );">
    <br>
    Repita a senha: <input type="password" name="senha_repetida" id="senha_repetida" onkeyup="validarSenha(
                                                                                                document.getElementById('senha'),
                                                                                                document.getElementById('senha_repetida'),
                                                                                                document.getElementById('mensagem_erro') );">
    <br>
    Senha permanente:
    <input type="radio" name="senha_permanente" id="senha_permanente" value="true" checked>Sim
    <input type="radio" name="senha_permanente" id="senha_permanente" value="false">Não
    <input type="radio" name="senha_permanente" id="senha_permanente" value="60">60 dias
    <br>
    Senha Fraca:
    <input type="radio" name="permite_senha_fraca" id="permite_senha_fraca" value="true" checked>Sim
    <input type="radio" name="permite_senha_fraca" id="permite_senha_fraca" value="false">Não
<br>
    <input type="submit" value="Alterar a senha">
</form><br>

<h1 id="mensagem_erro"></h1><br>
<h2 id="senha_digitada"></h2>

<?php
echo '<pre>' . print_r($_POST, true) . '</pre>';
?>

</body>
</html>


