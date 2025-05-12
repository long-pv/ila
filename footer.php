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
    jQuery(function ($) {
        $(".navbar-dropdown-item .btn-dropdown-mb").on("click", function () {
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
<script src="<?php echo THEME_URI . '/assets/'; ?>js/skip-link-focus-fix.js"
    id="fptheme-skip-link-focus-fix-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/navigation.js" id="fptheme-navigation-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/owl.carousel.min.js" id="owl-carousel-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/courses.js" id="page-course-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/wow.min.js" id="wow-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.magnific-popup.js" id="magnific-popup-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery-scrolltofixed-min.js"
    id="jquery-scrollfixed-js-js"></script>
<!-- <script src="<?php echo THEME_URI . '/assets/'; ?>js/mapservice.js" id="fptheme-mapservice-js"></script> -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/list-center.js" id="fptheme-list-center-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/aboutus.js" id="page-about-us-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/timeline.js" id="timeline-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/main.js" id="main-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/global.js" id="fptheme-global-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.scrollTo.js" id="jquery-scrollto-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/page-template-teacher.js"
    id="page-template-teacher-js-js"></script>
<!-- <script src="js/courses.js" id="page-course-js-js"></script> -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/email-subscribers-public.js" id="email-subscribers-js"></script>

<!-- vucoder -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/smooth_scroll.min.js" id="ez-toc-scroll-scriptjs-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/front.min.js" id="ez-toc-js-js"></script>
<script id="ez-toc-js-js-extra">
			var ezTOC = {
				smooth_scroll: "1",
				visibility_hide_by_default: "",
				scroll_offset: "100",
				fallbackIcon:
					'<span class=""><span class="eztoc-hide" style="display:none;">Toggle<\/span><span class="ez-toc-icon-toggle-span"><svg style="fill: #999;color:#999" xmlns="http:\/\/www.w3.org\/2000\/svg" class="list-377408" width="20px" height="20px" viewBox="0 0 24 24" fill="none"><path d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z" fill="currentColor"><\/path><\/svg><svg style="fill: #999;color:#999" class="arrow-unsorted-368013" xmlns="http:\/\/www.w3.org\/2000\/svg" width="10px" height="10px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny"><path d="M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z"\/><\/svg><\/span><\/span>',
			};
		</script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/youtubehtml5.js" id="youtube-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/video.min.js" id="video-js-js"></script>
<script type="text/javascript">
			function getYouTubeVideoID(url) {
				const regex = /(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([^\s&]+)/;
				const match = url.match(regex);
				return match ? match[1] : null;
			}
			const element = document.getElementById("player-yt");
			const dataUrl = element.getAttribute("data-url");
			const url = dataUrl;
			const videoID = getYouTubeVideoID(url);
			// Load the IFrame Player API code asynchronously.
			var tag = document.createElement("script");
			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName("script")[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var player;
			function onYouTubeIframeAPIReady() {
				player = new YT.Player("player-yt", {
					videoId: videoID, // Replace VIDEO_ID with your video ID
					playerVars: {
						autoplay: 0, // Autoplay off, user has to click play
						controls: 1, // Show controls
						mute: 1, // Start muted to ensure autoplay works (if needed)
						rel: 0, // Disable related videos at the end
						showinfo: 0, // Hide video title
					},
					events: {
						onReady: onPlayerReady,
					},
				});
			}

			function onPlayerReady(event) {
				let volume = 0;
				player.unMute(); // Unmute the player
				player.setVolume(volume); // Start with volume 0

				const fadeAudio = setInterval(function () {
					if (volume < 50) {
						// Gradually increase volume to 50%
						volume += 1;
						player.setVolume(volume);
					} else {
						clearInterval(fadeAudio);
					}
				}, 100); // Increase volume every 100ms
			}
		</script>
<!--  -->
<!--  -->
<!--  -->


<!-- longpv -->
<!--  -->
<!--  -->
<!--  -->


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