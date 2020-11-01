<?php

    session_start();

    require_once 'conexaobd.php';

    if(isset($_POST['logar']) ){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(strlen($email) > 0 && strlen($senha) > 0){
            $select = "SELECT * FROM usuario WHERE email = email AND senha = senha LIMIT 1;";
            $resultado = mysqli_query($conn, $select);

            while($row = mysqli_fetch_assoc($resultado) ){
                if ($row['id_Usuario']){
                    $_SESSION['id_Usuario'] = $row['id_Usuario'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../home.php");
                }
            }
        }

    }

?>