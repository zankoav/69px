import './get-tuch.scss';
import {scrollTrigger} from "../../utils/_scrollTriger";
import $ from "jquery";

$(window).scroll(scrollTrigger($('.get-tuch__title'), 'get-tuch__title_show'));
$(window).scroll(scrollTrigger($('.get-tuch__subtitle'), 'get-tuch__subtitle_show'));

