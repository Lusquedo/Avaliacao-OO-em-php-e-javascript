class Pessoa { 
    constructor(nome, idade) { 
        this.nome = nome; 
        this.idade = idade; 
    }

    descrever() { 
        return `${this.nome}, ${this.idade} anos`; 
    }

    falar() {
        return "falando"; // Método padrão
    }
} 

class Aluno extends Pessoa { 
    constructor(nome, idade, turma) { 
        super(nome, idade); 
        this.turma = turma; 
    }

    descrever() { 
        return `${super.descrever()}, estuda ADS e é da turma do ${this.turma}`; 
    }

    falar() {
        return "Lucas pergunta: 'O que é SQL?'"; // pergunta
    }
} 

class Professor extends Pessoa { 
    constructor(nome, idade, materia) { 
        super(nome, idade); 
        this.materia = materia; 
    }

    descrever() { 
        return `${super.descrever()}, é professor de ${this.materia}`; 
    }

    falar() {
        return "Luciano responde: 'SQL é uma linguagem usada para gerenciar e consultar bancos de dados relacionais.'"; // resposta
    }
} 

// Instanciação dos objetos aluno e professor
const aluno = new Aluno("Lucas", 20, "2º Bimestre.");
const professor = new Professor("Luciano", 40, "Banco de Dados.");

// Exibição dos resultados
console.log(aluno.descrever());
console.log(aluno.falar());  // eu faço a pergunta

console.log(professor.descrever());
console.log(professor.falar());  // Luciano responde a pergunta