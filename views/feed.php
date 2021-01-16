<?php
session_start();
include('../config/seguranca.php');
$seguranca = seguranca();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/feed.css">

    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
    <title>Home | Conatus</title>
</head>
<body>
    <header>

        <div class="headerContainerFeed">
  
          <div class="logoContainer">
            <img src="../images/logo.svg" alt="Logo da Conatus">
            <span>Conatus</span>
          </div>
  
          <nav class="navBar">
            <a href="../index.html" class="botaoInicio">Início</a>
            <div class="iconeVoltar">
              <a href="../index.html"><img src="../images/arrow-back.svg" alt="botão para voltar a página inicial"></a>
            </div>
  
      </header>

    <div class="pagina">
        <main class="feed">
            <div class="feedPersonalizado">
                <h2><?php echo "Olá, ". $_SESSION['nome']."!"; ?></h2>
                <p>Em breve, nossos serviços estarão disponíveis!</p>
            </div>
            <div class="linksContato">
                <div class="icones">
                    <li><a href="mailto:projeto.conatus@gmail.com"><i class="far fa-envelope"></i></a></li>
                    <li><a target="_blank" href="https://github.com/projeto-conatus"><i class="fab fa-github"></i></a></li>
                </div>
            </div>
        </main>
        <img src="../images/arte_tela feed.svg" alt="Ilustração menino e menina dando passos" />
    </div>
</body>
</html>
