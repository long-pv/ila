<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xemer_theme
 */

?>

<script>
    jQuery(function($) {
        $(".navbar-dropdown-item .btn-dropdown-mb").on("click", function() {
            console.log($(this).children('i'));
            $(this).children('i').toggleClass('fa-angle-down fa-angle-up');
            $(this).next(".dropdown-content").slideToggle();
        })
    })
</script>

<script id="fptheme-skip-link-focus-fix-js-extra">
    var fpthemeScreenReaderText = {
        quote: '<svg class="icon icon-quote-right" aria-hidden="true" role="img"> <use href="#icon-quote-right" xlink:href="#icon-quote-right"><\/use> <\/svg>',
        expand: "Expand child menu",
        collapse: "Collapse child menu",
        icon: '<svg class="icon icon-angle-down" aria-hidden="true" role="img"> <use href="#icon-angle-down" xlink:href="#icon-angle-down"><\/use> <span class="svg-fallback icon-angle-down"><\/span><\/svg>'
    };
</script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/skip-link-focus-fix.js" id="fptheme-skip-link-focus-fix-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/navigation.js" id="fptheme-navigation-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/owl.carousel.min.js" id="owl-carousel-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/wow.min.js" id="wow-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.magnific-popup.js" id="magnific-popup-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery-scrolltofixed-min.js" id="jquery-scrollfixed-js-js"></script>
<!-- <script src="<?php echo THEME_URI . '/assets/'; ?>js/mapservice.js" id="fptheme-mapservice-js"></script> -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/list-center.js" id="fptheme-list-center-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/aboutus.js" id="page-about-us-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/timeline.js" id="timeline-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/main.js" id="main-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/global.js" id="fptheme-global-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.scrollTo.js" id="jquery-scrollto-js"></script>


<!-- ajax -->
<script id="my-ajax-script-js-extra">
    var myAjax = {
        ajaxUrl: '<?php echo admin_url('admin-ajax.php'); ?>',
        pageCurrentID: "8"
    };
</script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/homepage-ajax.js" id="my-ajax-script-js"></script>

<?php wp_footer(); ?>

</body>

</html>