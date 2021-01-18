<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/headerOutrasPaginas.css">
    <link rel="stylesheet" href="../css/estilologin.css" />

    <title>Login Colaboradores | Conatus</title>
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
                <img src="../images/logo.svg" alt="Logo da Conatus" title="logo da Conatus">
                <span>Conatus</span>
            </div>

            <nav class="navBar">
                <a href="../index.html" class="botaoInicio" title="Clique aqui para voltar a tela inicial">Início</a>
                <div class="iconeVoltar">
                    <a href="../index.html"><img src="../images/arrow-back.svg"
                            alt="botão para voltar a página inicial"></a>
                </div>

    </header>

    <main>
        <h4 class="tituloLogin">Login 
    <?php 
    if (isset($_SESSION['loginErro'])) {
    ?>
            <div class="feedback_seg">
                <?php echo $_SESSION['loginErro'];?>
            </div>
    <?php    
                unset($_SESSION['loginErro']);}
    ?>

    </h4>

        <div class="formulario">
            <form action="../config/validaLoginAdm.php" method="POST">
                <label for="nome">Nome do usuário:</label>
                <input required type="text" id="nome" name="nome" title="Digite o nome de usuario" />
                <label for="senha">Senha:</label>
                <input required type="password" id="senha" placeholder="Digite sua senha" name="senha"
                    title="Digite sua senha" />
                <button class="botaoEntrar" name="logar" type="submit"
                    title="Clique após ter preenchido seus dados">Entrar</button>
                <a class="esqueceuSenha" href="#" title="Clique aqui caso tenha esquecido sua senha">Esqueceu sua
                    senha?</a>
            </form>
            <img src="../images/arte_loginAdm.svg" alt="logo administrador" title="Arte de pessoas construindo um site" />
        </div>
    </main>

    <script src="../scripts/script.js "></script>
</body>

</html>