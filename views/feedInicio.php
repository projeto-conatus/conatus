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
    <title>Feed | Conatus</title>
    <link rel="stylesheet" href="../css/feedInicio.css">
    <link rel="stylesheet" href="../css/feedHeader.css">
    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">

    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include_once('vlibras.html');
    ?>

    <header>
        <div class="headerContainer">
            <div class="logoContainer">
                <img src="../images/logo.svg" alt="Logo da Conatus" title="Logo da Conatus">
            </div>

            <nav class="navBar">
                <button class="botaoMenuFeed" title="Menu">Menu</button>

                <div class="linksMenu">
                    <h4 class='saudacao-usuario'><?php echo "Olá, " . $_SESSION['nome'] . "!"; ?></h4>
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

    <h3 class="titulo">Inicio</h3>

    <main class="conteudoPrincipal">

        <section class="artigos">
            <?php require_once("../config/selectArtigos.php"); ?>
        </section>


        <section class="listaArtigos">
            <h3>Lista de Artigos</h3>
            <ul>
                <li><a href="#"> Apresentação | 20/01/21 </a></li>
            </ul>
        </section>

        <section class="publi">
            <h3>Publicidade</h3>
            <img src="../images/publi/instagram.png" alt="Nos siga no Instagram" title="Nos siga no Instagram">
            <img src="../images/publi/recode.png" alt="Conheça a Recode" title="Conheça a Recode">
        </section>

        <section class="novidades">
            <h3>Novidades</h3>
            <p>Conheça nossas trilhas de cursos clicando em <strong>Cursos</strong>!</p>
        </section>

    </main>

    <script src="../scripts/scriptsFeed.js"></script>
</body>

</html>