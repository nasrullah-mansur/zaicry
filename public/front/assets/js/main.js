(function ($) {
    "use strict";

    jQuery(window).load(function () {
        jQuery('.preloader').fadeOut('slow');
    });

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 150) {
            jQuery("#scrollUp").fadeIn(500);
        }
        else {
            jQuery("#scrollUp").fadeOut(500);
        }
    });

    jQuery(document).ready(function () {
        /*-------------------------------------------
        js wow
        --------------------------------------------- */
        new WOW().init();

        /*-------------------------------------------
        js scrollup
        --------------------------------------------- */
        jQuery("#scrollUp").on('click', function () {
            jQuery('html, body').animate({ 'scrollTop': '0' }, 2000,);
            return false;
        });

        /*---------------------------------
        Menu Stick
        -----------------------------------*/
        var header = jQuery('.sticky-bar');
        var win = jQuery(window);
        win.on('scroll', function () {
            var scroll = win.scrollTop();
            if (scroll < 200) {
                header.removeClass('stick');
            } else {
                header.addClass('stick');
            }
        });

        /*---------------------------------
        magnificPopup active
        -----------------------------------*/
        $('.popup-video').venobox();

        /*---------------------------------
        case-studies-list active
        -----------------------------------*/
        jQuery('.case-studies-list.owl-carousel').owlCarousel({
            center: true,
            items: 4,
            loop: true,
            margin: 15,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                1500: {
                    items: 4
                },
                1199: {
                    items: 3
                },
                767: {
                    items: 2
                },
                480: {
                    items: 1
                },
                320: {
                    items: 1
                }
            }
        });
        /*---------------------------------
        .case-studies-one active
        -----------------------------------*/
        jQuery('.case-studies-one.owl-carousel').owlCarousel({
            center: true,
            items: 4,
            loop: true,
            margin: 15,
            nav: true,
            navText: ['<i class="arrow fas fa-arrow-left"></i>', '<i class="arrow fas fa-arrow-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                1500: {
                    items: 4
                },
                1199: {
                    items: 3
                },
                767: {
                    items: 2
                },
                480: {
                    items: 1
                },
                320: {
                    items: 1
                }
            }
        });

        /*---------------------------------
        testimonial-slide active
        -----------------------------------*/
        jQuery('.testimonial-slide.owl-carousel').owlCarousel({
            center: true,
            items: 1,
            loop: true,
            margin: 15,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
        });

        /*---------------------------------
        slide-post-thumbnail active
        -----------------------------------*/
        jQuery('.slide-post-thumbnail.owl-carousel').owlCarousel({
            center: true,
            items: 1,
            loop: true,
            margin: 15,
            nav: true,
            navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
            dots: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
        });

        /*---------------------------------
        mixitup active
        -----------------------------------*/
        var mixer = mixitup('.portfolio-lsit');

        /*---------------------------------
        countdown-timer active
        -----------------------------------*/
        jQuery('#countdown-timer').syotimer({
            year: 2020,
            month: 11,
            day: 19,
            hour: 20,
            minute: 30
        });

        /*---------------------------------
        counterUp active
        -----------------------------------*/
        jQuery('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        /*---------------------------------
        niceSelect active
        -----------------------------------*/
        jQuery('select').niceSelect();
        /*---------------------------------
        mobile menu active
        -----------------------------------*/
        jQuery('.nav-item.dropdown .nav-link').on('click', function () {
            jQuery(this).parent('.nav-item.dropdown ').children('.dropdown-menu').slideToggle();
        });
        jQuery('.nav-item.dropdown li ').on('click', function () {
            jQuery(this).children('.nav-item.dropdown li ul').slideToggle();
        });

    });





})(jQuery);

//menu
let submenu = document.querySelectorAll('.custom-submenu');
submenu.forEach(menu => {
    if (menu != null) {
        if (menu.innerHTML.trim() == "") {
            menu.style.display = 'none'
        }
    }
});

document.body.addEventListener('click', function () {

    submenu.forEach(menu => {
        if (menu != null) {
            if (menu.innerHTML.trim() == "") {
                menu.style.display = 'none'
            }
        }
    });
});

