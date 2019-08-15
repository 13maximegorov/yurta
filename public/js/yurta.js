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

$(document).ready(function() {
    $("a").on("click", function(event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({ scrollTop: top }, 1500);
    });
});