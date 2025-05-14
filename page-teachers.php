<?php

/**
 * Template Name: Đội Ngũ Giáo Viên
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
    <main class="tearchers">
        <!-- Video start -->
        <?php
        $section_1 = get_field('section_1') ?? [];

        $video_url = !empty($section_1['video_bg']) ? esc_url($section_1['video_bg']) : '';
        $heading = !empty($section_1['heading']) ? esc_html($section_1['heading']) : '';
        $youtube_link = !empty($section_1['youtube_link']) ? esc_url($section_1['youtube_link']) : '';

        $video_icon_url = !empty($section_1['video_icon']['url']) ? esc_url($section_1['video_icon']['url']) : '';
        $video_icon_alt = !empty($section_1['video_icon']['alt']) ? esc_attr($section_1['video_icon']['alt']) : '';
        ?>

        <?php if ($video_url || $heading || $youtube_link): ?>
            <section class="section-video">
                <div class="container">
                    <?php if ($video_url): ?>
                        <video id="banner-video" autoplay loop muted playsinline oncontextmenu="return false;" preload="auto">
                            <source src="<?php echo $video_url; ?>" type="video/mp4">
                        </video>
                    <?php endif; ?>

                    <div class="banner-content">
                        <div class="container">
                            <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <?php if ($heading): ?>
                                    <h1 style="color: #ffffff;"><?php echo nl2br($heading); ?></h1>
                                <?php endif; ?>

                                <?php if ($youtube_link): ?>
                                    <p>
                                        <a class="open-popup" href="<?php echo $youtube_link; ?>">Xem video</a>
                                        <?php if ($video_icon_url): ?>
                                            <a class="open-popup" href="<?php echo $youtube_link; ?>" style="margin-left: 10px;">
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

        <?php if ($background_image || $title || $content): ?>
            <section class="section-banner">
                <?php if ($background_image): ?>
                    <img width="1920" height="1020" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>">
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

                            <?php if ($image): ?>
                                <div class="banner-image">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $image_alt; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Banner End -->

        <!-- Card Start -->
        <?php
        $section_3 = get_field('card_section') ?? [];

        $card_items = !empty($section_3['card_item']) && is_array($section_3['card_item']) ? $section_3['card_item'] : [];
        ?>

        <?php if (!empty($card_items)): ?>
            <section class="section-usps">
                <div class="box-main">
                    <div class="container">
                        <div class="box-main_top">
                            <div class="row">
                                <?php foreach ($card_items as $index => $item):
                                    $bg_image = !empty($item['background_image']['url']) ? esc_url($item['background_image']['url']) : '';
                                    $bg_alt = !empty($item['background_image']['alt']) ? esc_attr($item['background_image']['alt']) : '';
                                    $title = !empty($item['title']) ? esc_html($item['title']) : '';
                                    $content = !empty($item['content']) ? wp_kses_post($item['content']) : '';
                                    ?>
                                    <div class="col-md-6 col-xl-6">
                                        <div class="box-item box-item-<?php echo $index + 1; ?>" data-aos="fade-up"
                                            data-aos-delay="50" data-aos-duration="800" <?php if ($bg_image): ?>
                                                style="background-image: url('<?php echo $bg_image; ?>'); background-size: cover; background-position: center;"
                                            <?php else: ?> style="background-color: #cabbb0;" <?php endif; ?>>
                                            <?php if ($bg_image): ?>
                                                <div class="box-thumb d-none">
                                                    <img src="<?php echo $bg_image; ?>" alt="<?php echo $bg_alt; ?>" />
                                                </div>
                                            <?php endif; ?>
                                            <div class="box-content">
                                                <?php if ($title): ?>
                                                    <h3><?php echo $title; ?></h3>
                                                <?php endif; ?>
                                                <?php if ($content): ?>
                                                    <p><?php echo $content; ?></p>
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

        <!-- Members Start -->
        <?php
        $args_directors = [
            'post_type' => 'member',
            'meta_query' => [
                [
                    'key' => 'is_director',
                    'value' => '1',
                    'compare' => 'LIKE',
                ],
            ],
            'posts_per_page' => -1,
        ];
        $directors = new WP_Query($args_directors);
        ?>

        <section class="section-list-teacher">
            <div class="container">
                <div class="title-blog">
                    <h2>CÁC GIÁM ĐỐC ĐÀO TẠO</h2>
                </div>
                <div class="teacher-owl-slider owl-carousel owl-theme">
                    <?php if ($directors->have_posts()): ?>
                        <?php while ($directors->have_posts()):
                            $directors->the_post(); ?>
                            <?php
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                            $position = get_field('position');
                            $description = get_field('description');
                            ?>
                            <div class="teacher-item">
                                <div class="teacher-image">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="teacher-content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo esc_html($position); ?></p>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <div class="close-popup"><i class="fa-solid fa-x"></i></div>
                                                <h3>
                                                    <?php if ($image): ?>
                                                        <img src="<?php echo esc_url($image); ?>"
                                                            alt="<?php echo esc_attr($image_alt); ?>" width="400">
                                                    <?php endif; ?>
                                                    <strong><span style="color: #2b378b;"><?php the_title(); ?></span></strong>
                                                </h3>
                                                <p><strong style="color: #2b378b;"><?php echo esc_html($position); ?></strong>
                                                </p>
                                                <p><?php echo wp_kses_post($description); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!--  -->
        <div id="popup-profile-teacher"></div>
        <!--  -->
        <?php
        $args_staff = [
            'post_type' => 'member',
            'meta_query' => [
                [
                    'key' => 'is_director',
                    'compare' => 'NOT EXISTS'
                ]
            ],
            'posts_per_page' => -1,
        ];
        $staffs = new WP_Query($args_staff);
        ?>

        <section class="section-teacher">
            <div class="container">
                <div class="title-heading">
                    <h2>ĐỘI NGŨ GIÁO VIÊN</h2>
                </div>
                <div class="row">
                    <?php if ($staffs->have_posts()): ?>
                        <?php while ($staffs->have_posts()):
                            $staffs->the_post(); ?>
                            <?php
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                            $position = get_field('position');
                            $description = get_field('description');
                            ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="box-teacher">
                                    <div class="box-image">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="box-content">
                                        <h3 class="name"><?php the_title(); ?></h3>
                                        <p class="center"><?php echo esc_html($position); ?></p>
                                        <div class="popup-profile">
                                            <div class="popup-wrapper">
                                                <div class="popup-content">
                                                    <div class="close-popup"><i class="fa-solid fa-x"></i></div>
                                                    <h3>
                                                        <?php if ($image): ?>
                                                            <img src="<?php echo esc_url($image); ?>"
                                                                alt="<?php echo esc_attr($image_alt); ?>" width="400">
                                                        <?php endif; ?>
                                                        <strong><span
                                                                style="color: #2b378b;"><?php the_title(); ?></span></strong>
                                                    </h3>
                                                    <p><strong
                                                            style="color: #2b378b;"><?php echo esc_html($position); ?></strong>
                                                    </p>
                                                    <p><?php echo wp_kses_post($description); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Members End -->

        <!-- Releated News Start -->
        <?php
        $related_posts_group = get_field('related_post');
        $featured_posts = $related_posts_group['featured_posts'] ?? [];

        if (!empty($featured_posts)):
            ?>
            <section class="section-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-blog">
                                <h2>ILAVERSE</h2>
                            </div>
                            <div class="quote-heading">
                                Chào mừng bạn đến với thế giới của ILAVerse – nơi bạn có thể tìm thấy tất cả bí quyết học
                                tiếng Anh, mẹo nuôi dạy và chăm sóc con cái… để con trưởng thành hơn mỗi ngày.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($featured_posts as $index => $post):
                            if (!is_a($post, 'WP_Post'))
                                continue; // đảm bảo bảo mật
                            setup_postdata($post);

                            // Ảnh đại diện
                            $thumb = get_the_post_thumbnail_url($post, 'large');
                            $thumb_alt = get_post_meta(get_post_thumbnail_id($post), '_wp_attachment_image_alt', true);
                            $thumb_alt = $thumb_alt ?: get_the_title($post); // fallback alt
                    
                            // Danh mục đầu tiên
                            $cats = get_the_category($post->ID);
                            $cat_link = !empty($cats) ? get_category_link($cats[0]->term_id) : '';
                            $cat_name = !empty($cats) ? $cats[0]->name : '';

                            // Thêm class riêng cho bài đầu tiên
                            $is_first = ($index === 0);
                            ?>
                            <?php if ($is_first): ?>
                                <div class="col-xl-6 col-md-6">
                                    <div class="blog-main blog-first">
                                        <div class="blog-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo esc_url($thumb); ?>"
                                                    alt="<?php echo esc_attr($thumb_alt); ?>" />
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <?php if ($cat_name): ?>
                                                <div class="blog-archive arrow-before">
                                                    <span><a
                                                            href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a></span>
                                                </div>
                                            <?php endif; ?>
                                            <div class="blog-content-description">
                                                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="col-xl-12">
                                        <div class="row">
                                        <?php else: ?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="blog-main">
                                                    <div class="blog-thumbnail">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <img src="<?php echo esc_url($thumb); ?>"
                                                                alt="<?php echo esc_attr($thumb_alt); ?>" />
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-content-title">
                                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        </div>
                                                        <?php if ($cat_name): ?>
                                                            <div class="blog-archive arrow-before">
                                                                <span><a
                                                                        href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html($cat_name); ?></a></span>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div> <!-- .row -->
                            </div> <!-- .col-xl-12 -->
                        </div> <!-- .col-xl-6 -->
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </section>
            <?php
            wp_reset_postdata();
        endif;
        ?>

        <!-- Releated News End -->
    </main>
</div>


<?php
get_footer();
