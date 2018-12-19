import $ from "jquery";

export function scrollTrigger($element, modificator, delta, mobileDelta) {

    return function(){
        if($element.length === 0){
            return;
        }
        
        let hT = $element.offset().top,
            hH = $element.outerHeight(),
            wH = $(window).height(),
            tDelta = delta ? delta : 100,
            tMobileDelta = mobileDelta ? mobileDelta : 0,
            wS = $(this).scrollTop();
            tDelta = $(window).width() < 768 ? tMobileDelta : tDelta;
        if (wS > (hT+hH-wH+tDelta) && !$element.hasClass(modificator)){
            $element.addClass(modificator);
        }else if(wS <= (hT+hH-wH+tDelta) && $element.hasClass(modificator)){
            $element.removeClass(modificator);
        }
    };
}