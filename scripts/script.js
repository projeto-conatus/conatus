const menu = document.querySelector("ul");
const botaoMenu = document.querySelector(".botaoMenu");

botaoMenu.addEventListener("click", () => {
  menu.classList.toggle("menuVisivel");
});

function anoAtual() {
  const anoSpan = document.querySelector('#dataAno');
  anoSpan.innerHTML = new Date().getFullYear();
}
anoAtual();


function botaoScrollAtivo() {
  const voltarAoTopo = document.querySelector('.voltarAoTopo');
  
  function scrollParaOTopo() {
    voltarAoTopo.addEventListener("click", (elemento) => {
      elemento.preventDefault();
      window.scrollTo(0, 0);
    });
    
    function altura() {
      const apresentacaoSection = document.querySelector('#apresentacao');
      const altura = apresentacaoSection.getBoundingClientRect().top
      const metadeAltura = window.innerHeight * .4;

      if ((altura - metadeAltura) < 0) {
        voltarAoTopo.classList.add('ativo');
      }

      else if (altura < 0) {
        voltarAoTopo.classList.add('inativo');
      }
      
      else {
        voltarAoTopo.classList.remove('ativo');
      }
        
    }
    window.addEventListener('scroll', altura)
  }

  scrollParaOTopo();
}

botaoScrollAtivo();