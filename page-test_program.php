<?php

/**
 * Template Name: Chương trình luyện thi
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

<div class="site-content-contain-xxx">
    <div id="content" class="site-content">
        <main class="page-course-ola-ielts">

            <?php
            $section_1 = get_field('section_1') ?? [];
            if ($section_1):
                $background = $section_1['background'] ?? "";
                $title = $section_1['title'] ?? "";
                $sub_title = $section_1['sub_title'] ?? "";
                $description = $section_1['description'] ?? "";

                if ($background &&  $title) :
            ?>
                    <section class="section-2">
                        <img width="1920" height="1050" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo $background; ?>" alt="<?php echo $title; ?>" />
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <h1>
                                        <?php echo $title; ?>
                                    </h1>

                                    <?php if ($sub_title) : ?>
                                        <h2>
                                            <?php echo $sub_title; ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if ($description) : ?>
                                        <p style="font-weight: 400">
                                            <?php echo $description; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>


            <?php
            $section_2 = get_field('section_2') ?? [];
            if ($section_2):
                $background = $section_2['background'] ?? "";
                $title = $section_2['title'] ?? "";
                $list = $section_2['list'] ?? [];
                $description = $section_2['description'] ?? "";

                if ($background &&  $title) :
            ?>
                    <section class="section-3">
                        <img width="1920" height="1280" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo $background; ?>" alt="<?php echo $title; ?>" />
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <h2>
                                        <strong>
                                            <span style="color: #ffffff">
                                                <?php echo $title; ?>
                                            </span>
                                        </strong>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <?php
                if ($list) :
                ?>
                    <section class="section-4">
                        <div class="box-main">
                            <div class="container">
                                <div class="box-main_top">
                                    <div class="row justify-content-center list-5-column">
                                        <?php
                                        foreach ($list as $item) :
                                            if ($item['title'] || $item['description']):
                                        ?>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="box-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" style="background: #b8a394">
                                                        <div class="box-content">
                                                            <h3>
                                                                <span style="color: #ffffff">
                                                                    <b>
                                                                        <?php echo $item['title'] ?? ''; ?>
                                                                    </b>
                                                                </span>
                                                            </h3>

                                                            <p>
                                                                <span style="font-weight: 400; color: #ffffff">
                                                                    <?php echo $item['description'] ?? ''; ?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            else:
                                            ?>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="box-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" style="background: #fff">
                                                    </div>
                                                </div>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>


            <?php
            $section_3 = get_field('section_3') ?? [];
            if ($section_3):
                $background = $section_3['background'] ?? "";
                $title = $section_3['title'] ?? "";
                $thumbnail = $section_3['thumbnail'] ?? "";
                $url = $section_3['url'] ?? "";
                $description = $section_3['description'] ?? "";
                $list = $section_3['list'] ?? [];

                if ($background &&  $title) :
            ?>
                    <section class="section-3 sat">
                        <img width="1920" height="900" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo $background; ?>" alt="<?php echo $title; ?>" />
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <?php if ($thumbnail) : ?>
                                        <h2><img decoding="async" class="size-full wp-image-4224 alignleft" src=" <?php echo $thumbnail; ?>" alt="image-ila-courses-4" width="133" height="73" /></h2>
                                    <?php endif; ?>
                                    <h2>
                                        <span style="color: #000000">
                                            <strong>
                                                <?php echo $title; ?>
                                            </strong>
                                        </span>
                                    </h2>

                                    <?php if ($description) : ?>
                                        <p>
                                            <em>
                                                <?php echo $description; ?>
                                            </em>
                                        </p>
                                    <?php endif; ?>

                                    <?php if ($url) : ?>
                                        <p>
                                            <button class="discover">
                                                <a href=" <?php echo $url; ?>">
                                                    <?php _e('Xem thêm', 'xemer_theme'); ?>
                                                </a>
                                            </button>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <?php if ($list): ?>
                    <section class="section-4">
                        <div class="box-main">
                            <div class="container">
                                <div class="box-main_top">
                                    <div class="row justify-content-center list-5-column">
                                        <?php
                                        foreach ($list as $item) :
                                            if ($item['title'] || $item['description']):
                                        ?>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="box-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" style="background: #fbf3b6">
                                                        <div class="box-content">
                                                            <h2>
                                                                <span style="color: #000000">
                                                                    <b>
                                                                        <?php echo $item['title'] ?? ''; ?>
                                                                    </b>
                                                                </span>
                                                            </h2>

                                                            <p>
                                                                <span style="font-weight: 400; color: #000000">
                                                                    <?php echo $item['description'] ?? ''; ?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>

            <?php
            $section_4 = get_field('section_4') ?? [];
            if ($section_4):
                $background = $section_4['background'] ?? "";
                $title = $section_4['title'] ?? "";
                $description = $section_4['description'] ?? "";

                if ($background &&  $title) :
            ?>
                    <section class="section-7 section-7-padding">
                        <img width="1920" height="936" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo $background; ?>" alt="<?php echo $title; ?>" />
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <h2>
                                        <?php echo $title; ?>
                                    </h2>
                                    <?php if ($description) : ?>
                                        <p>
                                            <span style="font-weight: 400">
                                                <?php echo $description; ?>
                                            </span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif; ?>


            <?php
            $section_5 = get_field('section_5') ?? [];
            if ($section_5):
            ?>
                <section class="section-8 section-gallery-video">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-blog" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <div class="title-blog">
                                        <?php if ($section_5['title']) : ?>
                                            <h2>
                                                <?php echo $section_5['title']; ?>
                                            </h2>
                                        <?php endif; ?>

                                        <?php if ($section_5['url']) : ?>
                                            <button>
                                                <a href="<?php echo $section_5['url']; ?>">
                                                    <?php _e('Xem tất cả'); ?> <i class="fa-regular fa-arrow-right"></i>
                                                </a>
                                            </button>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($section_5['description']) : ?>
                                        <span class="quote-heading">
                                            <?php echo $section_5['description']; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-7">
                                <?php
                                $video_ids = $section_5['video'] ?? [];

                                if (!empty($video_ids)) :

                                    // Chỉ lấy 4 ID đầu tiên
                                    $video_ids = array_slice($video_ids, 0, 4);

                                    $videos = get_posts([
                                        'post_type' => 'video_media',
                                        'post__in' => $video_ids,
                                        'orderby' => 'post__in',
                                        'numberposts' => 4
                                    ]);
                                ?>

                                    <div class="box-video-top">
                                        <?php
                                        $first_video = array_shift($videos); // Lấy video đầu tiên
                                        if ($first_video):
                                            $link_youtube = get_field('link_youtube', $first_video->ID);
                                            $thumb_url = get_the_post_thumbnail_url($first_video->ID, 'full');
                                            $title = get_the_title($first_video->ID);
                                            $permalink = get_permalink($first_video->ID);
                                        ?>
                                            <div class="video-item-lg">
                                                <div class="box-video">
                                                    <a href="<?= esc_url($link_youtube); ?>" class="popup-youtube">
                                                        <img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($title); ?>" />
                                                    </a>
                                                </div>
                                                <div class="box-description">
                                                    <h3 class="title">
                                                        <a href="<?= esc_url($permalink); ?>" class="box-title"><?= esc_html($title); ?></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (!empty($videos)) : ?>
                                        <div class="box-video-bottom">
                                            <div class="row">
                                                <?php foreach ($videos as $video) :
                                                    $link_youtube = get_field('link_youtube', $video->ID);
                                                    $thumb_url = get_the_post_thumbnail_url($video->ID, 'full');
                                                    $title = get_the_title($video->ID);
                                                    $permalink = get_permalink($video->ID);
                                                ?>
                                                    <div class="col-xl-4 col-12">
                                                        <div class="video-item">
                                                            <div class="box-video">
                                                                <a href="<?= esc_url($link_youtube); ?>" class="popup-youtube">
                                                                    <img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($title); ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="box-description">
                                                                <h3 class="title">
                                                                    <a href="<?= esc_url($permalink); ?>" class="box-title"><?= esc_html($title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                endforeach;
                                                wp_reset_postdata();
                                                ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>


                            <div class="col-xl-5">
                                <?php
                                $related_articles = $section_5['related_articles'] ?? [];

                                if (!empty($related_articles)) :
                                    $related_articles = array_slice($related_articles, 0, 4); // Giới hạn 4 bài

                                    $posts = get_posts([
                                        'post_type' => 'post',
                                        'post__in' => $related_articles,
                                        'orderby' => 'post__in',
                                        'numberposts' => 4
                                    ]);
                                ?>
                                    <div class="related-post">
                                        <div class="row">
                                            <h3 class="related-title">Bài viết liên quan</h3>
                                            <?php foreach ($posts as $post) :
                                                $title = get_the_title($post->ID);
                                                $permalink = get_permalink($post->ID);
                                                $thumb_url = get_the_post_thumbnail_url($post->ID, 'full');
                                                $categories = get_the_category($post->ID);
                                                $first_cat = $categories[0] ?? null;
                                            ?>
                                                <div class="col-md-6 col-xl-12">
                                                    <div class="post-item">
                                                        <div class="thumb-img">
                                                            <a href="<?= esc_url($permalink); ?>">
                                                                <img src="<?= esc_url($thumb_url); ?>" alt="<?= esc_attr($title); ?>" />
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <h3 class="post-title">
                                                                <a href="<?= esc_url($permalink); ?>"><?= esc_html($title); ?></a>
                                                            </h3>
                                                            <?php if ($first_cat): ?>
                                                                <a href="<?= esc_url(get_category_link($first_cat->term_id)); ?>" class="category-name">
                                                                    <?= esc_html($first_cat->name); ?>
                                                                </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>


            <section id="section-5" class="section-hall-of-greatness aos-init aos-animate" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                <div class="container">
                    <?php
                    $section_6 = get_field('section_6') ?? '';
                    if ($section_6):
                        $title = $section_6['title'];
                        $view_all = $section_6['view_all'];
                    ?>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="title-blog">
                                    <h2><?php echo esc_html($title); ?></h2>
                                    <button>
                                        <a href="<?php echo esc_url($view_all); ?>">
                                            <?php _e("Xem tất cả", "xemer_theme") ?> <i class="fa-regular fa-arrow-right"></i>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="hall-owl-slider owl-carousel owl-theme">
                        <?php
                        $students = new WP_Query(array(
                            'post_type' => 'top_student',
                            'posts_per_page' => -1,
                        ));

                        if ($students->have_posts()):
                            while ($students->have_posts()): $students->the_post();
                                $school_name = get_field('school_name');
                                $achievement = get_field('achievement');
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $thumbnail_url_254 = get_the_post_thumbnail_url(get_the_ID());
                        ?>
                                <div class="hall-item">
                                    <div class="hall-image">
                                        <?php if ($thumbnail_url): ?>
                                            <img width="433" height="512" src="<?php echo esc_url($thumbnail_url); ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="hall-content">
                                        <h3><a href="#"><?php the_title(); ?></a></h3>
                                        <p style="font-size: 16px;"><span><?php echo esc_html($school_name); ?></span></p>
                                        <p><?php echo esc_html($achievement); ?></p>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <!-- #content -->
</div>

<?php
get_footer();
