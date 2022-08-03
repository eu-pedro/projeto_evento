<?php 
// criando classe Pessoa
class Pessoa{
    protected $nome;
    protected $idade;
    protected $nomeClasse;
    protected  const  QUALIDADE = "Pensador"; //  constante sempre em caixa alta

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nomeClasse = get_class($this);
    }

    public function relatorio(){
        echo "Olá, estou na classe {$this->nomeClasse}, meu nome é {$this->nome} e tenho {$this->idade} anos, minha qualidade é ". self::QUALIDADE; // constantes em PHP são acessados com :: (dois pontos duplos) e não com $this->
    }
}

class Aluno extends Pessoa{
    private $matricula;
    protected const QUALIDADE = "Estudioso";

    public function __construct($nome, $idade,$matricula)
    {
        parent::__construct($nome, $idade); // Dessa forma estou indicando que vou reutilizar o método construtor da classe mãe;
        $this->matricula = $matricula; 
        
    }
    public function relatorio(){
        echo "Estou na classe {$this->nomeClasse}, meu nome é {$this->nome} e minha matrícula é {$this->matricula}, minha qualidade é: ". parent::QUALIDADE;
    }

}