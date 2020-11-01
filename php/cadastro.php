<?php 
    include('../includes/head.html');
?>

<body>
    <div class="container">
        <form>
            <div class="col-md-6 offset-md-3">

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
                    <div class="form-group col-md-4">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf">
                    </div>
                    <div class="form-group col-md-2">
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
<?php 
    include('../includes/footer.html');
?>
</body>
</html>
