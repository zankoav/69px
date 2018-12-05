import './header.scss';
import $ from 'jquery';

let $header = $('.header');
let isHeaderFixed = false;

headerShowing();

$(window).scroll(headerShowing);

function headerShowing() {
    let scrollY = $(window).scrollTop();

    if (scrollY > $(window).height() && !isHeaderFixed) {
        isHeaderFixed = true;
        headerDo();
    }

    if (scrollY < $(window).height() && isHeaderFixed) {
        isHeaderFixed = false;
        headerDo();
    }
}

function headerDo() {
    $header.fadeOut(function () {
        $header.toggleClass('header_fixed');
        $header.fadeIn(function () {
            $header.removeAttr('style');
        });
    });
}