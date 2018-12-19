import './get-tuch.scss';
import $ from "jquery";
import {scrollTrigger} from "../../utils/_scrollTriger";

$(window).scroll(scrollTrigger($('.get-tuch__contacts'), 'get-tuch__contacts_show', -150));
$(window).scroll(scrollTrigger($('.get-tuch .title-2'), 'title-2_show'));
$(window).scroll(scrollTrigger($('.get-tuch .title-2__subtitle'), 'title-2__subtitle_show'));