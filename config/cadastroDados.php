<?php

require_once 'conexaobd.php';


    $nome                 = $_POST["nome"];
    $sobrenome            = $_POST["sobrenome"];
    $cpf                  = md5($_POST["cpf"]);
    $dataNascimento       = $_POST["dataNascimento"];
    $escolaridade         = $_POST["escolaridade"];
    $tipoEscola           = $_POST["tipoEscola"];
    $email                = $_POST["email"];
    $senha                = md5($_POST["senha"]);
   



if(isset($_POST['cadastrar'])) {
    $insert = "Insert into usuario 
    (nome,
    sobrenome,
    cpf,
    dataNascimento,
    escolaridade,
    tipoEscola,
    email,
    senha)
       Values  ('$nome',
    '$sobrenome',
    '$cpf', 
    '$dataNascimento',
    '$escolaridade', 
    '$tipoEscola', 
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
                window.location.href='../views/login.php';
                </SCRIPT>");
        
        mysqli_close($conn);
    }
   

}
?>