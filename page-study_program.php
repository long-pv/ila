<?php

/**
 * Template Name: Chương Trình Học 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xemer_theme
 */

get_header();
?>

<!-- Content Start -->
<div id="content" class="site-content">
    <main class="page-course-jumpstart">
        <!-- Video Start -->
        <?php
        $section_1 = get_field('section_1') ?? '';

        $video_url = isset($section_1['video_bg']) ? esc_url($section_1['video_bg']) : '';
        $heading = isset($section_1['heading']) ? esc_html($section_1['heading']) : '';
        $youtube_link = isset($section_1['youtube_link']) ? esc_url($section_1['youtube_link']) : '';

        $video_icon_url = isset($section_1['video_icon']['url']) ? esc_url($section_1['video_icon']['url']) : '';
        $video_icon_alt = isset($section_1['video_icon']['alt']) ? esc_attr($section_1['video_icon']['alt']) : '';
        ?>

        <?php if ($video_url || $heading || $youtube_link): ?>
            <section class="section-1">
                <div class="container">
                    <?php if ($video_url): ?>
                        <video id="banner-video" autoplay loop muted playsinline oncontextmenu="return false;" preload="auto">
                            <source src="<?php echo $video_url; ?>" type="video/mp4" />
                        </video>
                    <?php endif; ?>

                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <?php if ($heading): ?>
                                    <h1>
                                        <?php echo wp_kses_post($heading); ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if ($youtube_link): ?>
                                    <p>
                                        <a class="open-popup" href="<?php echo $youtube_link; ?>">Xem video</a>
                                        <?php if ($video_icon_url): ?>
                                            <a class="open-popup" href="<?php echo $youtube_link; ?>" style="margin-left: 10px">
                                                <img width="65" height="64" src="<?php echo $video_icon_url; ?>"
                                                    alt="<?php echo $video_icon_alt; ?>" />
                                            </a>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Video End -->

        <!-- Banner Start -->
        <?php
        $section_2 = get_field('banner_section');

        $background_image = isset($section_2['background_image']['url']) ? esc_url($section_2['background_image']['url']) : '';
        $background_alt = isset($section_2['background_image']['alt']) ? esc_attr($section_2['background_image']['alt']) : '';

        $title = isset($section_2['title']) ? esc_html($section_2['title']) : '';
        $content = isset($section_2['content']) ? wp_kses_post($section_2['content']) : '';

        $image = isset($section_2['image']['url']) ? esc_url($section_2['image']['url']) : '';
        $image_alt = isset($section_2['image']['alt']) ? esc_attr($section_2['image']['alt']) : '';
        ?>

        <?php if ($background_image || $title || $content): ?>
            <section class="section-2">
                <?php if ($background_image): ?>
                    <img width="1920" height="1044" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if ($title): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif; ?>

                            <?php if ($content): ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner End -->

        <!-- Banner 2 Start -->
        <?php
        $banner_2_section = get_field('banner_2_section');

        $background_image = isset($banner_2_section['background_image']['url']) ? esc_url($banner_2_section['background_image']['url']) : '';
        $background_alt = isset($banner_2_section['background_image']['alt']) ? esc_attr($banner_2_section['background_image']['alt']) : '';

        $title = isset($banner_2_section['title']) ? esc_html($banner_2_section['title']) : '';
        $content = isset($banner_2_section['content']) ? wp_kses_post($banner_2_section['content']) : '';

        $image = isset($banner_2_section['image']['url']) ? esc_url($banner_2_section['image']['url']) : '';
        $image_alt = isset($banner_2_section['image']['alt']) ? esc_attr($banner_2_section['image']['alt']) : '';
        ?>

        <?php if ($background_image || $title || $content): ?>
            <section class="section-3">
                <?php if ($background_image): ?>
                    <img width="1920" height="1280" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if ($title): ?>
                                <h2><span style="color: #ffffff"><?php echo $title; ?></span></h2>
                            <?php endif; ?>

                            <?php if ($content): ?>
                                <?php echo $content; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner 2 End -->

        <!-- Card Start -->
        <?php
        $section_3 = get_field('card_section') ?? [];
        $card_items = isset($section_3['card_item']) && is_array($section_3['card_item']) ? $section_3['card_item'] : [];
        ?>

        <?php if (!empty($card_items)): ?>
            <section class="section-4">
                <div class="box-main">
                    <div class="container">
                        <div class="box-main_top">
                            <div class="row">
                                <?php foreach ($card_items as $item): ?>
                                    <?php
                                    $image_url = isset($item['background_image']['url']) ? esc_url($item['background_image']['url']) : '';
                                    $image_alt = isset($item['background_image']['alt']) ? esc_attr($item['background_image']['alt']) : '';
                                    $title = isset($item['title']) ? esc_html($item['title']) : '';
                                    $content = isset($item['content']) ? wp_kses_post($item['content']) : '';
                                    ?>

                                    <div class="col-md-6 col-xl-6">
                                        <div class="box-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800"
                                            style="background: #ddd365">
                                            <?php if ($image_url): ?>
                                                <div class="box-thumb">
                                                    <img width="615" height="760" src="<?php echo $image_url; ?>"
                                                        alt="<?php echo $image_alt; ?>" />
                                                </div>
                                            <?php endif; ?>

                                            <div class="box-content">
                                                <?php if ($title): ?>
                                                    <h2><?php echo $title; ?></h2>
                                                <?php endif; ?>

                                                <?php if ($content): ?>
                                                    <div><?php echo $content; ?></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Card End -->

        <!-- Cart 2 Start -->
        <?php
        $card_item_2 = get_field('card_item_2') ?? [];

        $card2_title = isset($card_item_2['title']) ? esc_html($card_item_2['title']) : '';
        $card2_content = isset($card_item_2['content']) ? wp_kses_post($card_item_2['content']) : '';
        $card2_image_url = isset($card_item_2['image']['url']) ? esc_url($card_item_2['image']['url']) : '';
        $card2_image_alt = isset($card_item_2['image']['alt']) ? esc_attr($card_item_2['image']['alt']) : '';
        ?>

        <?php if ($card2_title || $card2_content || $card2_image_url): ?>
            <section class="section-5">
                <div class="container">
                    <div class="box-course-background" style="background: #fccfdd">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner-content">
                                    <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50"
                                        data-aos-duration="800">
                                        <?php if ($card2_title): ?>
                                            <h2><span style="color: #000000"><?php echo $card2_title; ?></span></h2>
                                        <?php endif; ?>

                                        <?php if ($card2_content): ?>
                                            <div><?php echo $card2_content; ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <?php if ($card2_image_url): ?>
                                <div class="col-md-6">
                                    <img width="637" height="537" class="img-background" data-aos="fade-up" data-aos-delay="50"
                                        data-aos-duration="800" src="<?php echo $card2_image_url; ?>"
                                        alt="<?php echo $card2_image_alt; ?>" />
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Cart 2 End -->

        <!-- Box Start -->
        <?php
        $box_section = get_field('box_section') ?? [];

        $bg_image_url = isset($box_section['background_image']['url']) ? esc_url($box_section['background_image']['url']) : '';
        $bg_image_alt = isset($box_section['background_image']['alt']) ? esc_attr($box_section['background_image']['alt']) : '';

        $title = isset($box_section['title']) ? esc_html($box_section['title']) : '';
        $content = isset($box_section['content']) ? wp_kses_post($box_section['content']) : '';

        $button = $box_section['button'] ?? [];
        $button_url = isset($button['url']) ? esc_url($button['url']) : '';
        $button_title = isset($button['title']) ? esc_html($button['title']) : '';
        $button_target = isset($button['target']) ? esc_attr($button['target']) : '_self';
        ?>

        <?php if ($title || $content || $bg_image_url): ?>
            <section class="section-6">
                <div class="container">
                    <div class="box-course-update-2">
                        <?php if ($bg_image_url): ?>
                            <img width="1260" height="565" class="img-background" data-aos="fade-up" data-aos-delay="50"
                                data-aos-duration="800" src="<?php echo $bg_image_url; ?>" alt="<?php echo $bg_image_alt; ?>" />
                        <?php endif; ?>

                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50"
                                    data-aos-duration="800">
                                    <?php if ($title): ?>
                                        <h2><?php echo $title; ?></h2>
                                    <?php endif; ?>

                                    <?php if ($content): ?>
                                        <div class="p1"><?php echo $content; ?></div>
                                    <?php endif; ?>

                                    <?php if ($button_url && $button_title): ?>
                                        <p>
                                            <button class="discover">
                                                <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>"
                                                    rel="noopener">
                                                    <?php echo $button_title; ?>
                                                </a>
                                            </button>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Box End -->

        <!-- Banner 3 Start -->
        <?php
        $banner_3_section = get_field('banner_3_section') ?? [];

        // Background image
        $background_image = isset($banner_3_section['background_image']['url']) ? esc_url($banner_3_section['background_image']['url']) : '';
        $background_alt = isset($banner_3_section['background_image']['alt']) ? esc_attr($banner_3_section['background_image']['alt']) : '';

        // Content image
        $image = isset($banner_3_section['image']['url']) ? esc_url($banner_3_section['image']['url']) : '';
        $image_alt = isset($banner_3_section['image']['alt']) ? esc_attr($banner_3_section['image']['alt']) : '';

        // Title & Content
        $title = isset($banner_3_section['title']) ? esc_html($banner_3_section['title']) : '';
        $content = isset($banner_3_section['content']) ? wp_kses_post($banner_3_section['content']) : '';
        ?>

        <?php if ($background_image || $title || $content): ?>
            <section class="section-7">
                <?php if ($background_image): ?>
                    <img width="1920" height="936" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if ($title): ?>
                                <h2><?php echo nl2br($title); ?></h2>
                            <?php endif; ?>

                            <?php if ($content): ?>
                                <div class="p1"><?php echo $content; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner 3 End -->
    </main>
</div>
</div>

<?php
get_footer();
