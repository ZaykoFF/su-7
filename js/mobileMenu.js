const burger = document.querySelector('#burger');
const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuClose = document.querySelector('#mobileMenuClose');
const menuItems = document.querySelectorAll('.menu-item');
const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children');

burger.addEventListener('click', () => {
    mobileMenu.style.display = 'flex';   
});
mobileMenuClose.addEventListener('click', () => {
    mobileMenu.style.display = 'none';   
});

menuItemsWithChildren.forEach(el => {
    el.firstChild.setAttribute('href', '#');
    el.addEventListener('click', () => {
        if(el.classList.contains('minus')) {
            el.classList.remove('minus');
            el.querySelector('ul').style.display = 'none';
        } else {
            el.classList.add('minus');
            el.querySelector('ul').style.display = 'block';
        }
    });
});
