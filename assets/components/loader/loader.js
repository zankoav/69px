import './loader.scss';
import $ from 'jquery';

$(window).ready(function () {

    $('.loader__squear-top').animate({
        top: 0, // ширина элемента
        left: 0, // прозрачность элемента
    }, 2000);

    $('.loader__squear-bottom').animate({
        bottom: 0, // ширина элемента
        left: 0, // прозрачность элемента
    }, 2000, function () {
        $('.loader').fadeOut(600, function () {
            $('.app').removeClass('app_hide');
        });
    });
});