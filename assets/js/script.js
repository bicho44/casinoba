// @codekit-prepend "transition.js", "carousel.js", "collapse.js", "dropdown.js", "modal.js", "tab.js", "affix.js", "vendor/owl.carousel.min.js"


(function(){
    //caches a jQuery object containing the header element
    var navbar = $(".navbar-default");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= navbar.outerHeight(true)) {
            navbar.addClass("navbar-fixed-top");
        } else {
            navbar.removeClass("navbar-fixed-top");
        }
    });
}());



(function(){
    // http://getbootstrap.com/javascript/#carousel

    $('#newssidebar').carousel({ interval: 3000 });
}());

(function(){

    $("#SlideShow").owlCarousel({
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        items:1

    });


}());


(function(){

    $("#pozos").owlCarousel({
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        loop: true,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }

    });


}());

(function(){

    $("#novedades").owlCarousel({
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }

    });
    
    
}());



// Affix

(function(){

    if ($('#secondary > .widget-area').length ) {

        var h = $(".navbar-default").outerHeight(true);

        $('#secondary > .widget-area').affix({
            offset: {
                top: h,
                bottom: function () {
                    return (this.bottom = ($('#mapa').outerHeight(true)) + 200 );
                }
            }
        });

    }

}());