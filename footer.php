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

<!-- <div class="external-link">
    <button class="btn-register">
        <a href="https://ila.edu.vn/bai-test-tieng-anh-chuan-quoc-te-mien-phi" target="_blank">KIỂM TRA TRÌNH ĐỘ
            MIỄN PHÍ</a>
    </button>
</div> -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-order">
                    <div class="box-footer">
                        <div class="logo-footer">
                            <img width="65" height="51" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-footer.png" alt="">
                        </div>
                        <p class="footer-info">
                            <?php echo get_field('footer_setting_short_intro', 'option') ?: ''; ?>
                        </p>
                        <ul class="links-social">
                            <?php
                            $youtube =  get_field('social_network_youtube', 'option') ?: '';
                            if ($youtube):
                            ?>
                                <li>
                                    <a href="<?php echo $youtube; ?>" target="_blank">
                                        <img width="43" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-youtube.png" alt="youtube">
                                    </a>
                                </li>
                            <?php
                            endif;
                            ?>

                            <?php
                            $facebook =  get_field('social_network_facebook', 'option') ?: '';
                            if ($facebook):
                            ?>
                                <li>
                                    <a href="<?php echo $facebook; ?>" target="_blank">
                                        <img width="44" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-fb.png" alt="facebook">
                                    </a>
                                </li>
                            <?php
                            endif;
                            ?>

                            <?php
                            $instagram =  get_field('social_network_instagram', 'option') ?: '';
                            if ($instagram):
                            ?>
                                <li>
                                    <a href="<?php echo $instagram; ?>" target="_blank">
                                        <img width="43" height="44" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-insta.png" alt="instagram">
                                    </a>
                                </li>
                            <?php
                            endif;
                            ?>
                        </ul>
                        <div class="logo-bct">
                            <a href="https://www.dmca.com/Protection/Status.aspx?id=beeeb595-c70b-46b3-a077-a11cd6fce531&refurl=https%3a%2f%2fila.edu.vn%2f&rlo=true"
                                title="DMCA.com Protection Status" class="dmca-badge"
                                style="margin-bottom: 15px;" target="_blank"> <img
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/dmca-badge-w100-5x1-04.png"
                                    alt="DMCA.com Protection Status"></a>
                            <script src="<?php echo THEME_URI . '/assets/'; ?>js/DMCABadgeHelper.min.js"> </script>
                            <a href="" target="_blank"><img width="159" height="61"
                                    src="<?php echo THEME_URI . '/assets/'; ?>images/logo-bo-cong-thuong.png" alt="Bộ công thương"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-footer">
                        <div class="subscribe-form mobile">
                            <h3 class="subscribe-form-title">Nhận ngay ưu đãi mới nhất tại ILA</h3>
                            <div class="emaillist" id="es_form_f1-n1">
                                <form action="/#es_form_f1-n1" method="post"
                                    class="es_subscription_form es_shortcode_form "
                                    id="es_subscription_form_68209bccf1cb4" data-source="ig-es"
                                    data-form-id="1">
                                    <div class="es-field-wrap"><label><input
                                                class="es_required_field es_txt_email ig_es_form_field_email"
                                                type="email" name="esfpx_email" value=""
                                                placeholder="Nhập email để nhận thông tin từ ILA"
                                                required="required"></label></div><input type="hidden"
                                        name="esfpx_lists[]" value="e7cade300522"><input type="hidden"
                                        name="esfpx_form_id" value="1"><input type="hidden" name="es"
                                        value="subscribe">
                                    <input type="hidden" name="esfpx_es_form_identifier" value="f1-n1">
                                    <input type="hidden" name="esfpx_es_email_page" value="765">
                                    <input type="hidden" name="esfpx_es_email_page_url"
                                        value="https://ila.edu.vn/consultant/trang-chu/khu-vuc-tu-van">
                                    <input type="hidden" name="esfpx_status" value="Unconfirmed">
                                    <input type="hidden" name="esfpx_es-subscribe"
                                        id="es-subscribe-68209bccf1cb4" value="ec51cfbf99">
                                    <label style="position:absolute;top:-99999px;left:-99999px;z-index:-99;"
                                        aria-hidden="true"><span hidden="">Please leave this field
                                            empty.</span><input type="email" name="esfpx_es_hp_email"
                                            class="es_required_field" tabindex="-1" autocomplete="-1"
                                            value=""></label><input type="submit" name="submit"
                                        class="es_subscription_form_submit es_submit_button es_textbox_button"
                                        id="es_subscription_form_submit_68209bccf1cb4" value="Subscribe"><span
                                        class="es_spinner_image" id="spinner-image"><img width="32" height="32"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/spinner.gif" alt="Loading"></span>
                                </form><span class="es_subscription_message "
                                    id="es_subscription_message_68209bccf1cb4"></span>
                            </div>
                        </div>

                        <h3 class="box-footer-title">Tiếng Anh cao cấp</h3>
                        <ul class="list-cate">
                            <?php
                            $advanced_english = get_field('footer_setting_advanced_english', 'option') ?? [];
                            if ($advanced_english):
                                foreach ($advanced_english as $item):
                                    if ($item['link']['url'] && $item['link']['title']):
                            ?>
                                        <li>
                                            <a href="<?php echo $item['link']['url']; ?>">
                                                <?php echo $item['link']['title']; ?>
                                            </a>
                                        </li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-footer">
                        <h3 class="box-footer-title">Tiếng Anh tiêu chuẩn</h3>
                        <ul class="list-cate mb-36">
                            <?php
                            $standard_english = get_field('footer_setting_standard_english', 'option') ?? [];
                            if ($standard_english):
                                foreach ($standard_english as $item):
                                    if ($item['link']['url'] && $item['link']['title']):
                            ?>
                                        <li>
                                            <a href="<?php echo $item['link']['url']; ?>">
                                                <?php echo $item['link']['title']; ?>
                                            </a>
                                        </li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                        <h3 class="box-footer-title">Luyện thi & Du học</h3>
                        <ul class="list-cate">
                            <?php
                            $exam_preparation_study_abroad = get_field('footer_setting_exam_preparation_study_abroad', 'option') ?? [];
                            if ($exam_preparation_study_abroad):
                                foreach ($exam_preparation_study_abroad as $item):
                                    if ($item['link']['url'] && $item['link']['title']):
                            ?>
                                        <li>
                                            <a href="<?php echo $item['link']['url']; ?>">
                                                <?php echo $item['link']['title']; ?>
                                            </a>
                                        </li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-footer">
                        <h3 class="box-footer-title">Tìm hiểu thêm</h3>
                        <ul class="list-cate mb-36">
                            <?php
                            $learn_more = get_field('footer_setting_learn_more', 'option') ?? [];
                            if ($learn_more):
                                foreach ($learn_more as $item):
                                    if ($item['link']['url'] && $item['link']['title']):
                            ?>
                                        <li>
                                            <a href="<?php echo $item['link']['url']; ?>">
                                                <?php echo $item['link']['title']; ?>
                                            </a>
                                        </li>
                            <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </ul>
                        <div class="subscribe-form desktop">
                            <h3 class="subscribe-form-title">Nhận ngay ưu đãi mới nhất tại ILA</h3>
                            <div class="emaillist" id="es_form_f1-n2">
                                <form action="/#es_form_f1-n2" method="post"
                                    class="es_subscription_form es_shortcode_form "
                                    id="es_subscription_form_68209bccf2867" data-source="ig-es"
                                    data-form-id="1">
                                    <div class="es-field-wrap"><label><input
                                                class="es_required_field es_txt_email ig_es_form_field_email"
                                                type="email" name="esfpx_email" value=""
                                                placeholder="Nhập email để nhận thông tin từ ILA"
                                                required="required"></label></div><input type="hidden"
                                        name="esfpx_lists[]" value="e7cade300522"><input type="hidden"
                                        name="esfpx_form_id" value="1"><input type="hidden" name="es"
                                        value="subscribe">
                                    <input type="hidden" name="esfpx_es_form_identifier" value="f1-n2">
                                    <input type="hidden" name="esfpx_es_email_page" value="765">
                                    <input type="hidden" name="esfpx_es_email_page_url"
                                        value="https://ila.edu.vn/consultant/trang-chu/khu-vuc-tu-van">
                                    <input type="hidden" name="esfpx_status" value="Unconfirmed">
                                    <input type="hidden" name="esfpx_es-subscribe"
                                        id="es-subscribe-68209bccf2867" value="ec51cfbf99">
                                    <label style="position:absolute;top:-99999px;left:-99999px;z-index:-99;"
                                        aria-hidden="true"><span hidden="">Please leave this field
                                            empty.</span><input type="email" name="esfpx_es_hp_email"
                                            class="es_required_field" tabindex="-1" autocomplete="-1"
                                            value=""></label><input type="submit" name="submit"
                                        class="es_subscription_form_submit es_submit_button es_textbox_button"
                                        id="es_subscription_form_submit_68209bccf2867" value="Subscribe"><span
                                        class="es_spinner_image" id="spinner-image"><img width="32" height="32"
                                            src="<?php echo THEME_URI . '/assets/'; ?>images/spinner.gif" alt="Loading"></span>
                                </form><span class="es_subscription_message "
                                    id="es_subscription_message_68209bccf2867"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="logo-bct">
                <a href="https://www.dmca.com/Protection/Status.aspx?id=beeeb595-c70b-46b3-a077-a11cd6fce531&refurl=https%3a%2f%2fila.edu.vn%2f&rlo=true"
                    title="DMCA.com Protection Status" class="dmca-badge" style="margin-bottom: 15px;"
                    target="_blank"> <img src="<?php echo THEME_URI . '/assets/'; ?>images/dmca-badge-w100-5x1-04.png"
                        alt="DMCA.com Protection Status"></a>
                <script src="<?php echo THEME_URI . '/assets/'; ?>js/DMCABadgeHelper.min.js"> </script>
                <img width="159" height="61" src="<?php echo THEME_URI . '/assets/'; ?>images/logo-bo-cong-thuong.png" alt="Bộ công thương">
            </div>
            <p class="copy-right">
                <?php echo get_field('footer_setting_copyright', 'option') ?: ''; ?>
            </p>
            <div class="text-desc">
                <p>
                    <?php echo get_field('footer_setting_address', 'option') ?: ''; ?>
                </p>
            </div>
        </div>
        <div class="footer-bottom-fixed">
        </div>
    </div>
