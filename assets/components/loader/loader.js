import './loader.scss';
import $ from 'jquery';
import scrollme from './../../utils/_jquery.scrollme';

$(window).ready(function () {

    $('.loader__squear-top').animate({
        top: 0, // ширина элемента
        left: 0, // прозрачность элемента
    }, 2000);

    $('.loader__squear-bottom').animate({
        bottom: 0, // ширина элемента
        left: 0, // прозрачность элемента
    }, 2000, function () {
        $('.main').removeClass('main_hide');
        $('.header').removeClass('header_hide');
        $('.loader').fadeOut(600, function () {
            $('.app').removeClass('app_hide');
            if($(window).width() > 767){
                scrollme().init();
            }
        });
    });
});