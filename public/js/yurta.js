let header = document.querySelector('.header');
let navbar = document.querySelector('.navbar-brand img');
var over = document.querySelector('.over');

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

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });

    // when the modal is opened autoplay it  
    $('#videoModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })



    // stop playing the youtube video when I close the modal
    $('#videoModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })
});

// Over
$(document).on('click', 'span.over__close', function() {
    $('body').removeClass('over__hidden');
    $('.over__title').text('');
    $('.over__content').html('');
    $('.over').addClass('over__hide').removeClass('over__active');
});

// Over offer card
$(document).on('click', 'div.e-offer', function() {
    $('body').addClass('over__hidden');
    $('.over').addClass('over__active');
    var id = parseInt(this.getAttribute('data-id'));
    $('.over__title').text(this.getAttribute('data-title'));
    $('.over__image img').attr('src', '/img/gallery/' + this.getAttribute('data-img'));
    $.get('/card/info', { id: id }, function(res) {
        $('.over__content').html(res.text);
    });
});