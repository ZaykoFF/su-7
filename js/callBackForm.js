const formButtons = document.querySelectorAll('.openForm');
formButtons.forEach(el => {
    el.addEventListener('click', () => {
        document.querySelector('.callBackForm').style.display = 'flex';
        document.querySelector('.callBackForm-title').innerHTML = el.value;  
    });
});

const closeFormButton = document.querySelector('#callBackForm-close')
closeFormButton.addEventListener('click', () => {
    document.querySelector('.callBackForm').style.display = 'none';
    returnFormInputs();
});
