<?php

/**
 * Template Name: Trung tâm đào tạo
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
    <main class="center">
        <!-- Box Content Start -->
        <?php
        $box_content_section = get_field('box_content');

        $title_box = isset($box_content_section['title']) ? $box_content_section['title'] : '';
        $content_box = isset($box_content_section['content']) ? $box_content_section['content'] : '';
        $url_maps = isset($box_content_section['url_maps']) ? $box_content_section['url_maps'] : '';
        $image_box = isset($box_content_section['image']) ? $box_content_section['image'] : [];

        if ($title_box || $content_box || !empty($url_maps) || !empty($image_box)):
            ?>
            <section class="section-intro">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box-content">
                                    <?php if ($title_box): ?>
                                        <h1><?php echo esc_html($title_box); ?></h1>
                                    <?php endif; ?>

                                    <?php if ($content_box): ?>
                                        <div class="box-description">
                                            <?php echo wp_kses_post($content_box); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($url_maps)): ?>
                                        <button class="find-center">
                                            <a target="_blank" href="<?php echo esc_url($url_maps); ?>">
                                                <?php _e("TÌM TRUNG TÂM", "xemer_theme"); ?>
                                            </a>
                                        </button>
                                    <?php endif; ?>

                                    <img width="79" height="78" class="img-dot"
                                        src="<?php echo THEME_URI . '/assets/images/image-dot.png'; ?>" alt="" />
                                    <img width="76" height="29" class="img-wave"
                                        src="<?php echo THEME_URI . '/assets/images/image-wave.png'; ?>" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="box-image">
                                    <?php if (!empty($image_box['url'])): ?>
                                        <img class="img-intro" src="<?php echo esc_url($image_box['url']); ?>"
                                            alt="<?php echo esc_attr($image_box['alt'] ?? ''); ?>"
                                            width="<?php echo esc_attr($image_box['width'] ?? ''); ?>"
                                            height="<?php echo esc_attr($image_box['height'] ?? ''); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Box Content End -->
    </main>
</div>
<!-- Content End -->

<?php
get_footer();
