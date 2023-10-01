let btnMenu = document.querySelector('#fa-bars');
console.log(btnMenu)
btnMenu.addEventListener('click', () => document.querySelector('.nav-movie-left').classList.toggle('show'));
