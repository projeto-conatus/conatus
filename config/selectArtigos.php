<?php

require_once 'conexaobd.php';

    $sql = "SELECT * FROM artigo";
    $resultado = mysqli_query($conn, $sql);
    while($dados = mysqli_fetch_array($resultado)):
        ?>
        <article class="artigo">

            <div class="capa">
                <!-- <?php 
                    //$diretorio = "../images/";
                    //$imagem = $dados['imagem'];
                ?>
                <img src= <?php echo $diretorio . $imagem?>; alt=""> -->
            </div>
            <h1><?php echo $dados['titulo']; ?></h1>
            <h3><?php echo $dados['subtitulo'];?></h3>
            <hr>
            <p>
                <?php echo $dados['texto'];?>
            </p>
            <br><br><br>

        </article>
        
    <?php endwhile; ?>

    