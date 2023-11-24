/* HEADER SCROLL */

document.querySelector("img.logo-hor")

const logo = document.querySelector('.logo-hor')
window.addEventListener('scroll', onScroll)
function onScroll() {
    if (window.scrollY > 50) {
        logo.setAttribute('src', 'img/2 - logo.png')
    } else {
        logo.setAttribute('src', 'img/5 - logo-deitada.png')
    }
}

$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('header').addClass('black');
    }
    else {
        $('header').removeClass('black');
    }
})



/* BOTÃO MOBILE */
const btnMobile = document.getElementById('btn-mobile');

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);


/* BOTÃO SCROLL */
$('nav a').click(function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
    $('html, body').animate({
        scrollTop: targetOffset - 200
    }, 800);
});


/* SLIDESHOW */

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {
    slideIndex = 1;
  }
  
  if (n < 1) {
    slideIndex = slides.length;
  }
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex-1].style.display = "flex";  
  dots[slideIndex-1].className += " active";
}

/* SLIDESHOW TIMER */
let slideTimer;

function startSlideTimer() {
  slideTimer = setInterval(() => {
    plusSlides(1);
  }, 8000);
}

function stopSlideTimer() {
  clearInterval(slideTimer);
}

startSlideTimer();