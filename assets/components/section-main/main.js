import './main.scss';
import $ from 'jquery';

let mediaVideo = $(".main__video-sorce")[0];

$('.main__video-link').hover(
    function () {
        $(mediaVideo).css('z-index', '0');
        mediaVideo.play();
    },
    function () {
        $(mediaVideo).css('z-index', '-1');
        mediaVideo.pause();
        mediaVideo.currentTime = 0;
    }
);
