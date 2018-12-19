import './team.scss';
import $ from "jquery";
import {scrollTrigger} from "../../utils/_scrollTriger";

$(window).scroll(scrollTrigger($('.team__title .title-2'), 'title-2_show'));
$(window).scroll(scrollTrigger($('.team__title .title-2__subtitle, .team__list'), 'title-2__subtitle_show team__list_show'));
