// Header Sticky


var headerPosition = $('#nav-sticky').offset().top;

$(window).scroll(function(){
    var scrollValue = $(window).scrollTop();
    if(scrollValue > headerPosition){
        $('#nav-sticky').addClass('sticky');
    }else{
        $('#nav-sticky').removeClass('sticky');
    }
});

// $(document).ready(function() {
//     $(document).scroll(function () {
//         var scroll = $(this).scrollTop();
//         var topDist = $("#nav-header").position();
//         if (scroll > topDist.top) {
//             $('#nav-header').css({"position":"fixed","top":"0"});
//         } else {
//             $('#nav-header').css({"position":"static","top":"auto"});
//         }
//     });
// });

// Bug screen when klick button to scroll


var topOffset ;

$(window).scroll(function(){
    if($(this).scrollTop() < 1){
        topOffset = 60 ;
    }
});



// Scroll on click
$('#nav a[href^="#"]').on('click',function(event){
    var target = $(this.getAttribute('href'));
    if( target.length ){
        event.preventDefault();
        $('html,body').animate({
            scrollTop:target.offset().top - topOffset
        },1000);
    }
});