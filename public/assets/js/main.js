(function ($) {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {
        const loader = document.getElementById('loader');
        const percent = document.getElementById('percent');
        const progress = document.querySelector('#bar .progress');
        const content = document.querySelector('.content');

        let loaded = 0;
        const interval = setInterval(() => {
            loaded += Math.random() * 2; // Random increment to simulate loading
            percent.textContent = `${Math.floor(loaded)}%`;
            progress.style.width = `${loaded}%`;
            if (loaded >= 100) {
                clearInterval(interval);
                loader.style.display = 'none'; // Hide loader after completion
                content.classList.add('loaded'); // Add class to trigger animations
            }
        }, 10); // Update every 100ms
    });
    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-150px');
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 1000,
        dots: true,
        loop: true,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });
    
    $(document).ready(function () {
        $("#team-carousel").owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            center: true,
            dots: true,
            pagination: true,
            navigation: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
        $("#serviceCarousel").owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            center: true,
            dots: true,
            pagination: true,
            navigation: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });

        $("#portfolioServices").owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots: true,
            center: true,
            pagination: true,
            navigation: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
        
        $("#comprehensiveService").owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        var elements = $('div.tithome div').length;

        for(var i=0;i < elements; i++){
            $(".tithome").clone().prependTo( ".scorri" );
        };

        var liEle = [];
        var liEle = $(".tithome div");
    });
})(jQuery);

