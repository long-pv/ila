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

        $heading = isset($section_1['heading']) ? $section_1['heading'] : '';
        $video_url = isset($section_1['video_bg']) ? esc_url($section_1['video_bg']) : '';
        $youtube_link = isset($section_1['youtube_link']) ? esc_url($section_1['youtube_link']) : '';
        ?>

        <?php if ($video_url || $heading || $youtube_link): ?>
            <section class="section-1">
                <div class="container">
                    <?php // if ($video_url): ?>
                    <video id="banner-video" autoplay loop muted playsinline oncontextmenu="return false;" preload="auto">
                        <source src="<?php echo $video_url; ?>" type="video/mp4" />
                    </video>
                    <?php //endif; ?>

                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <?php if ($heading): ?>
                                    <h1 class="banner__title">
                                        <?php echo $heading; ?>
                                    </h1>
                                <?php endif; ?>

                                <?php if ($youtube_link): ?>
                                    <p>
                                        <a class="open-popup" href="<?php echo $youtube_link; ?>">Xem video</a>

                                        <a class="open-popup" href="<?php echo $youtube_link; ?>" style="margin-left: 10px">
                                            <img width="65" height="64"
                                                src="<?php echo THEME_URI . '/assets/'; ?>images/video-icon.png" /></a>
                                        </a>
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
        $section_2 = get_field('banner_section') ?? '';

        $background_image = isset($section_2['background_image']['url']) ? esc_url($section_2['background_image']['url']) : '';
        $background_alt = isset($section_2['background_image']['alt']) ? esc_attr($section_2['background_image']['alt']) : '';

        $title_banner = isset($section_2['title']) ? $section_2['title'] : '';
        $content_banner = isset($section_2['content']) ? wp_kses_post($section_2['content']) : '';
        ?>

        <?php if ($background_image || $title_banner || $content_banner): ?>
            <section class="section-2">
                <?php if ($background_image): ?>
                    <img width="1920" height="1044" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if ($title_banner): ?>
                                <h2 class="banner__title"><?php echo $title_banner; ?></h2>
                            <?php endif; ?>

                            <?php if ($content_banner): ?>
                                <?php echo $content_banner; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner End -->

        <!-- Banner 2 Start -->
        <?php
        $banner_2_section = get_field('banner_2_section') ?? '';

        $background_image = isset($banner_2_section['background_image']['url']) ? esc_url($banner_2_section['background_image']['url']) : '';
        $background_alt = isset($banner_2_section['background_image']['alt']) ? esc_attr($banner_2_section['background_image']['alt']) : '';

        $title_banner_2 = isset($banner_2_section['title']) ? $banner_2_section['title'] : '';
        $content_banner_2 = isset($banner_2_section['content']) ? wp_kses_post($banner_2_section['content']) : '';
        ?>

        <?php if ($background_image || $title_banner_2 || $content_banner_2): ?>
            <section class="section-3">
                <?php if ($background_image): ?>
                    <img width="1920" height="1280" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>" />
                <?php endif; ?>

                <div class="banner-content">
                    <div class="container">
                        <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                            <?php if ($title_banner_2): ?>
                                <h2 class="banner__title"><?php echo $title_banner_2; ?></h2>
                            <?php endif; ?>

                            <?php if ($content_banner_2): ?>
                                <div class="banner__content">
                                    <?php echo $content_banner_2; ?>
                                </div>
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
                                    $title = isset($item['title']) ? $item['title'] : '';
                                    $content = isset($item['content']) ? wp_kses_post($item['content']) : '';
                                    ?>

                                    <div class="col-md-6 col-xl-6">
                                        <div class="box-item box-item-2" data-aos="fade-up" data-aos-delay="50"
                                            data-aos-duration="800" style="background: #ddd365">
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

        $card2_title = isset($card_item_2['title']) ? $card_item_2['title'] : '';
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
                                            <h2 class="banner__title"><?php echo $card2_title; ?></h2>
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

        $title_box = isset($box_section['title']) ? $box_section['title'] : '';
        $content_box = isset($box_section['content']) ? wp_kses_post($box_section['content']) : '';
        $link_box = isset($box_section['link']) ? wp_kses_post($box_section['link']) : '';
        ?>

        <?php if ($title_box || $content_box || $bg_image_url): ?>
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
                                    <?php if ($title_box): ?>
                                        <h2><?php echo $title_box; ?></h2>
                                    <?php endif; ?>

                                    <?php if ($content_box): ?>
                                        <div class="p1"><?php echo $content_box; ?></div>
                                    <?php endif; ?>
                                    <p>
                                        <button class="discover">
                                            <a href="<?php echo $link_box; ?>" target="_blank" rel="noopener">
                                                Xem thêm
                                            </a>
                                        </button>
                                    </p>
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

        // Title & Content   
        $title = isset($banner_3_section['title']) ? $banner_3_section['title'] : '';
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
                                <h2 class="banner__title"><?php echo $title; ?></h2>
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

        <!-- News Start -->
        <?php
        $related_posts_group = get_field('related_post') ?? [];
        //               
        $title = isset($related_posts_group['title']) ? $related_posts_group['title'] : '';
        $link = isset($related_posts_group['link']) ? $related_posts_group['link'] : '';
        $content = isset($related_posts_group['desc']) ? wp_kses_post($related_posts_group['desc']) : '';
        //
        $featured_posts = $related_posts_group['featured_posts'] ?? [];
        $releated_posts = $related_posts_group['releated_posts'] ?? [];
        ?>

        <?php if (!empty($featured_posts) || !empty($releated_posts)): ?>
            <section class="section-8 section-gallery-video">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-blog" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <div class="title-blog">
                                    <?php if ($title): ?>
                                        <h2><?php echo $title ?></h2>
                                    <?php endif; ?>
                                    <button>
                                        <a href="<?php echo $link; ?>">Xem tất cả <i
                                                class="fa-regular fa-arrow-right"></i></a>
                                    </button>
                                </div>
                                <?php if ($content): ?>
                                    <span class="quote-heading">
                                        <?php echo $content; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Featured Post -->
                        <?php if (!empty($featured_posts)): ?>
                            <?php
                            $first_post = $featured_posts[0];
                            $first_id = is_array($first_post) ? $first_post['ID'] : $first_post;
                            $post_obj = get_post($first_id);
                            if ($post_obj):
                                $thumb = get_the_post_thumbnail_url($post_obj, 'full');
                                $title = get_the_title($post_obj);
                                $link = get_permalink($post_obj);
                                ?>
                                <div class="col-xl-7">
                                    <div class="box-video-top">
                                        <div class="video-item-lg">
                                            <div class="box-video">
                                                <a href="<?php echo esc_url($link); ?>">
                                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>"
                                                        width="600" height="337">
                                                </a>
                                            </div>
                                            <div class="box-description">
                                                <h3 class="title">
                                                    <a href="<?php echo esc_url($link); ?>"
                                                        class="box-title"><?php echo esc_html($title); ?></a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if (count($featured_posts) > 1): ?>
                                        <div class="box-video-bottom">
                                            <div class="row box-video-bottom__row">
                                                <?php for ($i = 1; $i < count($featured_posts); $i++): ?>
                                                    <?php
                                                    $post_id = is_array($featured_posts[$i]) ? $featured_posts[$i]['ID'] : $featured_posts[$i];
                                                    $post = get_post($post_id);
                                                    if ($post):
                                                        $thumb = get_the_post_thumbnail_url($post, 'medium');
                                                        $title = get_the_title($post);
                                                        $link = get_permalink($post);
                                                        ?>
                                                        <div class="col-xl-4 col-12">
                                                            <div class="video-item">
                                                                <div class="box-video">
                                                                    <a href="<?php echo esc_url($link); ?>">
                                                                        <img src="<?php echo esc_url($thumb); ?>"
                                                                            alt="<?php echo esc_attr($title); ?>" width="300" height="169">
                                                                    </a>
                                                                </div>
                                                                <div class="box-description">
                                                                    <h3 class="title">
                                                                        <a href="<?php echo esc_url($link); ?>"
                                                                            class="box-title"><?php echo esc_html($title); ?></a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <!-- Related Posts -->
                        <?php if (!empty($releated_posts)): ?>
                            <div class="col-xl-5">
                                <div class="related-post">
                                    <div class="row">
                                        <h3 class="related-title">Bài viết liên quan</h3>
                                        <?php foreach ($releated_posts as $post_item): ?>
                                            <?php
                                            $post_id = is_array($post_item) ? $post_item['ID'] : $post_item;
                                            $post = get_post($post_id);
                                            if ($post):
                                                $thumb = get_the_post_thumbnail_url($post, 'medium');
                                                $title = get_the_title($post);
                                                $link = get_permalink($post);
                                                $categories = get_the_category($post_id);
                                                $cat_name = $categories[0]->name ?? '';
                                                ?>
                                                <div class="col-md-6 col-xl-12">
                                                    <div class="post-item">
                                                        <div class="thumb-img">
                                                            <a href="<?php echo esc_url($link); ?>">
                                                                <img src="<?php echo esc_url($thumb); ?>"
                                                                    alt="<?php echo esc_attr($title); ?>" width="400" height="267">
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <h3 class="post-title"><a
                                                                    href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                                                            </h3>
                                                            <?php if ($cat_name): ?>
                                                                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"
                                                                    class="category-name"><?php echo esc_html($cat_name); ?></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- News End -->

        <!-- Top Face Start -->
        <?php
        $top_students = get_field('top_students');
        $title = isset($top_students['title']) ? $top_students['title'] : '';
        $link = isset($top_students['link']) ? $top_students['link'] : '';
        $top_student_posts = isset($top_students['top_student_posts']) ? $top_students['top_student_posts'] : [];
        ?>

        <?php if (!empty($top_student_posts)): ?>
            <section id="section-5" class="section-hall-of-greatness">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="title-blog">
                                <?php if (!empty($title)): ?>
                                    <h2><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>

                                <button>
                                    <a href="<?php echo esc_url($link); ?>">
                                        Xem tất cả <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="hall-owl-slider-course owl-carousel owl-theme">
                        <?php foreach ($top_student_posts as $post_student):
                            $student_image = get_the_post_thumbnail_url($post_student->ID, 'full');
                            $student_name = get_the_title($post_student->ID);
                            $student_link = get_permalink($post_student->ID);
                            $student_center = get_field('center', $post_student->ID);
                            $student_achievement = get_field('achievement', $post_student->ID);
                            ?>
                            <div class="hall-item">
                                <div class="hall-image">
                                    <?php if ($student_image): ?>
                                        <img src="<?php echo esc_url($student_image); ?>"
                                            alt="<?php echo esc_attr($student_name); ?>"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" loading="lazy" />
                                    <?php endif; ?>
                                </div>
                                <div class="hall-content">
                                    <h3><a
                                            href="<?php echo esc_url($student_link); ?>"><?php echo esc_html($student_name); ?></a>
                                    </h3>
                                    <?php if (!empty($student_center)): ?>
                                        <p style="font-size: 16px"><span><?php echo esc_html($student_center); ?></span></p>
                                    <?php endif; ?>
                                    <?php if (!empty($student_achievement)): ?>
                                        <p><?php echo esc_html($student_achievement); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <!--  -->
    </main>
</div>

<?php
get_footer();
