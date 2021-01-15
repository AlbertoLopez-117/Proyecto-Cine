/*function scrollWin() {
    window.scrollTo(0, 980);
} */

const Promo = document.getElementById("Promo");

Promo.addEventListener('click', () => {
    scroll(0, document.getElementById('Promocion').getBoundingClientRect().top);
})