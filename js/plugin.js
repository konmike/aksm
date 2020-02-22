(function($) {

    $('.item-hover-59 .info').append('<span class="more-info-fake">Více</span>');
    $('.item-hover-75 .info').append('<span class="prepare-fake">Připravujeme</span>');
    $('.section--introduction').append('<a href="/wordpress-aksm/o-nas" class="link link--more-info">Více</a>');

    $(document).on('click', 'a[href^="#"].smooth-scroll', function (event) {
        event.preventDefault();
        let menu = $('#menu');

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - menu.height()
        }, 1000);
    });

    /*if($('main').hasClass("home_page")){
        $('div.contact').addClass("contact--light");
    }else{
        $('div.contact').addClass("contact--dark");
    }*/


    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if ( scrollTop > 100 ) {
            $('span.button-scroll-top').addClass('button-visible');
            $('span.button-scroll-top').removeClass('button-hide');
            $('span.button-scroll-top').css('display', 'inline-block');
        }else{
            $('span.button-scroll-top').removeClass('button-visible');
            $('span.button-scroll-top').addClass('button-hide');
            $('span.button-scroll-top').css('display', 'none');
        }
    });


    // $(window).scroll(function() {
    //     var top_of_projects = $("#news").offset().top;
    //     var top_of_contact = $("#contact").offset().top;
    //     var bottom_of_projects = $("#news").offset().top + $("#news").outerHeight();
    //     var bottom_of_contact = $("#contact").offset().top + $("#contact").outerHeight();
    //     var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    //     var top_of_screen = $(window).scrollTop();
    //
    //     if ((bottom_of_screen > top_of_projects) && (top_of_screen < bottom_of_projects)){
    //         $('#scroll-button').css('display', 'block');
    //         $('#down').css('display', 'inline-block');
    //     } else if((bottom_of_screen > top_of_contact) && (top_of_screen < bottom_of_contact)) {
    //         $('#scroll-button').css('display', 'block');
    //         $('#down').css('display', 'none');
    //     }else {
    //         $('#scroll-button').slideToggle('fast');
    //     }
    // });


})( jQuery );
