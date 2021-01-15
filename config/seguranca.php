<?php
function seguranca(){
    if ((empty($_SESSION['idUsuario']))) {
        $_SESSION['loginErro'] = "Você tentou entrar em uma àrea restrita, favor efetuar login:";
        header("Location:../views/login.php");    
        }
}
?>