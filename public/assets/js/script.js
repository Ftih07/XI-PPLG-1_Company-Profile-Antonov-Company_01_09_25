// Navbar
var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0px";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

    window.addEventListener('scroll', function() {
        var nav = document.querySelector('nav');
        if (window.scrollY > window.innerHeight * 0.2) { // Cek jika scroll sudah lebih dari 100vh
            nav.classList.add('sticky'); // Tambah kelas sticky
        } else {
            nav.classList.remove('sticky'); // Hapus kelas sticky
        }
    });

    
//Video
    const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");

            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                navigation.classList.toggle("active");
            });

            const btns = document.querySelectorAll(".nav-btn");
            const slides = document.querySelectorAll(".video-slide");
            const contents = document.querySelectorAll(".content");

            var sliderNav = function(manual){
                btns.forEach((btn) => {
                    btn.classList.remove("active");
                });

                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });

                contents.forEach((content) => {
                    content.classList.remove("active");
                });

                btns[manual].classList.add("active");
                slides[manual].classList.add("active");
                contents[manual].classList.add("active");
            }

            btns.forEach((btn , i) => {
            btn.addEventListener("click", () => {
                sliderNav(i)
            });
        });

document.addEventListener("DOMContentLoaded", function () {
    sliderNav(0);
});


// Aviation Safety
ScrollReveal({
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 400
  });

  ScrollReveal().reveal('.main-title, .text-box, .hero-btn, .section-title', { delay: 500, origin: 'left' });
  ScrollReveal().reveal('.sec-01 .image, .info', { delay: 600, origin: 'bottom' });
  ScrollReveal().reveal('.text-box2', { delay: 500, origin: 'right' });
  ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'bottom', interval: 200 });
  ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', { delay: 500, origin: 'top' });
  ScrollReveal().reveal('.media-info li', { delay: 500, origin: 'left', interval: 200 });