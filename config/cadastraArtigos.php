<?php

//Sessão
session_start();
//CONEXAO
require_once 'conexaobd.php';

if(isset($_POST['btn_cadastrar'])):
    $titulo = mysqli_escape_string($conn, $_POST['titulo']);
    $subtitulo = mysqli_escape_string($conn, $_POST['subtitulo']);
    $texto = mysqli_escape_string($conn, $_POST['texto']);
    $imagem = mysqli_escape_string($conn, $_POST['imagem']);

    $sql = "INSERT INTO artigo (titulo, subtitulo, texto, imagem) 
    VALUES('$titulo', '$subtitulo', '$texto', '$imagem');";


    if(mysqli_query($conn, $sql)):
        $_SESSION['cad_sucesso'] = "Cadastrado com Sucesso!";
        header('Location: ../views/cadastroArtigo.php');
    else:
        $_SESSION['cad_erro'] = "Erro ao Cadastrar!";
        header('Location: ../views/cadastroArtigo.php');
    endif;

endif;