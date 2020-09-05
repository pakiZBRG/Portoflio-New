const front = document.querySelector('.section-1__front');
const back = document.querySelector('.section-1__back');
const frontBtn = document.querySelector('#front');
const backBtn = document.querySelector('#back');

frontBtn.addEventListener('click', () => {
    back.style.display = 'none';
    front.style.display = 'grid';
    backBtn.classList.remove("selected");
    frontBtn.classList.add("selected");
})

backBtn.addEventListener('click', () => {
    back.style.display = 'grid';
    front.style.display = 'none';
    backBtn.classList.add("selected");
    frontBtn.classList.remove("selected");
})