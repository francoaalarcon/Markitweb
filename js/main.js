(function ($) {
    "use strict";

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
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
            $('.whatsappfloatmessage').addClass('whatsappmessageactive');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
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
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);

$("#buttonclosevideo").click(function(){
    $(".videointerface").css("display","none");
});

$("#buttonopenvideo").click(function(){
    $(".videointerface").css("display","block");
});

$("#sbitopen1").click(function(){
    $("#sbit1").css("display","block");
});
$("#sbitclose1").click(function(){
    $("#sbit1").css("display","none");
});
$("#sbitopen2").click(function(){
    $("#sbit2").css("display","block");
});
$("#sbitclose2").click(function(){
    $("#sbit2").css("display","none");
});
$("#sbitopen3").click(function(){
    $("#sbit3").css("display","block");
});
$("#sbitclose3").click(function(){
    $("#sbit3").css("display","none");
});
$("#sbitopen4").click(function(){
    $("#sbit4").css("display","block");
});
$("#sbitclose4").click(function(){
    $("#sbit4").css("display","none");
});
$("#sbitopen5").click(function(){
    $("#sbit5").css("display","block");
});
$("#sbitclose5").click(function(){
    $("#sbit5").css("display","none");
});
$("#sbitopen6").click(function(){
    $("#sbit6").css("display","block");
});
$("#sbitclose6").click(function(){
    $("#sbit6").css("display","none");
});

document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        autowidth: true,
        gap: '0',
        type: 'loop',
        perPage: 1,
        arrows: false,
        pagination: false,
        autoplay: true,
        interval: 2000
    } );
    splide.mount();
} );