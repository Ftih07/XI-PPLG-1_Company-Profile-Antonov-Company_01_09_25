//Video
const menuBtn = document.querySelector('.menu-btn');
const navigation = document.querySelector('.navigation');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navigation.classList.toggle('active');
});

const btns = document.querySelectorAll('.nav-btn');
const slides = document.querySelectorAll('.video-slide');
const contents = document.querySelectorAll('.content');

var sliderNav = function (manual) {
    btns.forEach((btn) => {
        btn.classList.remove('active');
    });

    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    contents.forEach((content) => {
        content.classList.remove('active');
    });

    btns[manual].classList.add('active');
    slides[manual].classList.add('active');
    contents[manual].classList.add('active');
};

btns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        sliderNav(i);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    sliderNav(0);
});


// Aviation Safety
ScrollReveal({
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 400,
});

ScrollReveal().reveal('.main-title, .text-box, .hero-btn, .section-title', {
    delay: 500,
    origin: 'left',
});
ScrollReveal().reveal('.sec-01 .image, .info', {
    delay: 600,
    origin: 'bottom',
});
ScrollReveal().reveal('.text-box2', { delay: 500, origin: 'right' });
ScrollReveal().reveal('.media-icons i', {
    delay: 500,
    origin: 'bottom',
    interval: 200,
});
ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', {
    delay: 500,
    origin: 'top',
});
ScrollReveal().reveal('.media-info li', {
    delay: 500,
    origin: 'left',
    interval: 200,
});

const newsModal = document.getElementById('newsModal');
newsModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const title = button.getAttribute('data-title');
    const content = button.getAttribute('data-content');
    const image = button.getAttribute('data-image');
    const author = button.getAttribute('data-author');

    const modalTitle = newsModal.querySelector('.modal-title');
    const modalBody = newsModal.querySelector('#modalContent');
    const modalImage = newsModal.querySelector('#modalImage');
    const modalAuthor = newsModal.querySelector('#modalAuthor');

    modalTitle.textContent = title;
    modalBody.innerHTML = content;

    if (image) {
        modalImage.src = `${BASE_URL}/storage/${image}`;
    } else {
        modalImage.src = 'https://via.placeholder.com/600x400';
    }

    modalAuthor.textContent = author;

    console.log('Author:', author);
});


//Nav Animations
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 200) {
        navbar.classList.add('px-[6%]', 'py-[1%]');
    } else {
        navbar.classList.remove('px-[6%]', 'py-[1%]');
    }
});
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('nav');
    if (window.scrollY > 200) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
});


// Chief Designers Modal
document.querySelectorAll('[data-modal-toggle]').forEach((item) => {
    item.addEventListener('click', (event) => {
        const target = event.target.getAttribute('data-modal-toggle');
        const modal = document.getElementById(target);
        modal.classList.remove('hidden');
    });
});

document.querySelectorAll('[data-modal-hide]').forEach((item) => {
    item.addEventListener('click', (event) => {
        const target = event.target.getAttribute('data-modal-hide');
        const modal = document.getElementById(target);
        modal.classList.add('hidden');
    });
});

document.querySelectorAll('.modal').forEach((modal) => {
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
});


// Top Airplane Modal
document.addEventListener('DOMContentLoaded', function () {
    const airplaneModal = document.getElementById('airplaneModal');
    airplaneModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const name = button.getAttribute('data-name');
        const description = button.getAttribute('data-description');
        const image = button.getAttribute('data-image');

        airplaneModal.querySelector('.modal-title').textContent = name;
        airplaneModal.querySelector('#modalDescription').textContent =
            description;
        airplaneModal.querySelector('#modalImage').setAttribute('src', image);
    });
});


// Video History Modal
function showModal(element) {
    var description = element.getAttribute('data-description');

    document.getElementById('modal-description').innerText = description;

    var modal = document.getElementById('modal');
    modal.style.display = 'flex';

    modal.addEventListener('click', function (event) {
        var modalContent = document.querySelector('.modal-content');
        if (!modalContent.contains(event.target)) {
            closeModal(); 
        }
    });
}

function closeModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';

    modal.removeEventListener('click', closeModal);
}


//Nav
var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0px";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}