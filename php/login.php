<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../images/logotrans.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="../css/estilologin.css" />

    <title>Login - Conatus</title>
  </head>
  <body>
    <header>

      <div class="headerContainer">

        <div class="logoContainer">
          <img src="../images/logo.svg" alt="Logo da Conatus">
        </div>

        <nav class="navBar">
          <div class="iconeMenu" onclick="exibeMenu()">
            <span>Voltar</span>
          </div>

          <ul class="itensMenu ">
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
            <li ><a href="#" class="botaoAcessar">Acessar</a></li>
          </ul>
        </nav>
      </div>

    </header>
 <main>
  <h4>Login</h4>
 </main>
   
    
    <div class="formulario">
      <form action="./actions/validaLogin.php"  method="POST">
        <label for="email">E-mail:</label>
        <input
          type="text"
          id="email"
          placeholder="Digite seu e-mail"
          name="email"
        />
        <label for="senha">Senha:</label>
        <input
          type="password"
          id="senha"
          placeholder="Digite sua senha"
          name="senha"
        />
        <input class="enviar" name="logar" value="Entrar" type="submit" value="Enviar" />
      </form>

      <img src="../images/arte_rapaz.svg" alt="Logo do menino" />
    </div>
    <script src="../scripts/script.js"></script>
  </body>
</html>
