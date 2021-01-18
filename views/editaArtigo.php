<?php
//conexao
require_once '../config/conexaobd.php';
session_start();
include('../config/seguranca.php');
$seguranca = seguranca_adm();
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
    <title>Conatus</title>
</head>

<body>
    
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <header>
        <div class="headerContainer">

            <div class="logoContainer">
                <img src="../images/logo.svg" alt="Logo da Conatus">
                <span>Conatus</span>
            </div>

            <nav class="navBar">
                <a href="../index.html" class="botaoInicio text-white">Início</a>
                <div class="iconeVoltar">
                    <a href="../index.html"><img src="../images/arrow-back.svg"
                            alt="botão para voltar a página inicial"></a>
                </div>
            </nav>
        </div>
    </header>

    <h3 class="tituloLogin">Editar Artigos</h3>

    <div class="container">
        <div class="col-md-6 offset-md-3">

            <form action="../config/updateArtigos.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>"></input>
                <div class="form-row">
                    <div class="form-group col-md-12">

                        <label for="titulo">Título</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'];?>">

                        <label for="subtitulo">Subtitulo</label>
                        <input class="form-control" type="text" name="subtitulo" id="subtitulo" value="<?php echo $dados['subtitulo'];?>">

                        <label for="exampleFormControlTextarea1">Texto</label>
                        <textarea class="form-control" name="texto" id="texto-artigo"> <?php echo $dados['texto'];?></textarea>

                        <label for="imagem">Imagem</label>
                        <input class="form-control" type="text" name="imagem" id="imagem" value="<?php echo $dados['imagem'];?>">

                    </div>
                </div>
                        <button type="submit" name="btn_editar" class="btn btn-warning">Atualizar</button>
                        <hr>
                        <a href="areaAdm.php" class="btn btn-outline-info" role="button">Visualizar artigos cadastrados</a>
            </form>
        </div>
    </div>

</body>

</html>