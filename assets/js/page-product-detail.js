 jQuery(function ($) {
    var width = $(window).width();
    var window_height = $(window).height();
    const $faqItems = $(".list-faq-product .faq-item");
    const $firstFaqItem = $faqItems.first();

    $firstFaqItem.addClass("active");
    $firstFaqItem.find(".faq-answer").show();
    $firstFaqItem.find('.faq-question i').addClass('fa-chevron-up').removeClass('fa-chevron-down');

    $faqItems.on("click", function () {
        const $this = $(this);
        const $activeItems = $faqItems.filter(".active").not($this);
        
        $activeItems.find('.faq-answer').slideUp("fast");
        $activeItems.removeClass("active");
        $activeItems.find('.faq-question i').addClass('fa-chevron-down').removeClass('fa-chevron-up');

        $this.toggleClass("active");
        $this.find('.faq-answer').slideToggle("fast");
        $this.find('.faq-question i').toggleClass('fa-chevron-down fa-chevron-up');
    });
    if(width <= 767) {
        var swiper_news = new Swiper(".section-news .news-listing", {
                navigation: {
                    nextEl: ".section-news .news-listing .swiper-button-next",
                    prevEl: ".section-news .news-listing .swiper-button-prev",
                },
                slidesPerView: 1,
                spaceBetween: 14,
                loop: false,
                speed: 1000,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        pagination: {
                          el: ".swiper-news",
                          clickable: true,
                      },
                      centeredSlides: true,
                  },
                  1025: {
                    slidesPerView: 6,
                },
            }
        });
    }
    if(width >= 768 && width <= 1024) {
        var $contentCore = $('.section-core-value .content-core-main-first').height();
        var $this = $('.section-core-value .content-core-main-first');
        if($contentCore > 400) {
            $this.addClass('active');
        }
    }
    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };
    $(window).on('resize scroll', function() {
    if ($('.site-footer').isInViewport()) {
        $('.site-content-contain').addClass('viewported');
    } else {
        $('.site-content-contain').removeClass('viewported');
    }
});
});