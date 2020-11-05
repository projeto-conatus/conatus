<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conatus</title>
  <!-- <link rel="stylesheet" href="../css/feed.css"> -->
  <link rel="stylesheet" href="../css/cadastro.css">

  <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
  

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
        <span>Conatus</span>
      </div>

      <nav class="navBar">
        <a href="#" class="botaoInicio text-white">Início</a>
        <div class="iconeVoltar">
          <a href="#"><img src="../images/arrow-back.svg" alt="botão para voltar a página inicial"></a>
        </div>

  </header>

      <h3 class="tituloCadastro">Cadastre-se</h3>

    <div class="container">

      <div class="col-md-6 offset-md-3">

        <form class="needs-validation" novalidate>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validationCustom01">Nome</label>
              <input type="text" class="form-control" id="validationCustom01" name="" placeholder="Digite seu nome" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom02">Sobrenome</label>
              <input type="text" class="form-control" id="validationCustom02" name="" placeholder="Digite seu sobrenome" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-7">
              <label for="validationCustom03">CPF</label>
              <input type="text" class="form-control" id="validationCustom03" name="" placeholder="Digite seu CPF" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-5">
              <label for="validationCustom04">Data de Nascimento</label>
              <input type="text" class="form-control" id="validationCustom04" name="" placeholder="Digite sua data de nascimento" required>
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
              <input type="text" class="form-control" id="validationCustom05" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-3">
              <label for="validationCustom06">Numero</label>
              <input type="text" class="form-control" id="validationCustom06" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-7">
              <label for="validationCustom07">Complemento</label>
              <input type="text" class="form-control" id="validationCustom07" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-5">
              <label for="validationCustom08">Bairro</label>
              <input type="text" class="form-control" id="validationCustom08" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom09">Cidade</label>
              <input type="text" class="form-control" id="validationCustom09" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-2">
              <label for="validationCustom10">UF</label>
              <input type="text" class="form-control" id="validationCustom10" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-4">
              <label for="validationCustom11">CEP</label>
              <input type="text" class="form-control" id="validationCustom11" name="" placeholder="" required>
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
              <input type="text" class="form-control" id="validationCustom12" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom13">Tipo de Escola</label>
              <input type="text" class="form-control" id="validationCustom13" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom14">Grupo Étnico Racial:</label>
              <input type="text" class="form-control" id="validationCustom14" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom15">Gênero</label>
              <input type="text" class="form-control" id="validationCustom15" name="" placeholder="" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom16">Deficiente fisico?</label>
              <input type="text" class="form-control" id="validationCustom16" name="" placeholder="Sim / Não" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom17">Tipo de Deficiência:</label>
              <input type="text" class="form-control" id="validationCustom17" name="" placeholder="" required>
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
              <input type="text" class="form-control" id="validationCustom18" name="" placeholder="email@exemplo.com" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="validationCustom19">Senha</label>
              <input type="text" class="form-control" id="validationCustom19" name="" placeholder="Senha" required>
              <div class="invalid-feedback">
                <p style="color: white;">Favor preencher este campo
                <p>
              </div>
            </div>
          </div>

          <hr>
          <button class="btn btn-primary btn-lg btn-block enviar" type="submit">Cadastrar</button>
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

</body>

</html>