// @codekit-prepend "transition.js", "carousel.js", "collapse.js", "dropdown.js", "modal.js", "affix.js", "tabs.js"

$(function() {
    //caches a jQuery object containing the header element
    var navbar = $(".navbar-default");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            navbar.addClass("navbar-fixed-top");
        } else {
            navbar.removeClass("navbar-fixed-top");
        }
    });
    
    $('#secondary > .widget-area').affix({
        offset: {
            top: $('#secondary > .widget-area').offset().top - 80,
            bottom: ($('#mapa').outerHeight(true) + $('#secondary').outerHeight(true)) + 100
        }
    });

    //$('.carousel').carousel();

    //$('#pozos').carousel({
    //    interval: 4000
    //});



    /*$('.news .item').each(function(){
        var next = $(this);
        var last;
        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            last=next.children(':first-child').clone().appendTo($(this));
        }
        last.addClass('rightest');
    });*/

    //$('.news .item').each(function() {
    //    var next = $(this).next();
    //    if (!next.length) {
    //        next = $(this).siblings(':first');
    //    }
    //    next.children(':first-child').clone().appendTo($(this));
    //
    //    if (next.length > 0) {
    //
    //        next.children(':first-child').clone().appendTo($(this)).addClass('rightest');
    //
    //    } else {
    //        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    //
    //    }
    //});

    //$('.pozos .item').each(function(){
    //    var next = $(this);
    //    var last;
    //    for (var i=0;i<3;i++) {
    //        next=next.next();
    //        if (!next.length) {
    //            next = $(this).siblings(':first');
    //        }
    //
    //        last=next.children(':first-child').clone().appendTo($(this));
    //    }
    //    last.addClass('rightest');
    //
    //});

    //$('.pozos .item').each(function() {
    //    var next = $(this).next();
    //    if (!next.length) {
    //        next = $(this).siblings(':first');
    //    }
    //    next.children(':first-child').clone().appendTo($(this));
    //
    //    if (next.next().length > 0) {
    //
    //        next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
    //
    //    } else {
    //        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    //
    //    }
    //});

});

(function(){
    // setup your carousels as you normally would using JS
    // or via data attributes according to the documentation
    // http://getbootstrap.com/javascript/#carousel
    $('#pozos').carousel({ interval: 4000 });
    $('#novedades').carousel({ interval: 2000 });
    $('#newssidebar').carousel({ interval: 3000 });
    //$('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
    $('.pozos .item').each(function(){
        var itemToClone = $(this);

        for (var i=1;i<4;i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-"+(i))
                .appendTo($(this));
        }
    });
    $('.news .item').each(function(){
        var itemToClone = $(this);

        for (var i=1;i<3;i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("newsitem-"+(i))
                .appendTo($(this));
        }
    });
}());