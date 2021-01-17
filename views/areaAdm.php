<?php
//CONEXAO
include_once "../config/conexaobd.php";
session_start();
include('../config/seguranca.php');
$seguranca = seguranca_adm();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/headerOutrasPaginas.css">
    <link rel="stylesheet" href="../css/estilologin.css" />
    <link rel="stylesheet" href="../css/listaArtigos.css" />


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
    <div class="container mt-5" >
        <div class="table-responsive">
            <h2>Área de Administração</h2>
            <h3 class="tituloArtigos">Artigos cadastrados no banco de dados</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr scope ="row">
                        <th scope="col">Título do Artigo</th>
                        <th scope="col">Subtítulo</th>
                        <th scope="col">Data de criação</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $sql = "SELECT * FROM artigo";
                $resultado = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_array($resultado)):
                ?>
                    <tr scope ="row">
                        <td><?php echo $dados['titulo']?></td>
                        <td><?php echo $dados['subtitulo']?></td>
                        <td><?php echo $dados['data']?></td>
                        <td><button class="btn btn-outline-warning"><a name="btn_editar" href="editaArtigo.php?id=<?php echo $dados['id'];?>">Editar</a></button></td>
                        <td>
                            <form action="../config/deletaArtigos.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                                <button type="submit" name="btn_deletar" class="btn btn-outline-danger">
                                    <a name="btn_deletar" >Apagar</a>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <br>
            <a href="cadastroArtigo.php" class="btn btn-primary" role="button">Cadastrar novos artigos</a>
        </div>
    </div>
</body>
</html>
