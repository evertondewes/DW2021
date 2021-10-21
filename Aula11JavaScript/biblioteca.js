function validarSenha(senha, senha_repetida, mensagem_erro) {

    if(senha.value == senha_repetida.value) {
        if(mensagem_erro.innerHTML.search('<strong>As senhas são diferentes</strong>') >= 0 ) {
            mensagem_erro.innerHTML = '';
        }
        return true;
    } else {
        senha_repetida.style = 'background: red';
        if(mensagem_erro.innerHTML.search('<strong>As senhas são diferentes</strong>') < 0 ) {
            mensagem_erro.innerHTML += '<strong>As senhas são diferentes</strong>';
        }
        return false;
    }
}

function senhaEstaNoPadrao(senha, mensagem_erro, senha_digitada){

    let senhaTexto = senha.value;

    let format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    let numeros = /[1234567890]+/;

    mensagem_erro.innerHTML = '';

    if(!format.test(senhaTexto)){
        mensagem_erro.innerHTML = 'A senha deve ter um caractere especial';
    }

    if(numeros.test(senhaTexto)){
        if(mensagem_erro.innerText.length == 0) {
            mensagem_erro.innerHTML = '';
        }
    } else {
        if(mensagem_erro.innerText.length == 0) {
            mensagem_erro.innerHTML = 'A senha deve ter pelo menos um número';
        } else {
            mensagem_erro.innerHTML += '<br>A senha deve ter pelo menos um número';
        }
    }

    senha_digitada.innerText = senhaTexto;

    validarSenha(
        senha,
        document.getElementById('senha_repetida'),
        mensagem_erro )
}