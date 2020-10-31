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
        <form method="POST">
            <label for="email"> E-mail:
                <input type="text" id="email" name="email">
            </label>
            <label for="senha"> Senha:
                <input type="password" id="senha" name="senha">
            </label>
            <input type="submit" value="Enviar" style="width: 200px;">
        </form>
    </body>
</html>