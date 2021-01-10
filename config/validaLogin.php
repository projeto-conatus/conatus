<?php

    session_start();

    require_once 'conexaobd.php';

    if(isset($_POST['logar']) ){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(strlen($email) > 0 && strlen($senha) > 0){
            $select    = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' LIMIT 1;";
            $resultado = mysqli_query($conn, $select);
            $num_row   = mysqli_num_rows($resultado);
            $row       = mysqli_fetch_array($resultado);

            if( $num_row == 1 ){
                $_SESSION['idUsuario'] = $row['idUsuario'];
                header("Location: ../views/feed.html");

            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Usuário ou senha incorreto!')
                window.location.href='../views/login.html';
                </SCRIPT>");
            }

            
        }

    }

?>
