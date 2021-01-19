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
                <li><a href="#">Artigo 4 | data </a></li>
                <li><a href="#">Artigo 3 | data </a></li>
                <li><a href="#">Artigo 2 | data </a></li>
                <li><a href="#">Artigo 1 | data </a></li>
            </ul>
        </section>

        <section class="publi">
            <h3>Publicidade</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores aliquid inventore culpa? Molestiae nihil optio quibusdam cupiditate harum ut pariatur deleniti ea consequuntur minima, veniam illo suscipit quod id omnis?
                Porro quo, blanditiis nobis maxime natus perferendis hic distinctio similique enim magnam debitis consequuntur provident, dicta rerum error in vel pariatur ipsam suscipit voluptates eligendi nostrum. Harum tempore ullam obcaecati.
                Minima qui eius nisi et beatae ipsam ipsa corrupti quam fugiat ut fuga, sed cupiditate! Placeat nihil qui consectetur odio sint officiis asperiores, quos minima maiores voluptatum fugit soluta natus?</p>
        </section>

        <section class="novidades">
            <h3>Novidades</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis autem, id suscipit provident aliquam consectetur deserunt consequuntur necessitatibus sapiente magnam odit ut earum aliquid neque nihil! Minima sequi eos porro.
                Ab perferendis illo assumenda maiores harum itaque fuga dignissimos et earum dolore omnis officia veritatis laborum reprehenderit rerum, distinctio, iusto, perspiciatis vel ea repellendus eos consequuntur tenetur autem repellat? Quod.
                Voluptatibus, reprehenderit impedit beatae minima et officiis molestiae tempore tempora consectetur similique quas. Impedit consectetur facilis nam eos aut? Quo laboriosam porro accusantium ipsa nobis quisquam accusamus, nesciunt soluta perspiciatis.
                Rem, corporis provident! Quae suscipit, iusto reiciendis voluptas culpa dignissimos quisquam fuga harum, sed dolore laudantium in! Velit itaque odio ea! Et dolore eaque itaque! Doloremque atque porro vitae optio.</p>
        </section>

    </main>

    <script src="../scripts/scriptsFeed.js"></script>
</body>

</html>