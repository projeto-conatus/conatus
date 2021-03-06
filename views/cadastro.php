<?php
    include_once ("../config/conexaobd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/cadastro.css">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                    <a href="../index.html"><img src="../images/arrow-back.svg" alt="botão para voltar a página inicial"></a>
                </div>

    </header>

    <h3 class="tituloCadastro">Cadastre-se</h3>

    <div class="container">

        <div class="col-md-6 offset-md-3">

            <form class="needs-validation" novalidate action="../config/cadastroDados.php" method="POST">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom01">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Digite seu nome" required>
                        <div class="invalid-feedback">
                            <p style="color: white;">Favor preencher este campo
                                <p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="validationCustom02">Sobrenome</label>
                        <input type="text" class="form-control" id="validationCustom02" name="sobrenome" placeholder="Digite seu sobrenome" required>
                        <div class="invalid-feedback">
                            <p style="color: white;">Favor preencher este campo
                                <p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="validationCustom03">CPF</label>
                        <input type="number" class="form-control" id="validationCustom03" name="cpf" placeholder="Digite seu CPF" required min="1111111111"
                        oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="11">
                        <div class="invalid-feedback">
                            <p class="pCPF" style="color: white;">Digite 11 números<p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="validationCustom04">Data de Nasc.</label>
                        <input type="date" class="form-control" id="validationCustom04" name="dataNascimento" title="Digite sua data de nascimento" required>
                        <div class="invalid-feedback">
                            <p style="color: white;">Favor preencher este campo
                                <p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom12">Escolaridade</label>
                        <select class="form-control" id="validationCustom12" name="escolaridade">
                            <option>Selecione</option>
                            <?php
                                $resultado_escolaridade = "SELECT * FROM nivelescolaridade";
                                $query = mysqli_query($conn, $resultado_escolaridade);
                                while($row_escolaridade = mysqli_fetch_array($query)){ ?>
                                    <option value="<?php echo  $row_escolaridade['idEscolaridade']; ?>" ><?php echo $row_escolaridade['escolaridade'];?>
                                </option><?php
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <p style="color: white;">Favor preencher este campo
                                <p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="validationCustom13">Tipo de Escola</label>
                        <select class="form-control" id="validationCustom13" name="tipoEscola">
                            <option>Selecione</option>
                            <?php
                                $resultado_escola = "SELECT * FROM tipoescola";
                                $query = mysqli_query($conn, $resultado_escola);
                                while($row_escola = mysqli_fetch_array($query)){ ?>
                                    <option value="<?php echo  $row_escola['idEscola']; ?>" ><?php echo $row_escola['escola'];?>
                                </option><?php
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            <p style="color: white;">Favor preencher este campo<p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validationCustom18">Email</label>
                        <input type="email" class="form-control" id="validationCustom18" name="email" placeholder="email@exemplo.com" required>
                        <div class="invalid-feedback">
                            <p style="color: white;">Digite um e-mail válido<p>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="validationCustom19">Senha</label>
                        <input type="password" class="form-control" id="validationCustom19" name="senha" placeholder="Senha" required minlength="6">
                        <div class="invalid-feedback">
                            <p style="color: white;">Digite pelo menos 6 digitos<p>
                        </div>
                    </div>
                </div>

                <hr>
                <button class="btn btn-primary btn-lg btn-block enviar" name="cadastrar" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    

    <div class="modalAviso">
        <div class="modalConteudo">
            <h1>Aviso</h1>
            <p>Olá!<b> Somos inicialmente, uma aplicação voltada para jovens que concluíram ou estão no ensino médio em escolas públicas da cidade do Rio de Janeiro</b>. Nosso objetivo é ajudar esse jovem a se qualificar para o mercado de trabalho, oferecendo cursos, vagas e informação de qualidade. Se você se encaixa nesse perfil, não deixe de se cadastrar  e aproveitar todos os nossos serviços gratuitamente!</p>
            <strong>Você concorda com os termos acima?</strong>

            <div class="botoesModal">
                <a href="../index.html">Voltar</a>
                <button class="fecharModal">Concordo</button>
            </div>

        </div>
    </div>

    <script>
        const fecharModal = document.querySelector('.fecharModal');
        const modal = document.querySelector('.modalAviso');

        fecharModal.addEventListener('click', () => {
            modal.classList.add('desativar');
        })
    </script>

    <!--ScriptJsBootstrap-->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
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