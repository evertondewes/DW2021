<?php
session_start();
require_once ('../conexao.php');

$retorno = [];


file_put_contents('post.txt', print_r($_POST, true));


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $consulta = $pdo->prepare('select nome, senha, permissoes 
                                        from usuarios
                                        where login = :login  ');

    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    $consulta->execute(array(':login' => $login));
    $resultado = $consulta->fetchAll();

    if(count($resultado) == 1) {
        $senhaCOrreta = password_verify($senha, $resultado[0]['senha']);
        if($senhaCOrreta) {
            $_SESSION['usuario'] = $login;
            $_SESSION['nome'] = $resultado[0]['nome'];
            $_SESSION['permissoes'] = $resultado[0]['permissoes'];
            if($_SESSION['permissoes'] == 'admin') {
                $retorno['sucesso'] = true;
                $retorno['admin'] = true;
              //  header('Location:painel_administrador.php');
            } else {
                $retorno['sucesso'] = true;
                $retorno['admin'] = false;
           //     header('Location:painel_cliente.php');
            }

        } else {
            $retorno['sucesso'] = false;
            $retorno['mensagem'] = 'Senha incorreta';
        }
    } else if(count($resultado) == 0) {
        $retorno['sucesso'] = false;
        $retorno['mensagem'] = 'Usuário incorreto';
    } else {
        $retorno['sucesso'] = false;
        $retorno['mensagem'] = 'Erro no sistema';
    }
}

echo json_encode($retorno);