<?php
//CONEXAO
include_once "./config/conexaobd.php";
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
            </nav>
        </div>
    </header>
    <div class="row">
        <div class="col-6">
            <h2>Artigos cadastrados no banco de dados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Título do Artigo</th>
                        <th>Subtítulo</th>
                        <th>Data de criação</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $sql = "SELECT * FROM artigo";
                $resultado = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                    <tr>
                        <td><?php echo $dados['titulo']?></td>
                        <td><?php echo $dados['subtitulo']?></td>
                        <td><?php echo $dados['data']?></td>
                        <td><button class="btn"><a name="btn_editar" href="editaArtigo.php?id=<?php echo $dados['id'];?>">Editar</a></button></td>
                        <td>
                            <form action="deletaArtigo.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                                <button type="submit" name="btn_deletar" class="btn">
                                    <a name="btn_deletar" >Apagar</a>
                                </button>
                            </form>
                            </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <br>
            <a href="areaAdm.html" class="btn" role="button">Voltar para Área do Administrador</a>
        </div>
    </div>
</body>
</html>


<?php
//Footer
include_once "includes/footer.php";
?>