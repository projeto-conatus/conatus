

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Conatus</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
   
  <form action="inserirdados.php" method="POST"> 
        <label for="nome"> Nome:
             <input type="text" id="nome" name="nome">
         </label>
         <label for="sobrenome"> sobrenome:
            <input type="text" id="sobrenome" name="sobrenome">
        </label>
        <label for="cpf"> CPF:
            <input type="text" id="cpf" name="cpf">
        </label>
        <label for="data_Nascimento"> Data de nascimento:
            <input type="text" id="data_Nascimento" name="data_Nascimento">
        </label>
        <label for="endereco"> Endereço:
            <input type="text" id="endereco" name="endereco">
        </label>
        <label for="numero"> Número:
            <input type="text" id="numero" name="numero">
        </label>
        <label for="complemento_Endereco"> Complemento:
            <input type="text" id="complemento_Endereco" name="complemento_Endereco">
        </label>
        <label for="bairro"> Bairro:
            <input type="text" id="bairro" name="bairro">
        </label>
        <label for="cidade"> Cidade:
            <input type="text" id="cidade" name="cidade">
        </label>
        <label for="uf"> UF:
            <input type="text" id="uf" name="uf">
        </label>
        <label for="cep"> CEP:
            <input type="text" id="cep" name="cep">
        </label>
        <label for="escolaridade"> Escolaridade:
            <input type="text" id="escolaridade" name="escolaridade">
        </label>
        <label for="tipo_De_Escola"> Tipo de Escola:
            <input type="text" id="tipo_De_Escola" name="tipo_De_Escola">
        </label>
        <label for="grupo_Etnico_Racial"> Grupo Étnico Racial:
            <input type="text" id="grupo_Etnico_Racial" name="grupo_Etnico_Racial">
        </label>
        <label for="genero"> Gênero:
            <input type="text" id="genero" name="genero">
        </label>
        <label for="portador_Deficiencia"> Portador de Deficiência?
            <input type="radio" value="sim"  name="portador_Deficiencia" > sim   
            <input type="radio" value="nao"  name="portador_Deficiencia" > não
        </label>
        <label for="tipo_Deficiencia"> Tipo de Deficiência:
            <input type="text" id="tipo_Deficiencia" name="tipo_Deficiencia">
        </label>
        <label for="email"> E-mail:
            <input type="text" id="email" name="email">
        </label>
        <label for="senha"> Senha:
            <input type="text" id="senha" name="senha">
        </label>
        <input name="submit" type="submit" value="Enviar" style="width: 200px;">
  </form>

</body>
</html>
