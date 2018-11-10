   jQuery(function($) {
            function fixDiv() {
                var $cache = $('.nav');
                var $width = $('.nav').parent().width();
                if ($(window).scrollTop() > 100) {
                    $cache.css({
                        'position': 'fixed',
                        'top': ' 0px',
                        'width': $width
                    });
                } else {
                    $cache.css({
                        'position': 'relative',
                        'top': 'auto'
                    });
                }
            }
            $(window).scroll(fixDiv);
            fixDiv();
        });