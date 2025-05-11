jQuery(function ($) {
    var $showMoreLink = $('.section-main-osc .content-main-osc .button-content .show-more');
    var $hideMoreLink = $('.section-main-osc .content-main-osc .button-content .hide-more');
    var $content = $('.section-main-osc .content-study-abroad .content-show-more');

    // Add a click event listener to the "Show More" link
    $showMoreLink.click(function () {
        // Slide down the content and show the "Hide More" link
        $content.slideDown(500);
        $('.section-main-osc .content-main-osc .button-content .hide-more').show();

        // Hide the "Show More" link
        $(this).hide();
    });

    // Add a click event listener to the "Hide More" link
    $hideMoreLink.click(function () {
        // Slide up the content and show the "Show More" link
        $content.slideUp(500);
        $('.section-main-osc .content-main-osc .button-content .show-more').show();

        // Hide the "Hide More" link
        $(this).hide();
    });
})