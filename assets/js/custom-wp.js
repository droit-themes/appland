(function($){
    "use strict";

    $('.videoWrapper .videoPoster:before').on('click', function() {
        $('.videoWrapper').css('z-index', '99')
    })

    $('.priceing-tab .tab-pane:first-child').addClass('active');
    $('.sidebar-widget.widget_twitter').addClass('tweets-widget').removeClass('widget_twitter, widget3');

    $('.ar_top').on('click', function () {
        var getID = $(this).next().attr('id');
        var result = document.getElementById(getID);
        var qty = result.value;
        $('td.actions button.button').removeAttr('disabled');
        if( !isNaN( qty ) ) {
            result.value++;
        }else{
            return false;
        }
    });

    $('.ar_down').on('click', function () {
        var getID = $(this).prev().attr('id');
        var result = document.getElementById(getID);
        var qty = result.value;
        $('td.actions button.button').removeAttr('disabled');
        if( !isNaN( qty ) && qty > 0 ) {
            result.value--;
        }else {
            return false;
        }
    });

})(jQuery);