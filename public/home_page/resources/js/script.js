$(document).ready(function(){
    // ::::::progress bar animation ::::
    // ::::::: after comming in the progress bar ::::::

    $(window).scroll(function () {
        if ( $(this).scrollTop() > 1500 ) {
            console.log('screen: ',$(this).scrollTop());
            $(function() {
                $('.progress-bar').each(function() {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var animate = $(this).data('animate');

                    if ( elementPos < topOfWindow + $(window).height() - 30 && !animate ) {
                        $(this).data('animate', true);
                        var bar_value = $(this).attr('aria-valuenow') + '%';                
                        $(this).animate({ width: bar_value }, { duration: 2000, easing: 'easeOutCirc' });
                        condition = false;
                    }
                });
            });
        }

        if ( $(this).scrollTop() > 4100 ) {
            $('.ts-count').each(function () {

                var elementPos2 = $(this).offset().top;
                var topOfWindow2 = $(window).scrollTop();
                var animate2 = $(this).data('animate');

                if ( elementPos2 < topOfWindow2 + $(window).height() - 30 && !animate2 ) {
                    $(this).data('animate', true);

                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                }

                
            });
        }
    });

});