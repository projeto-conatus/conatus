<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conatus</title>
  
  <link rel="stylesheet" href="../css/cadastro.css"> 
  <link rel="shortcut icon" href="../images/favlogo-blue.png" type="image/x-icon">
  

  <!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!--BOOTSTRAP-->
  <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
</head>

<body>
 

    <header>

      <div class="headerContainer">

        <div class="logoContainer">
          <img src="../images/logo.svg" alt="Logo da Conatus">
        </div>

        <nav class="navBar">
            <a class="botaoVoltar"href="#"><img src="../images/arrow-back.svg" alt="">Voltar</a>
        </nav>
      </div>

    </header>

    
      <h3 class="titulocadastro">Cadastre-se <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
          <path fill-rule="evenodd"
            d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
        </svg></h3>
    


    <div class="container">


      <div class="col-md-6 offset-md-3">

        <form class="needs-validation" novalidate action="actions/cadastroDados.php" method="POST">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validationCustom01">Nome</label>
              <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom02">Sobrenome</label>
              <input type="text" class="form-control" id="validationCustom02" name="sobrenome" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-7">
              <label for="validationCustom03">CPF</label>
              <input type="text" class="form-control" id="validationCustom03" name="cpf" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-5">
              <label for="validationCustom04">Data de Nascimento</label>
              <input type="text" class="form-control" id="validationCustom04" name="dataNascimento" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>
          </div>

          <hr>

          <!-- 
            <div class="form-row">
            <div class="form-group col-md-9">
              <label for="validationCustom05">Endereço</label>
              <input type="text" class="form-control" id="validationCustom05" name="endereco" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-3">
              <label for="validationCustom06">Numero</label>
              <input type="text" class="form-control" id="validationCustom06" name="numeroEndereco" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-7">
              <label for="validationCustom07">Complemento</label>
              <input type="text" class="form-control" id="validationCustom07" name="complementoEndereco" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-5">
              <label for="validationCustom08">Bairro</label>
              <input type="text" class="form-control" id="validationCustom08" name="bairro" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom09">Cidade</label>
              <input type="text" class="form-control" id="validationCustom09" name="cidade" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-2">
              <label for="validationCustom10">UF</label>
              <input type="text" class="form-control" id="validationCustom10" name="uf" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-4">
              <label for="validationCustom11">CEP</label>
              <input type="text" class="form-control" id="validationCustom11" name="cep" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>
          </div>

          <hr>
-->

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validationCustom12">Escolaridade</label>
              <input type="text" class="form-control" id="validationCustom12" name="escolaridade" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom13">Tipo de Escola</label>
              <input type="text" class="form-control" id="validationCustom13" name="tipoEscola" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom14">Grupo Étnico Racial:</label>
              <input type="text" class="form-control" id="validationCustom14" name="raca" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom15">Gênero</label>
              <input type="text" class="form-control" id="validationCustom15" name="genero" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom16">Deficiente fisico?</label>
              <input type="text" class="form-control" id="validationCustom16" name="deficiencia" placeholder="Sim / Não" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom17">Tipo de Deficiência:</label>
              <input type="text" class="form-control" id="validationCustom17" name="tipoDeficiencia" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>
          </div>

          <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validationCustom18">Email</label>
              <input type="text" class="form-control" id="validationCustom18" name="email" placeholder="email@exemplo.com" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom19">Senha</label>
              <input type="text" class="form-control" id="validationCustom19" name="senha" placeholder="Senha" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>
          </div>

          <hr>
          <button class="btn btn-primary btn-lg btn-block" name="cadastrar" type="submit">Cadastrar</button>
      </div>
    </div>
    </form>

        <!--ScriptJsBootstrap-->
        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function () {
            'use strict';
            window.addEventListener('load', function () {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
        <!--ScriptJsBootstrap-->
  
        <footer>
      <div class="footerContainer">
        <img src="../images/logoC.svg" alt="logomarca da Conatus" class="logoFooter">

        <p>Projeto Conatus &reg; 2020</p>

        <div class="redesSociais">
          <h4>Redes sociais</h4>
          <div class="icones">
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          </div>
        </ul> 
      </div>

    </footer>

</body>

</html>