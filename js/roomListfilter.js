const sortRoomsButtons = document.querySelectorAll('.sortRoomsButton');
const filterListContainer = document.querySelector('.filterList-bottom');
const filterListItems = document.querySelectorAll('.filterList-item');
const filterSortingPrice = document.querySelector('.filterSorting-rules');
const sortingRuleTop = document.querySelector('.sortingRuleTop');
const sortingRuleBottom = document.querySelector('.sortingRuleBottom');
const trinagle = document.querySelector('.trinagle');
const filter = document.querySelector('.filter');
const floorArea = document.querySelector('.floor');
const closeFilter = document.querySelector('#closeFilter');

const getActiveCount = () => {
    let count = 0;  
    filterListItems.forEach(el => {
        if (el.getAttribute('active') == 'true') count++;
    });
    document.querySelector('.filterRoomCount').innerHTML = count;
}

const setFilter = (roomCount) => {
    console.log(roomCount);
    filterListItems.forEach(el => {
        if (el.getAttribute('roomCount') == roomCount) {
            el.style.display = 'flex';
            el.setAttribute('active', 'true')
        } else {
            el.style.display = 'none';
            el.setAttribute('active', 'false')
        }
    });
    getActiveCount();
};

const priceReverse = (price) => {
    if (price == 'up') {
        filterSortingPrice.setAttribute('price', 'down');
        sortByPrice('up');
        sortingRuleTop.style.display = 'none';
        sortingRuleBottom.style.display = 'block';
        trinagle.style.transform = 'rotate(180deg)';
        console.log('rorate trinagle to 180');
    } 
    if (price == 'down') {
        filterSortingPrice.setAttribute('price', 'up');
        sortByPrice('down');
        sortingRuleBottom.style.display = 'none';
        sortingRuleTop.style.display = 'block';
        trinagle.style.transform = 'rotate(0deg)';
        console.log('rorate trinagle to 0');
    }
}

const sortByPrice = (direction) => {
    const listElements = [...filterListContainer.children];
    let sortedList = listElements.sort((a, b) => (+a.id) - (+b.id));
    if (direction == 'up') {
        sortedList.reverse();
    }
    filterListContainer.innerHTML = ''; 
    sortedList.forEach(el => filterListContainer.appendChild(el));
}

filterSortingPrice.addEventListener('click', () => {
    priceReverse(filterSortingPrice.getAttribute('price'));
});

sortRoomsButtons.forEach(el => {
    el.addEventListener('click', () => {
        setFilter(el.getAttribute('roomcount')); 
        filter.style.display = 'flex';
        floorArea.style.display = 'none';
    });
})
closeFilter.addEventListener('click', () => {
        filter.style.display = 'none';
        floorArea.style.display = 'flex';
});
