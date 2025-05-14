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
$top_students = get_field('top_students');
var_dump($top_students);
?>

<!-- Content Start -->
<div id="content" class="site-content">
    <main class="page-course-jumpstart">
        <!-- Video Start -->
        <?php
        $section_1 = get_field('section_1');

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

        <!--  -->
        <?php
        $related_posts_group = get_field('related_post') ?? '';
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
                                    <h2>ILAVerse</h2>
                                    <button>
                                        <a href="https://ila.edu.vn/ilaverse">Xem tất cả <i
                                                class="fa-regular fa-arrow-right"></i></a>
                                    </button>
                                </div>
                                <span class="quote-heading">Chào mừng bạn đến với thế giới của ILAVerse – nơi bạn có thể
                                    tìm thấy tất cả bí quyết học tiếng Anh, mẹo nuôi dạy và chăm sóc con cái… để con
                                    trưởng thành hơn mỗi ngày.</span>
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
                                            <div class="row">
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
        $button = isset($top_students['button']) ? $top_students['button'] : [];
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
                                <?php if (!empty($button['url']) && !empty($button['title'])): ?>
                                    <button>
                                        <a href="<?php echo esc_url($button['url']); ?>"
                                            target="<?php echo esc_attr($button['target'] ?? '_self'); ?>">
                                            <?php echo esc_html($button['title']); ?> <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="hall-owl-slider-course owl-carousel owl-theme">
                        <?php foreach ($top_student_posts as $post):
                            if (!is_a($post, 'WP_Post'))
                                continue;
                            $student_image = get_the_post_thumbnail_url($post->ID, 'full');
                            $student_name = get_the_title($post->ID);
                            $student_link = get_permalink($post->ID);
                            $student_center = get_field('center', $post->ID);
                            $student_achievement = get_field('achievement', $post->ID);
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
</div>

<?php
get_footer();
