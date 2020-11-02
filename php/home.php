<?php
    session_start();
    if(isset($_SESSION['id_Usuario'])){
        echo "<h3>Sessão Iniciada e usuário Logado</h3>";
        //include_once "header";
?>
<!-- Página Home -->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
    </head>
    <body>
        <h3>Home</h3>
    </body>
    </html>


<?php
    //include_once "rodapé";
    } else{
        header("Location: /login.php");
    }

 
?>