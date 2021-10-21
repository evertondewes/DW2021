<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Strings</title>
</head>
<body>
<script>
    let str = 'Programando em JavaScript';

    // tamanho
    console.log("length" + str.length);

    // caractere em uma posição
    console.log("charAt " + str.charAt(1));

    // acessando como um array
    console.log("str[1] " + str[1]);

    // Unicode
    console.log("charCodeAt " + str.charCodeAt(1));

    // concatena +
    console.log("concat " + str.concat(" concatenada"));

    // verifica se acaba em 'e'
    console.log("endsWith " + str.endsWith("e"));

    // verifica se contém uma frase/palavra/caractere
    console.log("includes " + str.includes("ndo"));

    // posição da primeira ocorrência
    console.log("indexOf " + str.indexOf("e"));

    // posição da última ocorrência
    console.log("lastIndexOf " + str.lastIndexOf("e"));

    // procura usado expressão regular
    console.log("match " + str.match("e."));

    // retorna uma string repetida
    console.log("repeat " + str.repeat(30));

    // procura string/expressão regular e substitui ela por outra
    console.log("replace " + str.replace("a", "ww"));

    // procura string/expressão regular e retorna a posição
    console.log("search " + str.search("a"));

    // retorna parte da string
    console.log("slice " + str.slice(3));

    // separa em um array de substrings
    console.log("split " + str.split("a"));

    // verifica se começa com um caracter
    console.log("startsWith " + str.startsWith("e"));

    // substring inicio e número de caracteres
    console.log("substr " + str.substr(1, 3));

    // sub string entre duas posições
    console.log("substring " + str.substring(2, 4));

    // converte pra minuscula
    console.log("toLowerCase " + str.toLowerCase());

    // retorna a string do objeto
    console.log("toString " + str.toString());

    // converte pra maiúscula
    console.log("toUpperCase " + str.toUpperCase());

    //retira os espços em branco do inicio e final
    console.log("trim " + str.trim());
</script>
</body>
</html>