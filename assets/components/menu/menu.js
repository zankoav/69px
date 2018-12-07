import './menu.scss';
import $ from 'jquery';

const MAX_COUNT = 5;

let countItems = $('.menu__item').length;
if (countItems > MAX_COUNT) {
    $('.menu__items').addClass('menu__items_large');
    $('.menu__inner').addClass('menu__inner_large');
}


$('.menu').on('click', function (event) {
    event.preventDefault();
    if ($(this).hasClass('menu_dark')) {
        $('.header__slide-menu').slideUp(600);
        $('.menu__content').fadeOut(300);
    } else {
        $('.header__slide-menu').slideDown(600, function () {
            $('.menu__content').css({display: 'flex'}).hide().fadeIn(600);
        });
    }
});
