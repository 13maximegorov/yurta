let header = document.querySelector('.header');
let navbar = document.querySelector('.navbar-brand img');

if (parseInt(window.pageYOffset) > 50) {
    header.classList.add('header__active');
    navbar.src = "img/yurta-black-logo.png";
} 

window.onscroll = (e) => {
    if (parseInt(window.pageYOffset) > 150) { 
        header.classList.add('header__active');
        navbar.src = "img/yurta-black-logo.png";
    }
    if (parseInt(window.pageYOffset) < 50) {
        header.classList.remove('header__active');
        navbar.src = "img/yurta-logo.png";
    }
}

// Slick
$(document).ready(function() {
    $('.gallery').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
    });
    $('.tours').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});
          