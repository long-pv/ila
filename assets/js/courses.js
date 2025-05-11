jQuery(function ($) {
    $('a[href="#"]').click(function (e) {
        e.preventDefault();
    });
    // 	$("img:not(.custom-img)").prop("src", function () {
    //     return this.src.replace(
    //         "http://ila.local",
    //         "https://ila2023.staging.vn"
    //     );
    // });
    // $("img:not(.custom-img)").prop("srcset", function () {
    //     return this.src.replace(
    //         "http://ila.local",
    //         "https://ila2023.staging.vn"
    //     );
    // });
    if ($(".popup-youtube").length) {
        $(".popup-youtube").magnificPopup({
            type: "iframe",
        });
    }
    var width = $(window).width();
    // /*-------Owl-thumbnail------- */
    // if ($(".section-gallery-video").length) {
    //     var sync1 = $("#sync1");
    //     var sync2 = $("#sync2");
    //     var slidesPerPage = 4; //globaly define number of elements per page
    //     var syncedSecondary = true;

    //     sync1
    //         .owlCarousel({
    //             items: 1,
    //             slideSpeed: 2000,
    //             nav: true,
    //             autoplay: false,
    //             dots: false,
    //             loop: true,
    //             responsiveRefreshRate: 200,
    //             navText: [
    //                 '<i class="fa-light fa-circle-arrow-left"></i>',
    //                 '<i class="fa-light fa-circle-arrow-right"></i>',
    //             ],
    //         })
    //         .on("changed.owl.carousel", syncPosition);

    //     sync2
    //         .on("initialized.owl.carousel", function () {
    //             sync2.find(".owl-item").eq(0).addClass("current");
    //         })
    //         .owlCarousel({
    //             items: slidesPerPage,
    //             dots: false,
    //             nav: true,
    //             stagePadding: 50,
    //             margin: 24,
    //             slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    //             responsiveRefreshRate: 100,
    //             responsiveClass: true,
    //             navText: [
    //                 '<i class="fa-light fa-circle-arrow-left"></i>',
    //                 '<i class="fa-light fa-circle-arrow-right"></i>',
    //             ],
    //             responsive: {
    //                 0: {
    //                     items: 3,
    //                     stagePadding: 0,
    //                     margin: 12,
    //                 },
    //                 767: {
    //                     items: 4,
    //                     stagePadding: 50,
    //                     margin: 24,
    //                 },
    //                 1280: {
    //                     items: 4,
    //                 },
    //             },
    //         })
    //         .on("changed.owl.carousel", syncPosition2);

    //     function syncPosition(el) {
    //         //if you set loop to false, you have to restore this next line
    //         //var current = el.item.index;

    //         //if you disable loop you have to comment this block
    //         var count = el.item.count - 1;
    //         var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    //         if (current < 0) {
    //             current = count;
    //         }
    //         if (current > count) {
    //             current = 0;
    //         }

    //         //end block

    //         sync2
    //             .find(".owl-item")
    //             .removeClass("current")
    //             .eq(current)
    //             .addClass("current");
    //         var onscreen = sync2.find(".owl-item.active").length - 1;
    //         var start = sync2.find(".owl-item.active").first().index();
    //         var end = sync2.find(".owl-item.active").last().index();

    //         if (current > end) {
    //             sync2.data("owl.carousel").to(current, 100, true);
    //         }
    //         if (current < start) {
    //             sync2.data("owl.carousel").to(current - onscreen, 100, true);
    //         }
    //     }

    //     function syncPosition2(el) {
    //         if (syncedSecondary) {
    //             var number = el.item.index;
    //             sync1.data("owl.carousel").to(number, 100, true);
    //         }
    //     }

    //     sync2.on("click", ".owl-item", function (e) {
    //         e.preventDefault();
    //         var number = $(this).index();
    //         sync1.data("owl.carousel").to(number, 300, true);
    //     });
    // }
	$('.hall-owl-slider-course').owlCarousel({
		loop: false,
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
				items: 1,
				autoplay: true,
			},
			767: {
				items: 2,
				autoplay: true,
			},
			1025: {
				items: 3
			}
		}
	});

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
    if ($(".section-gallery-video").length) {
        $(".gallery-video-popup").magnificPopup({
            type: "iframe",
        });
    }
    $('.section-gallery-video .video-slider-mobile').owlCarousel({
        stagePadding: 50,
        items:1,
        loop:false,
        margin:10,
        dots: false,
        nav: true,
        responsive:{
            600:{
                items:2
            }
        }
    });
    // function isInView($element) {
    //     const elementTop = $element.offset().top;
    //     const elementBottom = elementTop + $element.outerHeight();
    //     const viewportTop = $(window).scrollTop();
    //     const viewportBottom = viewportTop + $(window).height() - 250;
    //     return (elementBottom > viewportTop && elementTop < viewportBottom);
    //   }
      
    //   // Listen for the scroll event
    //   var listenerAttachedCourse = 0;
    //   $(window).on('scroll', function() {
    //     // Select the section that triggers the transformation
    //     const $section = $('.courses-js .section-3');
      
    //     // Check if the section is in view
    //     if (isInView($section)) {
    //         listenerAttachedCourse++;
    //         if(listenerAttachedCourse == 1) {
    //         const $element = $('.courses-js .section-3 img.img-background-top');
    //         const $element2 = $('.courses-js .section-3 .box-right');
    //         // Define the original and target matrices
    //         const matrix1 = [1.5, 0, 0, 1.5, 0, 0];
    //         const matrix2 = [1, 0, 0, 1, 0, 0];
    //         const matrix3 = [2, 0, 0, 2, 0, 0];
    //         const matrix4 = [1, 0, 0, 1, 0, 0];
            
    //         // Define the number of animation steps and the duration of the animation
    //         const steps = 100;
    //         const duration = 1500; // in milliseconds
    //         const duration2 = 2000;
            
    //         // Define a function to interpolate between two matrices
    //         function lerpMatrix(a, b, t) {
    //           return $.map(a, function(val, i) {
    //             return val + (b[i] - val) * t;
    //           });
    //         }
            
    //         // Animate the transform property
    //         $({t: 0}).animate({t: 1}, {
    //           duration: duration,
    //           step: function(t) {
    //             const matrix = lerpMatrix(matrix1, matrix2, t);
    //             $element.css('transform', 'matrix(' + matrix.join(',') + ')');
    //           }
    //         });
    //         $({t: 0}).animate({t: 1}, {
    //             duration: duration2,
    //             step: function(t) {
    //               const matrix = lerpMatrix(matrix3, matrix4, t);
    //               $element2.css('transform', 'matrix(' + matrix.join(',') + ')');
    //             }
    //           });
    //     }
    //     }
    //   });
});
