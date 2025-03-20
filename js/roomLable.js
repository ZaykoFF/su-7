const lableSection = document.querySelector('#lable-section');
const lableRoom = document.querySelector('#lable-room');
const lablePrice = document.querySelector('#lable-price');
const lableStatus = document.querySelector('#lable-status');
const floorRooms = document.querySelectorAll('.roomSelectPlan-item');
const floorRoomsUnactive = document.querySelectorAll('.roomSelectPlan-unactive');

floorRooms.forEach(el => {
    el.addEventListener('mouseenter', () => {
        lableRoom.innerHTML = el.getAttribute('roomscount'); 
        lablePrice.innerHTML = el.getAttribute('priceFormat'); 
        lableStatus.innerHTML = el.getAttribute('status'); 
        let section = 1;
        if (el.getAttribute('house') == 'borovaya' && el.getAttribute('roomnumber') > 64 || el.getAttribute('house') == 'kristall' && el.getAttribute('roomnumber') > 40) section = 2;
        lableSection.innerHTML = section;
    })
});

floorRoomsUnactive.forEach(el => {
    el.addEventListener('mouseenter', () => {
        lableRoom.innerHTML = '-'; 
        lablePrice.innerHTML = '-'; 
        lableStatus.innerHTML = el.getAttribute('status'); 
        let section = 1;
        if (el.getAttribute('house') == 'borovaya' && el.getAttribute('roomnumber') > 64 || el.getAttribute('house') == 'kristall' && el.getAttribute('roomnumber') > 40) section = 2;
        lableSection.innterHTML = section;
    })
});
