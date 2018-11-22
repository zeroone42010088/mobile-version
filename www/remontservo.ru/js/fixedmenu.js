
        var num = 50; //number of pixels before modifying styles

        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > num) {
                $('.nav').addClass('nav-fixed');
            } else {
                $('.nav').removeClass('nav-fixed');
            }
        });

    