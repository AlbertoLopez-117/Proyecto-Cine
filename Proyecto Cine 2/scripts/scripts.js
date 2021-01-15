const objetivoIC = document.getElementById("objetivoIC");
const misionIC = document.getElementById("misIC");
const visionIC = document.getElementById("visIC");
const mascotaIC = document.getElementById("masIC");
const fundadorIC = document.getElementById("funIC");
const sucursalesIC = document.getElementById("sucursalesIC");
const historiaIC = document.getElementById("historiaIC");
const futuroIC = document.getElementById("futuroIC");

objetivoIC.addEventListener('click', () => {
    scroll(0, document.getElementById('objIC').getBoundingClientRect().top);
})

misionIC.addEventListener('click', () => {
    scroll(0, document.getElementById('misionIC').getBoundingClientRect().top);
})

visionIC.addEventListener('click', () => {
    scroll(0, document.getElementById('visionIC').getBoundingClientRect().top);
})

mascotaIC.addEventListener('click', () => {
    scroll(0, document.getElementById('mascotaIC').getBoundingClientRect().top);
})

fundadorIC.addEventListener('click', () => {
    scroll(0, document.getElementById('fundadorIC').getBoundingClientRect().top);
})

sucursalesIC.addEventListener('click', () => {
    scroll(0, document.getElementById('sucursalIC').getBoundingClientRect().top);
})

historiaIC.addEventListener('click', () => {
    scroll(0, document.getElementById('hisIC').getBoundingClientRect().top);
})

futuroIC.addEventListener('click', () => {
    scroll(0, document.getElementById('futIC').getBoundingClientRect().top);
})