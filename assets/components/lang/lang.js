import './lang.scss';
import $ from 'jquery';
import './../../utils/_cookies';

$('[data-lang]').on('click', function (event) {

    event.preventDefault();

    if (!$(this).hasClass('lang__link_active')) {
        let lang = $(this).data('lang');
        setCookie('lang', lang);
        window.location.reload(true);
    }
});