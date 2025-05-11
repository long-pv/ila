jQuery(function ($) {
    // var timelineSwiper = new Swiper('.timeline .swiper-container', {
    //     direction: 'vertical',
    //     loop: false,
    //     speed: 1600,
    //     pagination: '.swiper-pagination',
    //     paginationBulletRender: function (swiper, index, className) {
    //         var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
    //         return '<span class="' + className + '">' + year + '</span>';
    //     },
    //     paginationClickable: true,
    //     nextButton: '.swiper-button-next',
    //     prevButton: '.swiper-button-prev',
    //     breakpoints: {
    //         768: {
    //             direction: 'horizontal',
    //         }
    //     }
    // });
    $('.section-2 .button-show-more').click(function () {
        $('.container-timeline').addClass('animate-right');
    });
    $('.container-timeline .button-close').click(function () {
        $('.container-timeline').removeClass('animate-right');
    })
    // var popup = $("#popup-thanks");
    // var back2Home = $("#popup-thanks .popup-content .back-home");
    // $(".form-content .form-register .button-wrapper .btn-register").click(
    //     function () {
    //         popup.show();
    //     }
    // );
    // back2Home.click(function () {
    //     popup.hide();
    // });
    // popup.click(function (event) {
    //     if (event.target === event.currentTarget) {
    //         $(this).hide();
    //     }
    // });
    window.onscroll = function () { myFunction() };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };
    // Cache the jQuery objects for improved performance
    var $showMoreLink = $('.section-2 .banner-content-main .show-more');
    var $hideMoreLink = $('.section-2 .banner-content-main .hide-more');
    var $content = $('.section-2 .banner-content-main .content-show-more');

    // Add a click event listener to the "Show More" link
    $showMoreLink.click(function () {
        // Slide down the content and show the "Hide More" link
        $content.slideDown(500);
        $('.section-2 .banner-content-main .hide-more').show();

        // Hide the "Show More" link
        $(this).hide();
    });

    // Add a click event listener to the "Hide More" link
    $hideMoreLink.click(function () {
        // Slide up the content and show the "Show More" link
        $content.slideUp(500);
        $('.section-2 .banner-content-main .show-more').show();

        // Hide the "Hide More" link
        $(this).hide();
    });
});
