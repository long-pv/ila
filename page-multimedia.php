<?php

/**
 * Template Name: Multimedia (video)
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
    <main class="archive-template archive-video">
        <div class="archive-post">
            <section class="section-menu-category">
                <div class="container">
                    <div class="list-cate">
                        <ul>
                            <li class="navbar-blog-item">
                                <a href="https://ila.edu.vn/lam-ban-cung-con">Làm bạn cùng con</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://ila.edu.vn/bi-kip-hoc-tieng-anh">Bí kíp học tiếng Anh</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://ila.edu.vn/guong-mat-xuat-sac">Gương mặt xuất sắc</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://ila.edu.vn/tin-tuc-su-kien">Tin tức sự kiện</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://ila.edu.vn/video">Multimedia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--  -->
            <?php
            // 1. Xác định trang hiện tại
            $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

            // 2. Thiết lập WP_Query
            $args = [
                'post_type' => 'video_media',
                'posts_per_page' => 9,      // tổng số posts mỗi trang (1 đầu + 8 dưới)
                'paged' => $paged,
            ];
            $video_query = new WP_Query($args);

            if ($video_query->have_posts()): ?>

                <section class="video-main">
                    <div class="container">

                        <div class="row">
                            <header class="page-header">
                                <h1 class="page-title">MULTIMEDIA</h1>
                            </header>
                        </div>

                        <?php
                        // --- 1) Video đầu tiên ---
                        $video_query->the_post();
                        // Lấy iframe từ ACF field "link_video"
                        $iframe = get_field('link_video');

                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                        $author = get_the_author();
                        $date = get_the_date('l, d-m-Y, H:i (G\MT+7)');
                        ?>

                        <div class="video-first-play">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="video-iframe">
                                        <?php
                                        // In thẳng iframe được lưu trong field (đã tin tưởng)
                                        echo $iframe;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="video-content">
                                        <div class="video-title">
                                            <h2><a href="<?php the_permalink(); ?>"><?php echo esc_html($title); ?></a>
                                            </h2>
                                        </div>
                                        <div class="video-content_desc">
                                            <p><?php echo esc_html($excerpt); ?></p>
                                        </div>
                                        <div class="video-author">
                                            <p><?php echo esc_html($author); ?></p>
                                        </div>
                                        <div class="video-time-publish">
                                            <p>
                                                <a
                                                    href="<?php echo esc_url(get_post_type_archive_link('video_media')); ?>">MULTIMEDIA</a>
                                                <span><?php echo esc_html($date); ?></span>
                                            </p>
                                        </div>
                                        <div class="video-share-social">
                                            <?php if (function_exists('a2a_share_save_widget')) {
                                                // nếu bạn dùng AddToAny
                                                a2a_share_save_widget();
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        // --- 2) Các video còn lại ---
                        if ($video_query->have_posts()): ?>
                            <div class="row">
                                <?php
                                $col_count = 0;
                                while ($video_query->have_posts()):
                                    $video_query->the_post();
                                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $vid_title = get_the_title();
                                    $permalink = get_permalink();
                                    // duration lưu trong custom field "duration" nếu có
                                    $duration = get_field('duration') ?: '';
                                    ?>
                                    <div class="video-list col-6 col-sm-3 col-md-4 col-lg-3">
                                        <article class="video-item">
                                            <?php if ($thumb_url): ?>
                                                <div class="video-thumb">
                                                    <a href="<?php echo esc_url($permalink); ?>">
                                                        <img src="<?php echo esc_url($thumb_url); ?>"
                                                            alt="<?php echo esc_attr($vid_title); ?>" loading="lazy">
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="video-title">
                                                <h3>
                                                    <a href="<?php echo esc_url($permalink); ?>">
                                                        <?php echo esc_html($vid_title); ?>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="video-time-cate">
                                                <p>
                                                    <?php if ($duration): ?>
                                                        <span class="icon-time">
                                                            <i class="fa-solid fa-timer"></i>
                                                            <?php echo esc_html($duration); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <span class="category-link">
                                                        <a href="<?php echo esc_url(get_post_type_archive_link('video_media')); ?>">
                                                            MULTIMEDIA
                                                        </a>
                                                    </span>
                                                </p>
                                            </div>
                                        </article>
                                    </div>
                                    <?php
                                endwhile;
                                ?>
                            </div>
                        <?php endif; // end if have_posts() for remaining ?>

                        <?php
                        // --- 3) Phân trang ---
                        echo '<div class="panigation-archive text-center">';
                        echo paginate_links([
                            'total' => $video_query->max_num_pages,
                            'current' => $paged,
                            'mid_size' => 1,
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        ]);
                        echo '</div>';

                        // Reset lại postdata
                        wp_reset_postdata();
                        ?>

                    </div><!-- .container -->
                </section>

            <?php endif; // end if main query have_posts() ?>
        </div>
        <!-- .wrap -->
    </main>
</div>
<!-- #content -->

<?php
get_footer();
