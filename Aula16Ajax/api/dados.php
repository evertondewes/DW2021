<?php

class Pessoa {

    public $id;
    public $nome;
    public $idade;
    public $cidade;

    public function __construct($id, $nome, $idade, $cidade) {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
    }

}

$id = intval($_GET['id']);

$arrPessoas = [
    new Pessoa(1, 'João', 14, 'São Pedro do Butiá'),
    new Pessoa(2, 'Pedro', 32, 'São Pedro do Butiá'),
    new Pessoa(3, 'Paulo', 84, 'Polto Xaviell'),
    new Pessoa(4, 'José', 140, 'Cerro Largo')
];

$arrReturn = [];

foreach ($arrPessoas as $pessoa) {
    if ($pessoa->id == $id) {
        $arrReturn[] = $pessoa;
    }
}

echo json_encode($arrReturn);

