<?php
require '../config/cadastraArtigos.php';
include('../config/seguranca.php');
$seguranca = seguranca_adm();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/estilologin.css">
    <link rel="stylesheet" href="../css/headerOutrasPaginas.css">

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


    <h3 class="tituloLogin">Cadastro de Artigos</h3>

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form action="../config/cadastraArtigos.php" method="POST">

            <div class="form-row">
                <div class="form-group col-md-12">
                    
                        <label for="titulo-artigo">Título</label>
                        <input class="form-control" type="text" name="titulo" id="titulo-artigo">
                    
                        <label for="subtitulo-artigo">Subtítulo</label>
                        <input class="form-control" type="text" name="subtitulo" id="subtitulo-artigo">

                        <label for="exampleFormControlTextarea1">Texto</label>
                        <textarea class="form-control" name="texto" id="texto-artigo"></textarea>
                    
                        <label for="imagem">Nome da imagem</label>
                        <input class="form-control" type="text" name="imagem" id="imagem" placeholder="Exemplo: foto.jpg">

                </div>
            </div>  

            <!-- VERIFICA CADASTRO -->
            
            <?php if (isset($_SESSION['cad_sucesso'])) { 
            ?>
                    <div class="feedback_cadSucesso">
                        <?php echo $_SESSION['cad_sucesso'];?>
                    </div>

                    <?php unset($_SESSION['cad_sucesso']);}
                
                    else if (isset($_SESSION['cad_erro'])) { 
            ?>
                    <div class="feedback_cadErro">
                        <?php echo $_SESSION['cad_erro']; ?>
                    </div>
                    <?php unset($_SESSION['cad_erro']);}
            ?>  
           
                <button type="submit" name="btn_cadastrar" class="btn btn-primary">Cadastrar</button>
                <hr>
                <a href="areaAdm.php" class="btn btn-outline-info" role="button">Visualizar artigos cadastrados</a>
            </form>

        </div>
    </div>
</body>

</html>