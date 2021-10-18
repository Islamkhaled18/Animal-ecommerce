/*global $,AOS,alert*/
$(document).ready(function () {
    "use strict";

    /* ---------------------------------------------
     Loader Screen
    --------------------------------------------- */
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('#loading').fadeOut(1000);
    });

    $('[data-tool="tooltip"]').tooltip({
        trigger: 'hover',
        animate: true,
        delay: 50,
        container: 'body'
    });
    
    $(".show-pass").click(function () {
        $(this).find('i').toggleClass("la-eye-slash la-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        $(this).toggleClass('active');
    });

    /* ---------------------------------------------
     Scrool To Top Button Function
    --------------------------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-100px");
        }
    });

    $(".toTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    //customize the header
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.main-head').addClass('sticky');
        } else {
            $('.main-head').removeClass('sticky');
        }
    });
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.op-sidebar').css('top','30px');
        } else {
            $('.op-sidebar').css('top','210px');
        }
    });

    $('[data-fancybox]').fancybox();

    $(".hero-slider").owlCarousel({
        nav: false,
        loop: true,
        dots: true,
        autoplay: false,
        center: true,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        items: 1,
        navText: ["", ""],
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });

    $(".pr-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: false,
        items: 4,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            },
            1300: {
                items: 4
            }
        }
    });


    $(".blog-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: true,
        autoplay: false,
        items: 3.5,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1.5
            },
            600: {
                items: 2.5
            },
            1000: {
                items: 3.2
            },
            1300: {
                items: 3.5
            }
        }
    });

    $(".teso-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: false,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });

    $(".part-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: true,
        autoplay: false,
        items: 6,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            },
            1300: {
                items: 6
            }
        }
    });
    
    $(".g-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: false,
        items: 4,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            },
            1300: {
                items: 4
            }
        }
    });
    
    $(".products-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: false,
        items: 4,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        rtl: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            },
            1300: {
                items: 4
            }
        }
    });

    AOS.init({
        once: true
    });

    $('.op-menu').click(function () {
        $('.main-sticky').addClass('active');
        $('html').addClass('off');
    });

    $('.off-menu').click(function () {
        $('.main-sticky').removeClass('active');
        $('html').removeClass('off');
    });

    $('.add-fav').click(function () {
        $(this).toggleClass('active');
    });

    

    if ($('.nice-select').length) {
        $('.nice-select').niceSelect();
    }

    if ($('#rateYo').length) {
        //https://rateyo.fundoocode.ninja/
        $("#rateYo").rateYo({
            rtl: true,
            onChange: function (rating, rateYoInstance) {

                $(this).next().text(rating);
            }
        });
    }

    // Register Steps
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        var $target = $(e.target);
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
        var $active = $('.nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

        $("html,body").animate({
            scrollTop: 100
        }, 500);
        return false;

    });

    $(".prev-step").click(function () {
        var $active = $('.nav-tabs li.active');
        prevTab($active);
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    // for upload file
    $(document).on('change', ':file', function () {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    $(':file').on('fileselect', function (event, numFiles, label) {

        var input = $(this).parents('.f-upload').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) {
                // alert(log);
            }
        }
    });

    if ($("#slider-range").length) {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 5000,
            values: [0, 5000],
            slide: function (event, ui) {
                $("#amount").val(ui.values[0] + " ر.س  -  " + ui.values[1] + " ر.س ");
            }
        });
    }


    $('.video-wrap .op-video').click(function () {
        $('.video-wrap .op-video, .video-cover-img').addClass('off')
    });


    var changeSlide = 4; // mobile -1, desktop + 1
    // Resize and refresh page. slider-two slideBy bug remove
    var slide = changeSlide;
    if ($(window).width() < 600) {
        var slide = changeSlide;
        slide--;
    } else if ($(window).width() > 999) {
        var slide = changeSlide;
        slide++;
    } else {
        var slide = changeSlide;
    }
    $('.one').owlCarousel({
        nav: false,
        items: 1,
        autoplay: 5000
    })
    $('.two').owlCarousel({
        nav: false,
        margin: 10,
        mouseDrag: false,
        touchDrag: false,
        responsive: {
            0: {
                items: changeSlide - 1,
                slideBy: changeSlide - 1
            },
            600: {
                items: changeSlide,
                slideBy: changeSlide
            },
            1000: {
                items: changeSlide + 1,
                slideBy: changeSlide + 1
            }
        }
    })
    var owl = $('.one');
    owl.owlCarousel();
    owl.on('translated.owl.carousel', function (event) {
        $(".right").removeClass("nonr");
        $(".left").removeClass("nonl");
        if ($('.one .owl-next').is(".disabled")) {
            $(".slider .right").addClass("nonr");
        }
        if ($('.one .owl-prev').is(".disabled")) {
            $(".slider .left").addClass("nonl");
        }
        $('.slider-two .item').removeClass("active");
        var c = $(".slider .owl-item.active").index();
        $('.slider-two .item').eq(c).addClass("active");
        var d = Math.ceil((c + 1) / (slide)) - 1;
        $(".slider-two .owl-dots .owl-dot").eq(d).trigger('click');
    })
    $('.right').click(function () {
        $(".slider .owl-next").trigger('click');
    });
    $('.left').click(function () {
        $(".slider .owl-prev").trigger('click');
    });
    $('.slider-two .item').click(function () {
        var b = $(".item").index(this);
        $(".slider .owl-dots .owl-dot").eq(b).trigger('click');
        $(".slider-two .item").removeClass("active");
        $(this).addClass("active");
    });
    var owl2 = $('.two');
    owl2.owlCarousel();
    owl2.on('translated.owl.carousel', function (event) {
        $(".right-t").removeClass("nonr-t");
        $(".left-t").removeClass("nonl-t");
        if ($('.two .owl-next').is(".disabled")) {
            $(".slider-two .right-t").addClass("nonr-t");
        }
        if ($('.two .owl-prev').is(".disabled")) {
            $(".slider-two .left-t").addClass("nonl-t");
        }
    })
    $('.right-t').click(function () {
        $(".slider-two .owl-next").trigger('click');
    });
    $('.left-t').click(function () {
        $(".slider-two .owl-prev").trigger('click');
    });

    //cart plus & minus counter
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
//                alert('Number can not be minus');
            }
        }
        $button.parent().find("input").val(newVal);
    });
    
    $.widget.bridge('uibutton', $.ui.button);
    $.widget.bridge('uitooltip', $.ui.tooltip);
    
    

});
