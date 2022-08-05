<?php
class Animal{
    protected $peso;
    protected $classe;
    protected $cor;
    protected $nomeClasse;

    public function __construct($peso, $classe, $cor)
    {
        $this->peso = $peso;
        $this->classe = $classe;
        $this->cor = $cor;
        $this->nomeClasse = get_class($this);
    }

    public function estaCacando(){
        echo "O animal de {$this->peso} kg<br>";
    }

    public function dormir(){
        echo "Não pertube! O animal de cor {$this->cor} está dormindo";
    }
}

class Cachorro extends Animal{

    private $raca;

    public function __construct($peso, $classe, $cor, $raca){
        parent::__construct($peso, $classe, $cor);
        $this->raca = $raca;
    }

    public function uivar(){
        echo "O animal {$this->nomeClasse}, de peso {$this->peso} kg, do classe {$this->classe} da cor {$this->cor}, possui a raça {$this->raca} e está uivandooo!";
    }
}

class Peixe extends Animal{
    private $tipoAgua;

    public function __construct($peso, $classe, $cor, $tipoAgua){
        parent::__construct($peso, $classe, $cor);
        $this->tipoAgua = $tipoAgua;
    }

    public function nadar(){
        echo "O animal {$this->nomeClasse} de peso {$this->peso} kg da classe {$this->classe}, de cor {$this->cor} vive na água: {$this->tipoAgua}";
    }
}