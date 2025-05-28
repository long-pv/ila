<?php

/**
 * Template Name: Tin Tức
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

<div id="content" class="site-content">
    <main class="archive-template archive-default news-event">
        <div class="archive-post">

            <?php
            $menu_items = get_field('menu_item', 'option') ?? []; // 'option' là theme setting
            if (!empty($menu_items)): ?>
                <section class="section-menu-category">
                    <div class="container">
                        <div class="list-cate">
                            <ul>
                                <?php foreach ($menu_items as $item):
                                    $link = $item['link'];
                                    if (!empty($link['url']) && !empty($link['title'])):
                                        $url = esc_url($link['url']);
                                        $title = esc_html($link['title']);
                                        $target = isset($link['target']) ? esc_attr($link['target']) : '_self';
                                ?>
                                        <li class="navbar-blog-item">
                                            <a href="<?php echo $url; ?>" target="<?php echo $target; ?>">
                                                <?php echo $title; ?>
                                            </a>
                                        </li>
                                <?php
                                    endif;
                                endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <section class="section-1">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                $banner = get_field('banner');
                                ?>
                                <?php if ($banner): ?>
                                    <header class="page-header" style="background-color: #97CCF2;">
                                        <?php if (!empty($banner['title'])): ?>
                                            <h1 class="page-title"><?php echo esc_html($banner['title']); ?></h1>
                                        <?php endif; ?>

                                        <?php if (!empty($banner['description'])): ?>
                                            <div class="taxonomy-description">
                                                <p><?php echo esc_html($banner['description']); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </header>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'post_type'      => 'post',
                                        'posts_per_page' => 3,
                                        'post_status'    => 'publish',
                                    );
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()):
                                        $count = 0;
                                        while ($query->have_posts()):
                                            $query->the_post();
                                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                            $title = get_the_title();
                                            $excerpt = get_the_excerpt();
                                            $permalink = get_permalink();
                                            $category = get_the_category();
                                            $category_link = get_category_link($category[0]->term_id);
                                            $category_name = $category[0]->name;

                                            if ($count == 0): ?>
                                                <div class="col-lg-8 col-sm-8">
                                                    <div class="post-item post-lg">
                                                        <div class="post-thumbnail">
                                                            <a href="<?php echo esc_url($permalink); ?>">
                                                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>" class="attachment-full size-full wp-post-image" />
                                                            </a>
                                                        </div>
                                                        <div class="post-content">
                                                            <div class="post-content-title">
                                                                <h3><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h3>
                                                            </div>
                                                            <div class="post-archive">
                                                                <span><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a></span>
                                                            </div>
                                                            <div class="post-content-description">
                                                                <p><?php echo esc_html(wp_trim_words($excerpt, 30)); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-4">
                                                    <div class="row">
                                                    <?php else: ?>
                                                        <div class="col-12">
                                                            <div class="post-item post-sm">
                                                                <div class="post-thumbnail">
                                                                    <a href="<?php echo esc_url($permalink); ?>">
                                                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>" class="attachment-full size-full wp-post-image" />
                                                                    </a>
                                                                </div>
                                                                <div class="post-content">
                                                                    <div class="post-content-title">
                                                                        <h3><a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a></h3>
                                                                    </div>
                                                                    <div class="post-archive">
                                                                        <span><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <?php endif;
                                                $count++;
                                            endwhile;
                                            echo '</div></div>'; // close .row and .col-lg-4
                                            wp_reset_postdata();
                                        endif;
                                            ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <?php
                                                    $popular_posts = get_field('popular_posts', 'option') ?? []; // array of post IDs
                                                    $popular_posts = array_slice($popular_posts, 0, 5); // chỉ lấy tối đa 5 bài
                                                    ?>

                                                    <?php if (!empty($popular_posts)): ?>
                                                        <div class="related-post">
                                                            <h3 class="related-title">Bài viết phổ biến</h3>
                                                            <div class="row">
                                                                <?php
                                                                $query = new WP_Query(array(
                                                                    'post_type' => 'post',
                                                                    'post__in' => $popular_posts,
                                                                    'orderby' => 'post__in', // giữ thứ tự từ ACF
                                                                    'posts_per_page' => 5,
                                                                ));

                                                                if ($query->have_posts()):
                                                                    while ($query->have_posts()): $query->the_post();
                                                                ?>
                                                                        <div class="col-12 col-lg-12 col-sm-6">
                                                                            <div class="post-item">
                                                                                <div class="thumb-img">
                                                                                    <a href="<?php the_permalink(); ?>">
                                                                                        <?php the_post_thumbnail('full'); ?>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <h3 class="post-title">
                                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                                    </h3>
                                                                                    <?php
                                                                                    $category = get_the_category();
                                                                                    if (!empty($category)) {
                                                                                        echo '<a class="category-name" href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a>';
                                                                                    }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    endwhile;
                                                                    wp_reset_postdata();
                                                                endif;
                                                                ?>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                </div>
                            </div>
                        </div>
            </section>
            <section class="section-2">
                <div class="container">
                    <div class="box-wrapper">
                        <?php
                        $video = get_field('video');
                        if ($video):
                        ?>
                            <div class="banner-custom">
                                <img width="1440" height="299" class="img-background" style="aspect-ratio: 1400 / 400;object-fit: cover;" src="<?php echo $video['background']; ?>" alt="">
                                <img width="375" height="380" class="img-background-mb" style="aspect-ratio: 500 / 500;object-fit: cover;" src="<?php echo $video['background']; ?>" alt="">

                                <div class="box-content">
                                    <?php if (!empty($video['title'])): ?>
                                        <h2><?php echo $video['title']; ?></h2>
                                    <?php endif; ?>

                                    <?php if (!empty($video['subtitle'])): ?>
                                        <h3><span style="color: #2f4094;"><?php echo $video['subtitle']; ?></span></h3>
                                    <?php endif; ?>

                                    <?php if (!empty($video['description'])): ?>
                                        <p><?php echo $video['description']; ?></p>
                                    <?php endif; ?>

                                    <?php if (!empty($video['link_youtube'])): ?>
                                        <button class="discover">
                                            <a class="open-popup" href="<?php echo $video['link_youtube']; ?>">Xem video</a>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="section-3">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row" style="row-gap: 24px;">
                            <?php
                            $categories = get_field('other_categories_copy'); // Trả về mảng ID của taxonomy 'category'

                            if ($categories && is_array($categories)):
                                foreach ($categories as $category_id):
                                    $category = get_term($category_id, 'category');
                                    $query = new WP_Query([
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'cat' => $category_id,
                                    ]);

                                    if ($query->have_posts()):
                            ?>
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="blog">
                                                <div class="blog-heading">
                                                    <h3 class="blog-archive-name"><?php echo esc_html($category->name); ?></h3>
                                                    <a href="<?php echo esc_url(get_category_link($category_id)); ?>">Xem tất cả <i class="fa-light fa-arrow-right-long"></i></a>
                                                </div>

                                                <?php
                                                $first = true;
                                                while ($query->have_posts()): $query->the_post();
                                                    if ($first):
                                                ?>
                                                        <div class="blog-thumbnail">
                                                            <a href="<?php the_permalink(); ?>">
                                                                <?php the_post_thumbnail('post-thumbnail'); ?>
                                                            </a>
                                                        </div>
                                                        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        <div class="blog-archive">
                                                            <a href="<?php echo esc_url(get_category_link($category_id)); ?>"><?php echo esc_html($category->name); ?></a>
                                                        </div>
                                                        <div class="related-post">
                                                        <?php
                                                        $first = false;
                                                    else:
                                                        ?>
                                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <?php
                                                    endif;
                                                endwhile;
                                                echo '</div>'; // .related-post
                                                    ?>
                                                        </div>
                                            </div>
                                <?php
                                    endif;
                                    wp_reset_postdata();
                                endforeach;
                            endif;
                                ?>

                                        </div>
                        </div>
                    </div>
            </section>
            <section id="section-4" class="section-multimedia">
                <div class="container">
                    <div class="box-wrapper">
                        <?php
                        $multimedia = get_field('multimedia');
                        if ($multimedia):
                            $title = $multimedia['title'];
                            $view_all = $multimedia['view_all'];
                            $videos = $multimedia['video'];
                        ?>
                            <div class="multimedia-main">
                                <div class="multimedia-nav-list">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-8">
                                            <div class="row">
                                                <div class="col-md-4 col-xl-5">
                                                    <div class="tile-multimedia aos-init aos-animate" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                        <h2><a href="<?= $view_all ?>"><?= $title ?></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="multimedia-list list-videos active" data-list="1" data-bg="#cb999a">
                                    <div class="row">
                                        <?php if (!empty($videos)): ?>
                                            <?php
                                            // Video đầu tiên hiển thị lớn bên trái
                                            $first_video = $videos[0];
                                            $video_link = get_permalink($first_video);
                                            $thumbnail = get_the_post_thumbnail_url($first_video, 'full');
                                            $video_title = get_the_title($first_video);
                                            ?>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="video-item video-first">
                                                    <a class="open-popup" href="<?= $video_link ?>">
                                                        <img src="<?= $thumbnail ?>" alt="<?= $video_title ?>">
                                                    </a>
                                                    <div class="video-content">
                                                        <h3><a href="<?= $video_link ?>"><?= $video_title ?></a></h3>
                                                    </div>
                                                    <div class="video-archive">
                                                        <span><a href="<?= $view_all ?>"><?= $title ?></a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Các video còn lại chia 2/cột -->
                                            <div class="col-md-12 col-xl-6">
                                                <?php
                                                $rest_videos = array_slice($videos, 1);
                                                $video_chunks = array_chunk($rest_videos, 2);
                                                foreach ($video_chunks as $chunk):
                                                ?>
                                                    <div class="row">
                                                        <?php foreach ($chunk as $video_id):
                                                            $video_link = get_permalink($video_id);
                                                            $thumbnail = get_the_post_thumbnail_url($video_id, 'full');
                                                            $video_title = get_the_title($video_id);
                                                        ?>
                                                            <div class="col-md-6 col-xl-6">
                                                                <div class="video-item">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-12 col-md-12">
                                                                            <a class="open-popup" href="<?= $video_link ?>">
                                                                                <img src="<?= $thumbnail ?>" alt="<?= $video_title ?>">
                                                                            </a>
                                                                            <div class="video-content">
                                                                                <h3><a href="<?= $video_link ?>"><?= $video_title ?></a></h3>
                                                                            </div>
                                                                            <div class="video-archive">
                                                                                <span><a href="<?= $view_all ?>"><?= $title ?></a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </section>
            <section id="section-5" class="section-hall-of-greatness">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <?php
                                $excellent_face = get_field('excellent_face');
                                if ($excellent_face):
                                ?>
                                    <div class="title-blog">
                                        <h2><?php echo $excellent_face['title']; ?></h2>
                                        <?php if (!empty($excellent_face['view_all'])): ?>
                                            <button>
                                                <a href="<?php echo $excellent_face['view_all']; ?>">
                                                    Xem tất cả <i class="fa-regular fa-arrow-right"></i>
                                                </a>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="hall-owl-slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
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
                                    ?>
                                            <div class="owl-item">
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
                                            </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- .wrap -->
    </main>
</div>

<?php
get_footer();
