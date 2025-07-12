const lanchModal = document.querySelector('.menuBar');
const modalOverlay = document.querySelector('.menuBarRes');
lanchModal.addEventListener('click', () => {
    console.log("its click");

    modalOverlay.classList.add('menuActive');


});

const closeModal = document.querySelector('.closeMenu');
closeModal.addEventListener('click', () => {
    modalOverlay.classList.remove('menuActive');
});
