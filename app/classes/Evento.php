<?php 

class Evento{
    // Criando atributos 
    private $nomeEvento;  // Visibilidade com o atributo ( publico/private )
    private $dataEvento;
    private $banner;
    private $mensagem = []; // Esse atributo irá armazenas as mensagens de erro e sucesso!

    // Criando métodos: comportamentos

         /**
         * @param $campos: Este parâmetro espera receber uma constante ($_POST) 
         * @param $arquivo: Este parâmetro espera receber uma constante $_FILES["banner"]
         */


    public function inicio($campos, $arquivo){
        // Verficar se os campos estão em branco
        if($this->recebeDados($campos)){
            if($this->validaData($campos["dataEvento"])){
                if($this->recebeArquivo($arquivo)){
                    $this->mensagem = [
                        "status" => true,
                        "msg" => "Evento cadastrado com sucesso!"
                    ];
                }
                else{
                    $this->mensagem = [
                        "status" => false,
                        "msg" => "Você precisa enviar uma imagem com formato jpg ou png"
                    ];
                }   
            }
            else{
                $this->mensagem = [
                    "status" => false,
                    "msg"  => "Data do evento é anterior à data atual"
                ];
            }
        }
        else{
            $this->mensagem = [
                "status" => false,
                "msg" => "Os campos não podem ficar em branco",
            ];
            
        }
        return $this->mensagem;
    }

    public function validaData ($data){
        $dataEvento = new DateTime($data); // esta classe precisa de uma data no padrão americano para funcionar
        $dataAtual = new DateTime("now"); // estamos pegando a data atual
    
        // echo $dataEvento->format("d/m/Y"); // mostrando a data no padrão brasileiro
        
        // echo "<br>";
        // print_r($dataAtual);
    
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
        // echo "<br>Arquivo vazio!";  empty testa se estar vazio 
            return false;
        }
        else{
        // echo "<br>Arquivo encontrado!";

        $infoArquivo = pathinfo($this->banner["name"]); // pathinfo = retorna um vetor com informações mais detalhadas do arquivo

        /*
        echo "<br>";
        echo "<pre>";
        print_r($infoArquivo);
        echo "<pre>";
        */

        if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
        // echo "<br>Formato de arquivo válido!";
            
        // copiando imagens para o servidor
        $pasta = "../imagens/";

        // Iremos verificar se a pasta existe ou não
        if(!file_exists($pasta)){
            mkdir($pasta, 0777,true); // a função mkdir precisa de 3 parâmetros: 1 = nome da pasta, 2 = permissão para ler e escrever na pasta, 3 = se poderá criar subpastas ou não
        }

        // RENOMEANDO O ARQUIVO!
        $novoNome = new DateTime();
        //echo "<hr>". $novoNome->getTimestamp();
        

        $nomeFinal = $novoNome->getTimestamp().".".$infoArquivo["extension"];
        echo "<hr>".$nomeFinal;



        // $caminhoFinal = $pasta.$this->banner["name"];
        $caminhoFinal = $pasta.$nomeFinal;
        move_uploaded_file($this->banner["tmp_name"], $caminhoFinal); // Substitui o caminho temporário do pc e coloca no caminho final que é o local do nosso serv

        // echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";


        $this->banner = $caminhoFinal;

        return true;
        }

        


        else{
         //echo "<br>Formato de arquivo inválido!";
         
         return false;
        }

        }

    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

}
/*
$meuEvento = new Evento(); // Instanciando um objeto
print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeArquivo($_FILES["banner"]);
*/