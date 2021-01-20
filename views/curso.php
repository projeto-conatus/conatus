<?php
session_start();
include('../config/seguranca.php');
$seguranca = seguranca_usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feed | Conatus</title>
  <link rel="stylesheet" href="../css/curso.css">
  <link rel="stylesheet" href="../css/feedHeader.css">
  <link rel="shortcut icon" href="../images/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="../css/global.css">
  <script src="https://kit.fontawesome.com/110e73ee38.js" crossorigin="anonymous"></script>
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
        <img src="../images/logo.svg" alt="Logo da Conatus" title="Logo da Conatus">
      </div>

      <nav class="navBar" style="top: 75px">
        <button class="botaoMenuFeed" title="Menu">Menu</button>

        <div class="linksMenu">
          <h4 class='saudacao-usuario'> <?php echo "Olá, " . $_SESSION['nome'] . "!"; ?></h4>
          <a href="#"><i class="far fa-bell"></i></a>
          <a class="botaoPerfil" href="#">Perfil</a>
          <a href="./feedInicio.php">Inicio</a>
          <a href="./feedCursos.php">Cursos</a>
          <a href="#">Vagas</a>
          <button class="botaoSair">Sair</button>
        </div>
      </nav>
    </div>

  </header>

  <h3 class="titulo">Informática</h3>

  <main>
    <article class="curso">
      <img src="../images/cursos/capa-curso.png" alt="Capa" title="Capa">
      <ol>
        <li> Introdução</li>
          <div class="blocoTexto">
            <p>
              Há alguns anos, a tecnologia tem feito parte de nossas vidas. E a experiência vivida na pandemia do Covid-19, que ocasionou o aumento de vagas home office(empregado trabalha de sua própia casa), nos mostra o quanto é necessário hoje saber usar e entender mais sobre computadores. A ideia desta trilha é te introduzir no assunto, apresentando alguns conceitos básicos e fundamentais sobre computação.
            </p>
            <p>
              Hoje em dia, podemos encontrar computadores em diversas formas - que vão desde um relógio de pulso a um computador de bordo de um avião. Sendo assim, vale frisar que aqui iremos nos ater a abordar assuntos sobre computadores de mesa (como desktops torre) e aos computadores portáteis (notebooks).
            </p>
          </div>
        <li>Conceitos básicos</li>
          <div class="blocoTexto">
            <p>
              Podemos dizer que um computador é composto por:
              parte física (hardware) + parte lógica (software)
              Hardware são todos os elementos físicos que compõem o computador, o equipamento propriamente dito. Já o Software são programas(conjuntos de instruções) necessários para que o computador consiga realizar tarefas, auxiliando e agilizando o trabalho do usuário.
            </p>
            <p>
              Falando da parte física, o computador é constituído por algumas partes internas. Se formos comparar ao corpo humano, podemos dizer que: seu corpo é o gabinete (toda aquela estrutura metálica que comporta as outras partes e onde ligamos/desligamos) e seus componentes internos são seus órgãos. Dentre eles, podemos encontrar diversas tecnologias muito interessantes que são essenciais para um bom funcionamento. Basicamente, dentro do “corpo” de um computador encontramos: uma unidade de processamento, memórias de vídeo, memória RAM e memória de Armazenamento físico(Disco rígido). Todas essas peças são unidas por um componente chamado Placa Mãe. Esta placa, por sua vez, é alimentada pela energia vinda de uma Fonte.
            </p>
            <p>
              O gabinete possui entradas e saídas que nos permitem conectar periféricos que podem expandir suas funções primárias. Por exemplo, ao conectar um mouse e/ou teclado você estará apto para dar comandos a este computador. Essas peças são chamadas de periféricos de entrada por permitirem a entrada de dados a este computador. Temos também os periféricos de saída, que trazem informações de dentro do computador para fora dele, como impressoras e monitores.
              Um notebook, por exemplo, possui os mesmos periféricos de entrada, só que com um detalhe: eles são integrados ao conjunto do hardware como um só. Isso traz a ideia de portabilidade, tornando mais fácil você poder levar seu computador para qualquer lugar. Porém, dificulta um pouco a troca de seus componentes periféricos.
            </p>
          </div>
        <li>Segmento</li>
          <div class="blocoTexto">
            <p>
              Um computador em pleno funcionamento pode ser usado de diversas formas. Para que ele consiga realizar as suas tarefas precisamos de Softwares. É como se eles dessem vida à máquina, uma vez que, os programas que compõem o software da máquina são instruções eletrônicas que informam ao computador como realizar determinadas tarefas.
              Um software essencial para o funcionamento de um computador é o Sistema Operacional (S.O.).Ele, basicamente será o programa que vai usar nosso computador para diversos fins, dentre eles:
              Usar memória de acesso randômico (RAM) para armazenar conteúdos que serão processados pelo nosso CPU(unidade de processamento central) e gravados em nossa memória de armazenamento, além de exibidos em nossos monitores usando nossas memórias de vídeo.
            </p>
            <p>
              Pensando em computadores de mesa desktop e notebooks, os sistemas operacionais mais usados são o Microsoft Windows, Apple MacOS e as distribuições Linux. Os primeiros citados, são softwares proprietários, ou seja, oficialmente, você pode usá-los em seu computador mediante pagamento de licença ou aquisição de algum hardware da empresa proprietária. Já as distribuições Linux, você pode encontrar sistemas operacionais que necessitam oficialmente de pagamento de uma licença de uso. Mas em suma, as distribuições Linux são livres. Grande parte delas podem ser usadas em total liberdade sem a necessidade de pagamento de licenças.
            </p>
          </div>
        <li>Conclusão</li>
          <div class="blocoTexto">
            <p>
              Até agora podemos perceber que o conjunto de hardware e softwares que podemos ter é bem grande. Dependendo de qual você prefere usar pessoalmente ou de qual a empresa que você pretende trabalhar usa, é de suma importância se atentar a suíte de aplicações mais usadas para o mercado de trabalho que você deseja atuar. Uma suíte de aplicações pode ser imaginada como quarto de hotéis. Dependendo do tipo que escolher, dentro dele você encontra determinadas coisas.
              Se você é solteiro, não faz sentido alugar um quarto para uma família. Assim como, se tens uma família grande, não faz sentido se hospedar em um quarto para solteiros dada a falta sou sobra de alguns moveis e/ou cômodos que podem ser necessários ou não. Uma suíte de aplicações é justamente o conjunto de softwares agregados a um determinado sistema pode te oferecer.
            </p>
            <p>
              Digamos que você pretende arrumar um emprego em um escritório, é essencial que domine o conhecimento básico de aplicações de textos, planilhas e apresentações. É muito difundida hoje em dia a suíte de aplicações para escritório da Microsoft chamada de Office. Mas, dentre as suítes de aplicações para escritórios podemos encontrar o iWork para macOs e a suíte gratuita LibreOffice para diversos sistemas operacionais. Resumindo, dependendo do que busca em sua trabalho é indiscutível o diferencial que a sabedoria em informática pode trazer a sua carreira.
            </p>
          </div>
      </ol>
    </article>
  </main>

  <script src="../scripts/scriptsFeed.js"></script>
</body>

</html>