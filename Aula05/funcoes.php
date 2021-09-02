<?php

function exibe_nome($nome, $sobrenome) {
    for($i = 0; $i < 3 ; $i++) {
        echo "$nome - $sobrenome<br>";
    }
}

exibe_nome('Everton', 'Dewes');

exibe_nome('João', 'Meirelez');

exibe_nome('Pedro', 'Silva');