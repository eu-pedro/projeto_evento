<?php 

// echo "<pre>";
//    print_r($_FILES);
// echo "<pre>";


$nomeArquivo = $_FILES["banner"]["name"]; // retorna toda informação do arquivo
$nomeTemporario = $_FILES["banner"]["tmp_name"];



if(empty($nomeArquivo)){
    echo "<br>Arquivo vazio!"; // empty testa se estar vazio 
}
else{
    echo "<br>Arquivo encontrado!";
    $infoArquivo = pathinfo($nomeArquivo); // pathinfo = retorna um vetor com informações mais detalhadas do arquivo
    echo "<br>";
    echo "<pre>";
       print_r($infoArquivo);
    echo "<pre>";


    if($infoArquivo["extension"] == "jpg" || $infoArquivo["extension"] == "png"){
        echo "<br>Formato de arquivo válido!";

        // copiando imagens para o servidor
        $pasta = "imagens/";

        // Iremos verificar se a pasta existe ou não
        if(!file_exists($pasta)){
            mkdir($pasta, 0777,true); // a função mkdir precisa de 3 parâmetros: 1 = nome da pasta, 2 = permissão para ler e escrever na pasta, 3 = se poderá criar subpastas ou não
        }

        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario, $caminhoFinal); // tira o arquivo do seu pc e manda pro servidor
        echo "<img src='{$caminhoFinal}' width='200px' height='200px'>";

    }
    else{
        echo "<br>Formato de arquivo inválido!";
    }

}
