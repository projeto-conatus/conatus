<?php

include("conexaobd.php");


    $nome                 = $_POST["nome"];
    $sobrenome            = $_POST["sobrenome"];
    $cpf                  = $_POST["cpf"];
    $data_Nascimento      = $_POST["data_Nascimento"];
    $endereco             = $_POST["endereco"];
    $numero               = $_POST["numero"];
    $complemento_Endereco = $_POST["complemento_Endereco"];
    $bairro               = $_POST["bairro"];
    $cidade               = $_POST["cidade"];
    $uf                   = $_POST["uf"];
    $cep                  = $_POST["cep"];
    $escolaridade         = $_POST["escolaridade"];
    $tipo_De_Escola       = $_POST["tipo_De_Escola"];
    $grupo_Etnico_Racial  = $_POST["grupo_Etnico_Racial"];
    $genero               = $_POST["genero"];
    $portador_Deficiencia = $_POST["portador_Deficiencia"];
    $tipo_Deficiencia     = $_POST["tipo_Deficiencia"];
    $email                = $_POST["email"];
    $senha                = $_POST["senha"];

   

if(isset($_POST['submit'])) {
    $insert = "Insert into usuario(nome,sobrenome,cpf,data_Nascimento,endereco,numero,complemento_Endereco,bairro,cidade,uf,cep,escolaridade,tipo_De_Escola,tipo_Deficiencia,email,senha)
    Values  ('$nome',
    '$sobrenome',
    '$cpf', 
    '$data_Nascimento',
    '$endereco',
    '$numero',
    '$complemento_Endereco', 
    '$bairro', 
    '$cidade', 
    '$uf', 
    '$cep', 
    '$escolaridade', 
    '$tipo_De_Escola', 
    '$grupo_Etnico_Racial', 
    '$genero',
    '$portador_Deficiencia'
    '$tipo_Deficiencia', 
    '$email', 
    '$senha')";
            


    $result = $conn->query($insert);
    var_dump($insert);

    if(!$result){
        echo "Não foi inserido!";
    }else {
        mysqli_close($conn);
    }
   

}
?>