<?php 
/*
echo "<pre>";
   print_r($_FILES);
echo "<pre>";
*/

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
        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario, $caminhoFinal);


    }
    else{
        echo "<br>Formato de arquivo inválido!";
    }

}
