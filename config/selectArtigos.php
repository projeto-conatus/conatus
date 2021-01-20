<?php

require_once 'conexaobd.php';

    $sql = "SELECT * FROM artigo";
    $sql = "SELECT a.titulo, a.subtitulo, a.texto, a.imagem, c.nome, a.imagem 
            FROM autores AS c INNER JOIN artigo AS a ON c.idAutor = a.autor;";
    $resultado = mysqli_query($conn, $sql);
    while($dados = mysqli_fetch_array($resultado)):
        ?>
        <article class="artigo">

            <div class="capa">
                <?php 
                    $diretorio = "../images/";
                    $imagem = $dados['imagem'];
                ?>
                <img src= <?php echo $diretorio . $imagem?> alt="">
            </div>
            <h1><?php echo $dados['titulo']; ?></h1>
            <h3><?php echo $dados['subtitulo'];?></h3>
            <h5>Escrito por <?php echo $dados['nome'];?></h5>
            <hr>
            <p>
                <?php echo $dados['texto'];?>
            </p>
            <br><br><br>

        </article>

    <?php endwhile; ?>
