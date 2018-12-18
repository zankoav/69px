import './trust-us.scss';
import $ from 'jquery';
import {scrollTrigger} from "../../utils/_scrollTriger";

$(window).scroll(scrollTrigger($('.trust-us__title'), 'trust-us__title_show'));
$(window).scroll(scrollTrigger($('.trust-us__description'), 'trust-us__description_show'));
$(window).scroll(scrollTrigger($('.trust-us__partners'), 'trust-us__partners_show', 50, -150));