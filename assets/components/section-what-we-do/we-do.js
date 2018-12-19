import './we-do.scss';
import $ from 'jquery';
import {scrollTrigger} from "../../utils/_scrollTriger";

$(window).scroll(scrollTrigger($('.we-do__header-title'), 'we-do__header-title_show', -100, -200));
$(window).scroll(scrollTrigger($('.we-do__text'), 'we-do__text_show', 1, -200));
$(window).scroll(scrollTrigger($('.we-do__services'), 'we-do__services_show', -50, -150));
$(window).scroll(scrollTrigger($('.we-do__wrapper'), 'we-do__wrapper_show', -150, -330));