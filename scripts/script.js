const menu = document.querySelector("ul");
const botaoMenu = document.querySelector(".botaoMenu");

botaoMenu.addEventListener("click", () => {
  menu.classList.toggle("menuVisivel");
});
