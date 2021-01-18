<?php
session_start();
include('../config/seguranca.php');
$seguranca = seguranca_usuario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilhas - Conatus</title>
    <link rel="stylesheet" href="../css/feedTrilha.css">
    <link rel="stylesheet" href="../css/feedHeader.css">
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">

    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="headerContainer">
            <div class="logoContainer">
                <img src="../images/logo.svg" alt="Logo da Conatus" title="Logo da Conatus">
            </div>

            <nav class="navBar">
                <button class="botaoMenuFeed" title="Menu">Menu</button>

                <div class="linksMenu">
                    <h4 class='saudacao-usuario'><?php echo $_SESSION['nome']; ?></h4>
                    <a href="#"><i class="far fa-bell"></i></a>
                    <a class="botaoPerfil" href="#">Perfil</a>
                    <a href="./feedInicio.php">Inicio</a>
                    <a href="./feedCursos.php">Cursos</a>
                    <a href="#">Vagas</a>
                    <button class="botaoSair">Sair</button>
                </div>
            </nav>
        </div>
    </header>

    <h3 class="titulo">Cursos</h3>

    <main class="conteudoPrincipal">
        <a class="cursos" href="#"><img src="../images/cursos/primeiros-passos-info.png" alt="Primeiros passos em informática" title="Primeiros passos em informática"></a>
        <a class="cursos" href="#"><img src="../images/cursos/primeiros-passos-ingles.png" alt="Primeiros passos em inglês" title="Primeiros passos em inglês"></a>
        <a class="cursos" href="#"><img src="../images/cursos/curriculo.png" alt="Como criar um bom currículo" title="Como criar um bom currículo"></a>
    </main>

    <script src="../scripts/scriptsFeed.js"></script>
</body>

</html>