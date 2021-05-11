require('./bootstrap');

const navList = document.getElementById('nav__list');
const hamburger = document.getElementById('hamburger');
function toggleMenu() {
    console.log(navList.classList);
    if ( navList.classList.length > 0 ) {
        navList.classList.remove('clicked');
    } else {
        navList.classList.add('clicked');
    }
}

hamburger.addEventListener('click', toggleMenu);