</footer><!-- #colophon -->

</div>


<!-- video home -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/n2.min.js" defer="" async=""></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/smartslider-frontend.min.js" defer="" async=""></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/ss-simple.min.js" defer="" async=""></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/w-bullet.min.js" defer="" async=""></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/index_add.js" defer="" async=""></script>

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
<script src="<?php echo THEME_URI . '/assets/'; ?>js/skip-link-focus-fix.js"
    id="fptheme-skip-link-focus-fix-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/navigation.js" id="fptheme-navigation-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/owl.carousel.min.js" id="owl-carousel-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/courses.js" id="page-course-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/wow.min.js" id="wow-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.magnific-popup.js" id="magnific-popup-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery-scrolltofixed-min.js"
    id="jquery-scrollfixed-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/list-center.js" id="fptheme-list-center-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/aboutus.js" id="page-about-us-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/timeline.js" id="timeline-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/main.js" id="main-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/global.js" id="fptheme-global-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/jquery.scrollTo.js" id="jquery-scrollto-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/page-template-teacher.js"
    id="page-template-teacher-js-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/email-subscribers-public.js" id="email-subscribers-js"></script>

<!-- vucoder -->
<script src="<?php echo THEME_URI . '/assets/'; ?>js/smooth_scroll.min.js" id="ez-toc-scroll-scriptjs-js"></script>
<script src="<?php echo THEME_URI . '/assets/'; ?>js/front.min.js" id="ez-toc-js-js"></script>
<script id="ez-toc-js-js-extra">
    var ezTOC = {
        smooth_scroll: "1",
        visibility_hide_by_default: "",
        scroll_offset: "100",
        fallbackIcon: '<span class=""><span class="eztoc-hide" style="display:none;">Toggle<\/span><span class="ez-toc-icon-toggle-span"><svg style="fill: #999;color:#999" xmlns="http:\/\/www.w3.org\/2000\/svg" class="list-377408" width="20px" height="20px" viewBox="0 0 24 24" fill="none"><path d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z" fill="currentColor"><\/path><\/svg><svg style="fill: #999;color:#999" class="arrow-unsorted-368013" xmlns="http:\/\/www.w3.org\/2000\/svg" width="10px" height="10px" viewBox="0 0 24 24" version="1.2" baseProfile="tiny"><path d="M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z"\/><\/svg><\/span><\/span>',
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

        const fadeAudio = setInterval(function() {
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
<script src="<?php echo THEME_URI . '/assets_2/'; ?>js/page-product-detail.js" id="fptheme-product-detail-js"></script>
<script src="<?php echo THEME_URI . '/assets_2/'; ?>js/archive-events.js" id="archive-events-js-js"></script>
<script src="<?php echo THEME_URI . '/assets_2/'; ?>js/main.js" id="fptheme-main-js"></script>
<script src="<?php echo THEME_URI . '/assets_2/'; ?>js/api.js" id="google-recaptcha-js"></script>


<?php wp_footer(); ?>

</body>

</html>