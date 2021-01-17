<?php
//Sessão
session_start();
//CONEXAO
require_once 'conexaobd.php';


if(isset($_POST['btn_deletar'])):
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM artigo WHERE id = '$id'";

    if(mysqli_query($conn, $sql)):
     //  $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../views/areaAdm.php');
    else:
     //   $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('Location: ../views/areaAdm.php');
    endif;
endif;
?>