// SLIDER
let current = 0;
const slides = document.querySelectorAll('.scroll-slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));

    slides[index].classList.add('active');
    dots[index].classList.add('active');

    current = index;
}

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        showSlide(parseInt(dot.dataset.slide));
    });
});

setInterval(() => {
    let next = (current + 1) % slides.length;
    showSlide(next);
}, 20000);


// ABOUT MODALS
const boxes = document.querySelectorAll('.feature-box');
const modals = document.querySelectorAll('.feature-modal');
const closes = document.querySelectorAll('.close');

boxes.forEach(box => {
    box.addEventListener('click', () => {
        const id = box.dataset.info;
        document.getElementById(`info-${id}`).classList.add('active');
    });
});

closes.forEach(close => {
    close.addEventListener('click', () => {
        close.parentElement.parentElement.classList.remove('active');
    });
});