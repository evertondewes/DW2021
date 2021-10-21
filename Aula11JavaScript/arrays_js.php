<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Array de entrada simples</title>
</head>
<body>
<form onsubmit="return false;">
    Nome: <input type="text" id="nome"><br>
    Idade: <input type="text" id="idade"><br>
    <input type="button" value="Adicionar" onclick="adicionar();">
    <input type="button" value="Listar" onclick="listar();">
</form>
<br>
<p id="saida"></p>
<script>
    class Pessoa {
        constructor(nome, idade) {
            this.nome = nome;
            this.idade = idade;
        }
    }

    let arrayPessoas = [];

    function adicionar() {

        let nome = document.getElementById('nome').value;
        let idade = document.getElementById('idade').value;


        let p = new Pessoa(nome, idade);

        arrayPessoas.push(p);

        document.getElementById('nome').value = '';
        document.getElementById('idade').value = '';
        document.getElementById('nome').focus();
    }

    function listar() {
        let htmlSaida = '';
        // for (let i = 0; i < arrayPessoas.length; i++) {
        //     htmlSaida = htmlSaida + arrayPessoas[i] + '<br>';
        // }

        arrayPessoas.forEach(function (elemento) {
            htmlSaida += elemento.nome + ', idade ' + elemento.idade  +  '<br>';
        });

        console.log(JSON.stringify(arrayPessoas));

        document.getElementById('saida').innerHTML = htmlSaida;
    }
</script>
</body>
</html>