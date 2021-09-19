let menuOpen = document.querySelector('#menuOpen');
let menuClose = document.querySelector('#menuClose');
let menu = document.querySelector('#menu');

menuOpen.addEventListener('click', () => {
  menu.style.right = '0px';
  menuClose.style.display = 'inherit';
  menuOpen.style.display = 'none';
});

menuClose.addEventListener('click', () => {
  menu.style.right = '-300px';
  menuOpen.style.display = 'inherit';
  menuClose.style.display = 'none';
});
