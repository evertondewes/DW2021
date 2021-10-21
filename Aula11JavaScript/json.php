<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Criando um Objeto JSON</title>
</head>
<body>
<form onsubmit="return false;">
    Nome: <input type="text" id="nome"><br>
    Idade: <input type="number" id="idade">
    <input type="button" value="Ação" onclick="jsonFormulario();">
</form>
<script>
    function jsonFormulario() {
        let pessoa = {
            nome: "Everton",
            idade: 28
        };
        console.log(pessoa);

        pessoa.nome = document.getElementById('nome').value;
        pessoa.idade = document.getElementById('idade').value;

        console.log(pessoa);

        let myObject = {
            color: "Red",
            count: 5
        };


        let colors = [pessoa, 1, "green", myObject, "yellow", "purple", "orange", document.getElementById('nome')];

        console.log(colors);
    }
</script>
</body>
</html>