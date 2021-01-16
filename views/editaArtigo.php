<?php
//conexao
require_once "../config/conexaobd.php";

//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($conn,$_GET['id']);

    $sql = "SELECT * FROM artigo WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/headerOutrasPaginas.css">
    <link rel="stylesheet" href="../css/estilologin.css" />
    <link rel="stylesheet" href="../css/listaArtigos.css" />


    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
    <title>Conatus</title>
</head>

<body>

    <header>
        <div class="headerContainer">

            <div class="logoContainer">
                <img src="../images/logo.svg" alt="Logo da Conatus">
                <span>Conatus</span>
            </div>

            <nav class="navBar">
                <a href="../index.html" class="botaoInicio text-white">Início</a>
                <div class="iconeVoltar">
                    <a href="../index.html"><img src="../images/arrow-back.svg" alt="botão para voltar a página inicial"></a>
                </div>
            </nav>
        </div>
    </header>
    <div class="">
        <div class="container">
            <h2>Editar Cliente</h2>
        <form action="../config/updateArtigos.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>"></input>
                <div class="">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>">
                
                </div>
                <div class="">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" name="subtitulo" id="subtitulo" value="<?php echo $dados['subtitulo'];?>">
                    
                </div>
                <div class="">
                    <label for="texto">Texto</label>
                    <textarea name="texto" id="texto-artigo"> <?php echo $dados['texto'];?></textarea>
                </div>
                <div class="">
                    <label for="imagem">Imagem</label>
                    <input type="text" name="imagem" id="imagem" value="<?php echo $dados['imagem'];?>">
                    
                </div>
                <button type="submit" name="btn_editar" class="btn">Atualizar</button>
                <button class="btn" ><a href="areaAdm.php">Visualizar artigos cadastrados</a></button>
        </form>
        
        </div>
    </div>
</body>
</html>



