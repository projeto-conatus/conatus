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

    <title>Login | Conatus</title>
</head>

<body>
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
            <form action="../config/validaLogin.php" method="POST">
                <label for="email">E-mail:</label>
                <input required type="text " id="email" placeholder="Digite seu e-mail" name="email"
                    title="Digite seu e-mail" />
                <label for="senha">Senha:</label>
<<<<<<< HEAD:views/login.html
                <input required type="password" id="senha" placeholder="Digite sua senha" name="senha" title="Digite sua senha" />
                <button  class="botaoEntrar" name="logar" type="submit" title="Clique após ter preenchido seus dados">Entrar</button>
                <a class="esqueceuSenha" href="#" title="Clique aqui caso tenha esquecido sua senha" onclick="alert('Em breve estará disponível')">Esqueceu sua senha?</a>
=======
                <input required type="password" id="senha" placeholder="Digite sua senha" name="senha"
                    title="Digite sua senha" />
                <button class="botaoEntrar" name="logar" type="submit"
                    title="Clique após ter preenchido seus dados">Entrar</button>
                <a class="esqueceuSenha" href="#" title="Clique aqui caso tenha esquecido sua senha">Esqueceu sua
                    senha?</a>
>>>>>>> 6c6281830465d9019b4e08e6653e60d25700b7bc:views/login.php
            </form>
            <img src="../images/arte_login.svg" alt="Logo do menino" title="Arte ilustrativa com dois jovens" />
        </div>
    </main>

    <script src="../scripts/script.js "></script>
</body>

</html>