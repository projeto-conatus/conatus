<?php

    session_start();

    require_once 'conexaobd.php';

    if(isset($_POST['logar']) ){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        //$senha = md5($senha);

        if(strlen($nome) > 0 && strlen($senha) > 0){
            $select    = "SELECT * FROM colaborador WHERE nome = '$nome' AND senha = '$senha' LIMIT 1;";
            $resultado = mysqli_query($conn, $select);
            $num_row   = mysqli_num_rows($resultado);
            $row       = mysqli_fetch_array($resultado);

            if( $num_row == 1 ){
                $_SESSION['idColaborador'] = $row['idColaborador'];
                header("Location: ../views/areaAdm.php");

            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Usuário ou senha incorreto!')
                window.location.href='../views/loginAdm.php';
                </SCRIPT>");
            }

            
        }

    }

?>
