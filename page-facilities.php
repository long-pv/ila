<?php

/**
 * Template Name: Cơ Sở Vật Chất
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
    <main class="facility">
        <!-- Video Start -->
        <?php
        $section_1 = get_field('section_1') ?? [];

        $video_url = !empty($section_1['video_bg']) ? esc_url($section_1['video_bg']) : '';
        $heading = !empty($section_1['heading']) ? $section_1['heading'] : '';
        $youtube_link = !empty($section_1['youtube_link']) ? esc_url($section_1['youtube_link']) : '';

        $video_icon_url = !empty($section_1['video_icon']['url']) ? esc_url($section_1['video_icon']['url']) : '';
        $video_icon_alt = !empty($section_1['video_icon']['alt']) ? esc_attr($section_1['video_icon']['alt']) : '';
        ?>

        <?php if ($video_url || $heading || $youtube_link): ?>
            <section class="section-1">
                <div class="container">
                    <?php if ($video_url): ?>
                        <video id="banner-video" autoplay loop muted playsinline oncontextmenu="return false" preload="auto">
                            <source src="<?php echo $video_url; ?>" type="video/mp4" />
                        </video>
                    <?php endif; ?>

                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <?php if ($heading): ?>
                                    <h1 style="color: #ffffff"><?php echo nl2br(esc_html($heading)); ?></h1>
                                <?php endif; ?>

                                <?php if ($youtube_link): ?>
                                    <p>
                                        <a class="open-popup" href="<?php echo $youtube_link; ?>">Xem video</a>
                                        <?php if ($video_icon_url): ?>
                                            <a class="open-popup" href="<?php echo $youtube_link; ?>" style="margin-left: 10px">
                                                <img width="65" height="64" class="img-bound-fill"
                                                    src="<?php echo $video_icon_url; ?>" alt="<?php echo $video_icon_alt; ?>" />
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
        $section_2 = get_field('banner_section') ?? [];

        $background_image = !empty($section_2['background_image']['url']) ? esc_url($section_2['background_image']['url']) : '';
        $background_alt = !empty($section_2['background_image']['alt']) ? esc_attr($section_2['background_image']['alt']) : '';

        $title = !empty($section_2['title']) ? esc_html($section_2['title']) : '';
        $content = !empty($section_2['content']) ? wp_kses_post($section_2['content']) : '';

        $image = !empty($section_2['image']['url']) ? esc_url($section_2['image']['url']) : '';
        $image_alt = !empty($section_2['image']['alt']) ? esc_attr($section_2['image']['alt']) : '';
        ?>

        <?php if ($title || $content || $image): ?>
            <section class="section-2">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box-content">
                                    <?php if ($title): ?>
                                        <h2 class="p1"><?php echo $title; ?></h2>
                                    <?php endif; ?>

                                    <?php if ($content): ?>
                                        <p class="p1"><?php echo $content; ?></p>
                                    <?php endif; ?>

                                    <div class="box-circle"></div>
                                    <div class="box-rectangle"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="box-gallery">
                                    <div class="box-rectangle"></div>

                                    <?php if ($image): ?>
                                        <img class="img-gallery-1" src="<?php echo $image; ?>"
                                            alt="<?php echo $image_alt; ?>" />
                                    <?php endif; ?>

                                    <?php if ($background_image): ?>
                                        <img class="img-gallery-2" src="<?php echo $background_image; ?>"
                                            alt="<?php echo $background_alt; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner End -->

        <!-- Banner 2 Start -->
        <?php
        $section_3 = get_field('banner_2_section') ?? [];

        $background = !empty($section_3['background_image']['url']) ? esc_url($section_3['background_image']['url']) : '';
        $bg_alt = !empty($section_3['background_image']['alt']) ? esc_attr($section_3['background_image']['alt']) : '';

        $title = !empty($section_3['title']) ? esc_html($section_3['title']) : '';
        $content = !empty($section_3['content']) ? wp_kses_post($section_3['content']) : '';
        ?>

        <?php if ($title || $content || $background): ?>
            <section class="section-3">
                <?php if ($background): ?>
                    <img width="1920" height="948" class="img-background" src="<?php echo $background; ?>"
                        alt="<?php echo $bg_alt; ?>" />
                <?php endif; ?>

                <div class="box-content">
                    <div class="container">
                        <div class="box-main-content">
                            <?php if ($title): ?>
                                <h2 class="p1"><?php echo $title; ?></h2>
                            <?php endif; ?>

                            <?php if ($content): ?>
                                <div class="p1"><?php echo $content; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner 2 End -->

        <!-- Slide Image Start -->
        <?php
        $slide_section = get_field('slide_section') ?? [];

        $title = !empty($slide_section['title']) ? esc_html($slide_section['title']) : '';
        $gallery = !empty($slide_section['slide_item']) && is_array($slide_section['slide_item']) ? $slide_section['slide_item'] : [];
        ?>

        <?php if ($title || !empty($gallery)): ?>
            <section id="section-6" class="section-space-powers">
                <div class="container">
                    <?php if ($title): ?>
                        <div class="title-space">
                            <h2><?php echo nl2br($title); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($gallery)): ?>
                    <div class="space-owl-slider owl-carousel owl-theme">
                        <?php foreach ($gallery as $image):
                            $img_url = !empty($image['url']) ? esc_url($image['url']) : '';
                            $img_alt = !empty($image['alt']) ? esc_attr($image['alt']) : '';
                            $img_width = !empty($image['width']) ? (int) $image['width'] : '';
                            $img_height = !empty($image['height']) ? (int) $image['height'] : '';
                            ?>
                            <?php if ($img_url): ?>
                                <div class="space-item">
                                    <div class="space-image">
                                        <img width="<?php echo $img_width; ?>" height="<?php echo $img_height; ?>"
                                            src="<?php echo $img_url; ?>"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="<?php echo $img_alt; ?>" decoding="async" sizes="100vw" />
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <!-- Slide Image End -->
    </main>
</div>
<!-- Content End -->


<?php
get_footer();
