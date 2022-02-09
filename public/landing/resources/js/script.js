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
    });

});


// $( document ).ready(function() {
//     setInterval(function(){
//       $('.navbar').css("opacity", 1);
//       $('.navbar').css("opacity", opacity);
//       console.log(opacity);
//     }, 1000);
// });

$( ".navbar" ).css( "opacity", ".9" );

$(document).ready(function() {

  setTimeout(function() {
    $(".navbar").css("opacity", "0");
  }, 5000);

  $(".navbar").hover(function(){
      $(this).css("opacity", ".9").css("transition","1");
    });

  $( ".navbar" )
    .mouseleave(function() {
      $(this).css("opacity", "0").css("transition","1.5");
    });

});

