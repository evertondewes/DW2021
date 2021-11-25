<?php
require_once ('conexao.php');

session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: painel_administrador.php');
}


?>
<html>
<head>
    <script>
        function retornoLogin(){
             console.log(this.readyState , this.status);
            if(this.readyState == 4 && this.status == 200) {
                let resposta = JSON.parse(this.responseText);
                if(resposta.sucesso) {
                    if(resposta.admin) {
                        document.location.href = 'painel_administrador.php';
                    } else {
                        document.location.href =  'painel_cliente.php';
                    }

                } else {
                    let resposta = JSON.parse(this.responseText);
                    document.getElementById('retorno_login').innerText = resposta.mensagem;
                }

            }
        }

        function validaLogin(){
            let login = document.getElementById('login').value;
            let senha = document.getElementById('senha').value;
            let req = new XMLHttpRequest();
            req.onreadystatechange = retornoLogin;
            req.open("POST", "api/valida_login.php", true);
            req.setRequestHeader('Content-Type', "application/x-www-form-urlencoded");
            req.send('login=' + login + '&senha=' + senha);
            // console.log('mensagem enviada');
        }


    </script>
</head>
<body>
<form method="post" action="index.php" onsubmit="return false;">
    Usuário: <input type="text" name="login" id="login"/><br>
    Senha: <input type="password" name="senha" id="senha"/><br>
    <input type="button" value="Logar" onclick="validaLogin()"/>
    <a href="cadastro.php">Novo usuário</a>
</form>
<div id="retorno_login"></div>
</body>
</html>
