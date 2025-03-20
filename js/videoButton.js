const videoButton = document.querySelector('.videoButton');
const videoBox = document.querySelector('.videoContainer');

videoButton.addEventListener('click',() => { videoBox.style.display = 'flex';})
videoBox.addEventListener('click',() => { videoBox.style.display = 'none';})
