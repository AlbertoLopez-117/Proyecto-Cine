/*function scrollWin() {
    window.scrollTo(0, 980);
} */



/*const nav = document.querySelector('.menu');
nav.addEventListener('click', () => {
    window.scrollTo(0, 980);
    console.log('Clic en el nav')
})*/

const Promo = document.getElementById("Promo");

Promo.addEventListener('click', () => {
    scroll(0, document.getElementById('Promocion').getBoundingClientRect().top);
})