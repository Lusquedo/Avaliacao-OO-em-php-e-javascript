<?php

class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function descrever() {
        return "{$this->nome}, {$this->idade} anos";
    }

    public function falar() {
        return "falando";
    }
}

class Aluno extends Pessoa {
    private $turma;

    public function __construct($nome, $idade, $turma) {
        parent::__construct($nome, $idade);
        $this->turma = $turma;
    }

    public function descrever() {
        return parent::descrever() . ", estuda ADS e é da turma do {$this->turma}";
    }

    public function falar() {
        return "Lucas pergunta: 'O que é SQL?'";
    }
}

class Professor extends Pessoa {
    private $materia;

    public function __construct($nome, $idade, $materia) {
        parent::__construct($nome, $idade);
        $this->materia = $materia;
    }

    public function descrever() {
        return parent::descrever() . ", é professor de {$this->materia}";
    }

    public function falar() {
        return "Luciano responde: 'SQL é uma linguagem usada para gerenciar e consultar bancos de dados relacionais.'";
    }
}

// Instanciação dos objetos aluno e professor
$aluno = new Aluno("Lucas", 20, "2º Bimestre");
$professor = new Professor("Luciano", 40, "Banco de Dados");

// Exibição dos resultados
echo $aluno->descrever() . "\n";
echo $aluno->falar() . "\n";

echo $professor->descrever() . "\n";
echo $professor->falar() . "\n";

?>