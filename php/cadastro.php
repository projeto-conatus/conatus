<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatus</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/apresentacao.css">
    <link rel="shortcut icon" href="../images/favlogo-blue.png" type="image/x-icon">
    <!--BOOTSTRAP-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
<!--BOOTSTRAP-->
    <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
  </head>

<body>
<div class="homePage">

<header>

        <div class="headerContainer">

          <div class="logoContainer">
            <img src="../images/logo.svg" alt="Logo da Conatus">
          </div>

          <nav class="navBar">
            <ul class="itensMenu ">

                <img src="../images/arrow-back.svg" alt="">
              <li><a href="#">Voltar</a></li>
            </ul>
          </nav>
        </div>

      </header>

    <div class="container">
        <form>
            <div class="col-md-6 offset-md-3">

            <center><h3>Cadastre-se <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
</svg></h3></center>
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="CPF">CPF</label>
                        <input type="text" class="form-control" id="CPF" placeholder="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="data_Nascimento">Data nascimento</label>
                        <input type="text" class="form-control" id="data_Nascimento" placeholder="">
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="numero">Numero</label>
                        <input type="text" class="form-control" id="numero">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="complemento_Endereco">Complemento</label>
                        <input type="text" class="form-control" id="complemento_Endereco" placeholder="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep">
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="escolaridade">Escolaridade</label>
                        <input type="text" class="form-control" id="escolaridade" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo_De_Escola">Tipo de Escola</label>
                        <input type="text" class="form-control" id="tipo_De_Escola" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="grupo_Etnico_Racial"> Grupo Étnico Racial:</label>
                        <input type="text" class="form-control" id="grupo_Etnico_Racial" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="genero">Gênero</label>
                        <input type="text" class="form-control" id="genero" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="portador_Deficiencia"> Deficiente fisico?</label>
                        <input type="text" class="form-control" id="portador_Deficiencia" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo_Deficiencia">Tipo de Deficiência:</label>
                        <input type="text" class="form-control" id="tipo_Deficiencia" placeholder="">
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="email@exemplo.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
