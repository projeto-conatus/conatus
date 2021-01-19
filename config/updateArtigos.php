<?php
//Sessão
session_start();
//conn
require_once 'conexaobd.php';

if(isset($_POST['btn_editar'])):
    $titulo      = mysqli_escape_string($conn, $_POST['titulo']);
    $subtitulo = mysqli_escape_string($conn, $_POST['subtitulo']);
    $texto     = mysqli_escape_string($conn, $_POST['texto']);
    $imagem     = mysqli_escape_string($conn, $_POST['imagem']);
    $id     = mysqli_escape_string($conn, $_POST['id']);


    $sql = "UPDATE artigo SET titulo = '$titulo', subtitulo = '$subtitulo', texto = '$texto', imagem = '$imagem' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)):
        $_SESSION['up_sucesso'] = "Atualizado com Sucesso!";
        header('Location: ../views/areaAdm.php');
    else:
        $_SESSION['up_erro'] = "Erro ao Atualizar!";
        header('Location: ../view/editaArtigo.php');
    endif;
endif;
?>