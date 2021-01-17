<?php
function seguranca_usuario(){
    if ((empty($_SESSION['idUsuario']))) {
        $_SESSION['loginErro'] = "Você tentou entrar em uma área restrita, favor efetuar login:";
        header("Location:../views/login.php");    
        }
}

function seguranca_adm(){
    if (((empty($_SESSION['idColaborador'])))) {
        $_SESSION['loginErro'] = "Você tentou entrar em uma área restrita, favor efetuar login:";
        header("Location:../views/loginAdm.php");
    } 
}
?>




