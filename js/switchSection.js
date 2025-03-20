const chessSwitch1 = document.querySelector('#chessSwitch1');
const chessSwitch2 = document.querySelector('#chessSwitch2');

const section1 = document.querySelector('.section1');
const section2 = document.querySelector('.section2');

chessSwitch1.addEventListener('click', () => {
    section1.style.display = 'flex'; 
    section2.style.display = 'none'; 
    chessSwitch2.classList.add('chessSwitchOff');
    chessSwitch1.classList.remove('chessSwitchOff');
});

chessSwitch2.addEventListener('click', () => {
    section2.style.display = 'flex'; 
    section1.style.display = 'none'; 
    chessSwitch1.classList.add('chessSwitchOff');
    chessSwitch2.classList.remove('chessSwitchOff');
});
