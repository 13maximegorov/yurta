let header = document.querySelector('.header');

if (parseInt(window.pageYOffset) > 50) {
    header.classList.add('header__active');
} 

window.onscroll = (e) => {
    if (parseInt(window.pageYOffset) > 150) { 
        header.classList.add('header__active');
    }
    if (parseInt(window.pageYOffset) < 50) {
        header.classList.remove('header__active');
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
          