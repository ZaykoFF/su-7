const imageList = document.querySelectorAll('.lightBox');
const lightBox = document.querySelector('#lightBox');
const currentImage = document.querySelector('#lightBox-image');
const lightBoxClose = document.querySelector('.lightBox-close');
imageList.forEach(el => {
    el.addEventListener('click', () => {
        lightBox.style.display = 'flex';
        currentImage.setAttribute('src', el.getAttribute('src')); 
    });
});
lightBoxClose.addEventListener('click',() => { lightBox.style.display = 'none';})
