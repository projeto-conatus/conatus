const botaoMenuFeed = document.querySelector('.botaoMenuFeed');
const menuFeed = document.querySelector('.linksMenu');

botaoMenuFeed.addEventListener('click', () => {
  menuFeed.classList.toggle('ativo');
})