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

    <h3 class="titulo">Início</h3>

    <main class="conteudoPrincipal">
    <!-- <div class="gridEsquerdo"> -->

        <section class="artigos">
            <?php require_once("../config/selectArtigos.php"); ?>
        </section>

        <!--
            
            <div class="capa">
                <img src="../images/arte_homepage.svg" alt="">
            </div>
            <h1>Titulo</h1>
            <h3>Subtitulo</h3>
            <hr>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum culpa itaque dolorem facere eos amet nostrum
                commodi delectus sunt. Delectus, officia tempora voluptates asperiores laborum alias sit ut at repudiandae.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolorem facilis ea pariatur laudantium quia ullam cumque provident, corporis ut voluptatum beatae odit voluptas fugit dolor nulla voluptatibus sunt quasi?
                Veniam vitae corporis, possimus officia rem quis cum tempore dignissimos, ea itaque quam minima hic facere omnis, unde perferendis explicabo est commodi. Repudiandae rerum delectus officiis corporis? Dolores, laudantium voluptatem.
                Perspiciatis repellendus voluptate facere id, nulla, maxime esse consectetur earum possimus similique quo accusamus aperiam, neque natus ipsum rem! Consequuntur tempore harum accusamus eum temporibus quos consequatur impedit velit totam?
                Molestiae dolorem nulla obcaecati ut sapiente voluptatum! Error odio provident tenetur voluptatum accusamus repellat molestias eius laborum, enim doloremque ipsum ab similique quod accusantium, dicta sequi unde iste nobis. Facilis?
                Quis, aliquid alias. Deserunt voluptas assumenda harum quo voluptatum praesentium molestias eum commodi eius repellendus aliquam deleniti, esse corporis sunt in odio reiciendis ratione. Incidunt doloremque dolore architecto culpa ducimus!
                Repellat eaque odit temporibus eos sed aut quis inventore voluptatem officia. Quaerat doloremque ea porro, perspiciatis minima quidem maiores deleniti ex error, esse repudiandae aspernatur nobis architecto animi soluta blanditiis!
                Hic vero officiis corporis dignissimos doloribus, rerum iure iste ducimus incidunt quasi ullam consequuntur suscipit! Omnis, quo modi repellat recusandae odio neque, velit rem a amet, vel suscipit. Adipisci, deleniti.
                Quaerat tenetur illo reprehenderit porro, non consequuntur sapiente, reiciendis repudiandae, consequatur nobis quas culpa quo expedita neque eaque cum debitis. Voluptatem nulla quibusdam, aperiam quasi iure quo excepturi amet quos.
                Aut veritatis, doloremque deserunt beatae esse odio expedita provident dolore minus tempore dolores quod animi perferendis! Optio veniam vero eum quam blanditiis. Blanditiis rem magnam, laborum sint repellendus totam doloremque!
                Ipsam assumenda nihil libero temporibus quam, esse non repellat eligendi commodi modi illum nisi illo excepturi cupiditate voluptates at ut tenetur et totam, quisquam, necessitatibus impedit tempora soluta dolores! Ab.
            </p>

         -->

         </div> 
         <!-- <div class="gridDireito">  -->
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

        <!-- </div>   -->
    </main>

    <script src="../scripts/scriptsFeed.js"></script>
</body>

</html>