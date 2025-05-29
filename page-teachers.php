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

        $heading = !empty($section_1['heading']) ? $section_1['heading'] : '';
        $video_url = !empty($section_1['video_bg']) ? esc_url($section_1['video_bg']) : '';
        $youtube_link = !empty($section_1['youtube_link']) ? esc_url($section_1['youtube_link']) : '';
        ?>

        <?php if ($video_url || $heading || $youtube_link): ?>
            <section class="tearchers__section-video">
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
                                    <h1 style="color: #ffffff;"><?php echo $heading; ?></h1>
                                <?php endif; ?>

                                <?php if ($youtube_link): ?>
                                    <p>
                                        <a class="open-popup" href="<?php echo $youtube_link; ?>">
                                            <?php _e("Xem video", "xemer_theme"); ?> </a>

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
        $section_2 = get_field('banner_section') ?? [];

        $background_image = !empty($section_2['background_image']['url']) ? esc_url($section_2['background_image']['url']) : '';
        $background_alt = !empty($section_2['background_image']['alt']) ? esc_attr($section_2['background_image']['alt']) : '';

        $title_banner = !empty($section_2['title']) ? $section_2['title'] : '';
        $content_banner = !empty($section_2['content']) ? wp_kses_post($section_2['content']) : '';
        ?>

        <?php if ($background_image || $title_banner || $content_banner): ?>
            <section class="tearchers__section-banner">
                <?php if ($background_image): ?>
                    <img width="1920" height="1020" class="img-background" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="800" src="<?php echo $background_image; ?>" alt="<?php echo $background_alt; ?>">
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

        <!-- Card Start -->
        <?php
        $section_3 = get_field('card_section') ?? [];

        $card_items = !empty($section_3['card_item']) && is_array($section_3['card_item']) ? $section_3['card_item'] : [];
        ?>

        <?php if (!empty($card_items)): ?>
            <section class="teachers__section-usps">
                <div class="box-main">
                    <div class="container">
                        <div class="box-main_top">
                            <div class="row">
                                <?php foreach ($card_items as $index => $item):
                                    $bg_image = !empty($item['background_image']['url']) ? esc_url($item['background_image']['url']) : '';
                                    $bg_alt = !empty($item['background_image']['alt']) ? esc_attr($item['background_image']['alt']) : '';
                                    $title = !empty($item['title']) ? $item['title'] : '';
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
                                                    <h3 class="box-content__title"><?php echo $title; ?></h3>
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
        $directors_section = get_field('directors_section') ?? [];

        $title_director = !empty($directors_section['title']) ? $directors_section['title'] : [];
        //
        $args_directors = [
            'post_type' => 'member',
            'meta_query' => [
                [
                    'key' => 'is_director',
                    'value' => '1',
                    'compare' => '='
                ],
            ],
            'posts_per_page' => -1,
        ];

        //
        $directors = new WP_Query($args_directors);
        ?>
        <section class="section-list-teacher">
            <div class="container">
                <?php if ($title_director): ?>
                    <div class="title-blog">
                        <h2> <?php echo $title_director; ?> </h2>
                    </div>
                <?php endif; ?>
                <?php if ($directors->have_posts()): ?>
                    <div class="teacher-owl-slider owl-carousel owl-theme">
                        <?php while ($directors->have_posts()):
                            $directors->the_post(); ?>
                            <?php
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                            ?>
                            <div class="teacher-item">
                                <div class="teacher-image">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="teacher-content">
                                    <h3><?php the_title(); ?></h3>
                                    <?php if (has_excerpt()): ?>
                                        <?php the_excerpt(); ?>
                                    <?php endif; ?>
                                    <div class="popup-profile">
                                        <div class="popup-wrapper">
                                            <div class="popup-content">
                                                <!--  -->
                                                <div class="close-popup"><i class="fa-solid fa-x"></i></div>
                                                <!--  -->
                                                <h3><img class="alignright wp-image-17625" src="<?php echo esc_url($image); ?>"
                                                        alt="<?php echo esc_attr($image_alt); ?>" width="400"
                                                        height="503"><strong><span
                                                            style="color: #2b378b;"><?php the_title(); ?></span></strong></h3>
                                                <!--  -->
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>
        <!--  -->
        <div id="popup-profile-teacher"></div>

        <!--  -->
        <?php
        $args_staff = [
            'post_type' => 'member',
            'posts_per_page' => -1,
            'meta_query' => [
                [
                    'key' => 'is_director',
                    'value' => '1',
                    'compare' => '!=',
                ],
            ],
        ];
        $staffs = new WP_Query($args_staff);
        ?>
        <?php if ($staffs->have_posts()): ?>
            <section class="section-teacher">
                <div class="container">
                    <div class="row">

                        <?php while ($staffs->have_posts()):
                            $staffs->the_post(); ?>
                            <?php
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                            ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="box-teacher">
                                    <div class="box-image">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="box-content">
                                        <h3><?php the_title(); ?></h3>
                                        <?php if (has_excerpt()): ?>
                                            <p><?php the_excerpt(); ?></p>
                                        <?php endif; ?>
                                        <div class="popup-profile">
                                            <div class="popup-wrapper">
                                                <div class="popup-content">
                                                    <!--  -->
                                                    <div class="close-popup"><i class="fa-solid fa-x"></i></div>
                                                    <!--  -->
                                                    <h3><img class="alignright wp-image-17625"
                                                            src="<?php echo esc_url($image); ?>"
                                                            alt="<?php echo esc_attr($image_alt); ?>" width="400"
                                                            height="503"><strong><span
                                                                style="color: #2b378b;"><?php the_title(); ?></span></strong>
                                                    </h3>
                                                    <!--  -->
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <!-- Members End -->

        <!-- Releated News Start -->
        <?php
        $related_posts_group = get_field('related_post') ?? [];
        $featured_posts = $related_posts_group['featured_posts'] ?? [];
        //
        $title_related_posts = !empty($related_posts_group['title']) ? $related_posts_group['title'] : [];
        $desc_related_posts = !empty($related_posts_group['desc']) ? $related_posts_group['desc'] : [];
        ?>
        <section class="section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if ($title_related_posts): ?>
                            <div class="title-blog">
                                <h2><?php echo $title_related_posts; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($desc_related_posts): ?>
                            <div class="quote-heading">
                                <?php echo $desc_related_posts; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (!empty($featured_posts)): ?>
                    <?php $featured_posts = array_slice($featured_posts, 0, 5); ?>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>
        <!-- Releated News End -->
    </main>
</div>

<?php
get_footer();
