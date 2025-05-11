jQuery(function ($) {
    $('.teacher-owl-slider').owlCarousel({
        loop: true,
        margin: 24,
        nav: true,
        autoplay: true,
        items: 3,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            1025: {
                items: 3
            }
        }
    });
//     $(".section-list-teacher").on(
//         "click",
//         ".teacher-item",
//         function () {
//             var $nextElement = $(this).find('.teacher-content .popup-profile').clone();
//             console.log($nextElement);
//             $("#popup-profile-teacher").empty().append($nextElement);
//             // $("body").addClass("active");
//             $("#popup-profile-teacher .popup-profile")
//                 .show()
//                 .click(function (event) {
//                     if (event.target === event.currentTarget) {
//                         $(this).hide();
//                         // $("body").removeClass("active");
//                     }
//                 })
//                 .find(".close-popup")
//                 .click(function () {
//                     $(this).parent().parent().parent().hide();
//                     // $("body").removeClass("active");
//                 });
//         }
//     );
    $('.banner-slider-teacher').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        smartSpeed: 1000,
        autoplay: true,
        autoplaySpeed: 1000,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
	function showPopup($element) {
        $("#popup-profile-teacher").empty().append($element);
        $("#popup-profile-teacher .popup-profile")
            .show()
            .click(function (event) {
                if (event.target === event.currentTarget) {
                    $(this).hide();
                }
            })
            .find(".close-popup")
            .click(function () {
                $(this).parent().parent().parent().hide();
            });
    }
    $(".section-list-teacher").on("click", ".teacher-item", function () {
        var $nextElement = $(this).find('.teacher-content .popup-profile').clone();
        showPopup($nextElement);
    })
    $(".section-teacher").on("click", ".box-teacher", function () {
        var $profileClone = $(this).find('.box-content .popup-profile').clone();
        showPopup($profileClone);
    })
})