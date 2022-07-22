<?php 

class Evento{
    // Criando atributos 
    public $nomeEvento;  // Visibilidade com o atributo ( publico/private )
    public $dataEvento;

    // Criando métodos: comportamentos
    function validaData ($data){
        $dataEvento = new DateTime($data); // esta classe precisa de uma data no padrão americano para funcionar
        $dataAtual = new DateTime("now"); // estamos pegando a data atual
    
        echo $dataEvento->format("d/m/Y"); // mostrando a data no padrão brasileiro
        
        echo "<br>";
        print_r($dataAtual);
    
        if($dataEvento > $dataAtual){
            echo "<p> Data do evento cadastrada com sucesso!</p>";
        } else{
            echo "<p>A data do evento não pode ser igual ou anterior a data atual!</p>";
        }
    
    
    }


    function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento = $campos["dataEvento"];
        echo "O {$this->nomeEvento} vai acontecer na data {$this->dataEvento}";
    }
}

$meuEvento = new Evento(); // Instanciando um objeto
print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeDados($_POST);
