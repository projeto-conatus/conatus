<?php

require_once 'conexaobd.php';


    $nome                 = $_POST["nome"];
    $sobrenome            = $_POST["sobrenome"];
    $cpf                  = $_POST["cpf"];
    $dataNascimento       = $_POST["dataNascimento"];
    $escolaridade         = $_POST["escolaridade"];
    $tipoEscola           = $_POST["tipoEscola"];
    $raca                 = $_POST["raca"];
    $genero               = $_POST["genero"];
    $deficiencia          = $_POST["deficiencia"];
    $tipo_Deficiencia     = $_POST["tipoDeficiencia"];
    $email                = $_POST["email"];
    $senha                = $_POST["senha"];
   



if(isset($_POST['cadastrar'])) {
    $insert = "Insert into usuario 
    (nome,
    sobrenome,
    cpf,
    dataNascimento,
    escolaridade,
    tipoEscola,
    raca,
    genero,
    deficiencia,
    tipoDeficiencia,
    email,
    senha)
       Values  ('$nome',
    '$sobrenome',
    '$cpf', 
    '$dataNascimento',
    '$escolaridade', 
    '$tipoEscola', 
    '$raca', 
    '$genero',
    '$deficiencia',
    '$tipo_Deficiencia',
    '$email', 
    '$senha');";



            
    /*Implementação posterior:
    $endereco             = $_POST["endereco"];
    $numero               = $_POST["numeroEndereco"];
    $complemento_Endereco = $_POST["complementoEndereco"];
    $bairro               = $_POST["bairro"];
    $cidade               = $_POST["cidade"];
    $uf                   = $_POST["uf"];
    $cep                  = $_POST["cep"];


    '$endereco',
    '$numero',
    '$complemento_Endereco', 
    '$bairro', 
    '$cidade', 
    '$uf', 
    '$cep', 

    */


    $result = $conn->query($insert);
    

    if($result){
       echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.location.href='../views/login.html';
                </SCRIPT>");
        
        mysqli_close($conn);
    }
   

}
?>