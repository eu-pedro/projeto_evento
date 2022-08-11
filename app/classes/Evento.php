<?php 

class Evento{
    // Criando atributos 
    public $nomeEvento;  // Visibilidade com o atributo ( publico/private )
    public $dataEvento;
    public $banner;
    public $mensagem = []; // Esse atributo irá armazenas as mensagens de erro e sucesso!

    // Criando métodos: comportamentos
    public function validaData ($data){
        $dataEvento = new DateTime($data); // esta classe precisa de uma data no padrão americano para funcionar
        $dataAtual = new DateTime("now"); // estamos pegando a data atual
    
        echo $dataEvento->format("d/m/Y"); // mostrando a data no padrão brasileiro
        
        echo "<br>";
        print_r($dataAtual);
    
        if($dataEvento > $dataAtual){
            // echo "<p> Data do evento cadastrada com sucesso!</p>";
            return true;
        } else{
            // echo "<p>A data do evento não pode ser igual ou anterior a data atual!</p>";
            return false;
        }
    
    
    }


    public function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento = $campos["dataEvento"];
        if(empty($this->nomeEvento || empty($this->dataEvento))){
            return false;
        }
        else{
            return true;
        }



        echo "O {$this->nomeEvento} vai acontecer na data {$this->dataEvento}";
    }

    // Essa função irá receber o comando no padrão $_FILES["nome_arquivo"]
    public function recebeArquivo($banner){

        //$nomeArquivo = $_FILES["banner"]["name"]; // retorna toda informação do arquivo
        //$nomeTemporario = $_FILES["banner"]["tmp_name"];
          $this->banner = $banner; // estou atribuindo $_FILES["banner"] para $this->banner
          


        if(empty($this->banner["name"])){
        echo "<br>Arquivo vazio!"; // empty testa se estar vazio 
        }
        else{
        echo "<br>Arquivo encontrado!";
        $infoArquivo = pathinfo($this->banner["name"]); // pathinfo = retorna um vetor com informações mais detalhadas do arquivo
        echo "<br>";
        echo "<pre>";
        print_r($infoArquivo);
        echo "<pre>";


        if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
        echo "<br>Formato de arquivo válido!";

        // copiando imagens para o servidor
        $pasta = "../imagens/";

        // Iremos verificar se a pasta existe ou não
        if(!file_exists($pasta)){
            mkdir($pasta, 0777,true); // a função mkdir precisa de 3 parâmetros: 1 = nome da pasta, 2 = permissão para ler e escrever na pasta, 3 = se poderá criar subpastas ou não
        }

        $caminhoFinal = $pasta.$this->banner["name"];
        move_uploaded_file($this->banner["tmp_name"], $caminhoFinal); // tira o arquivo do seu pc e manda pro servidor
        echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";
        }
         else{
         echo "<br>Formato de arquivo inválido!";
        }

        }

    }

}

$meuEvento = new Evento(); // Instanciando um objeto
print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeDados($_POST);
