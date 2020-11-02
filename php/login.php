<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Conatus</title>
        <style>
            form {
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <form action="./actions/validaLogin.php" method="POST">
            <label for="email"> E-mail:
                <input required type="text" name="email">
            </label>
            <label for="senha"> Senha:
                <input required type="password" name="senha">
            </label>
            <button type="submit" name="logar" style="width: 200px;">Entrar</button>
        </form>
    </body>
</html>