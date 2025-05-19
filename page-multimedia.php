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
                                <a href="https://iladuhoc.edu.vn/hoi-thao-su-kien">Hội thảo sự kiện</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://iladuhoc.edu.vn/tin-tuc">Tin tức</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://iladuhoc.edu.vn/tips-du-hoc">Tips du học</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://iladuhoc.edu.vn/xu-huong-nghe-nghiep-du-hoc">Xu hướng nghề nghiệp &amp; du học</a>
                            </li>

                            <li class="navbar-blog-item">
                                <a href="https://iladuhoc.edu.vn/video">Multimedia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="video-main">
                <div class="container">
                    <div class="row">
                        <header class="page-header w-100">
                            <h1 class="page-title">Multimedia</h1>
                        </header>
                    </div>

                    <?php
                    $args = array(
                        'post_type' => 'video_media',
                        'posts_per_page' => -1
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        $first = true;
                        while ($query->have_posts()) : $query->the_post();

                            $video_url = get_field('link_video');
                            $video_duration = get_field('video_duration');
                            $video_author = get_field('author');
                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $permalink = get_permalink();
                            $title = get_the_title();
                            $excerpt = get_the_excerpt();
                            $published = get_the_date('l, d-m-Y, H:i');
                            $category_link = get_post_type_archive_link('video_media');
                    ?>

                            <?php if ($first) : $first = false; ?>
                                <div class="video-first-play">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-8 col-xl-8">
                                            <div class="video-iframe">
                                                <iframe id="player-yt" data-url="https://www.youtube.com/watch?v=9MO7Qn9BEEA" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Ngày hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học" width="640" height="360" src="https://www.youtube.com/embed/9MO7Qn9BEEA?autoplay=0&amp;controls=1&amp;mute=1&amp;rel=0&amp;showinfo=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Filaduhoc.edu.vn&amp;widgetid=1&amp;forigin=https%3A%2F%2Filaduhoc.edu.vn%2Fvideo&amp;aoriginsup=1&amp;gporigin=https%3A%2F%2Filaduhoc.edu.vn%2Fvideo&amp;vf=6" data-gtm-yt-inspected-9="true"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 col-xl-4">
                                            <div class="video-content">
                                                <div class="video-title">
                                                    <h2><a href="<?php echo esc_url($permalink); ?>" target="_blank"><?php echo esc_html($title); ?></a></h2>
                                                </div>
                                                <div class="video-content_desc">
                                                    <?php the_content(); ?>
                                                </div>
                                                <div class="video-author">
                                                    <p><?php echo esc_html($video_author); ?></p>
                                                </div>
                                                <div class="video-time-publish">
                                                    <p><a href="<?php echo esc_url($category_link); ?>">Multimedia</a><span><?php echo esc_html($published); ?> (GTM+7)</span></p>
                                                </div>
                                                <div class="video-share-social">
                                                    <section id="a2a_share_save_widget-2" class="widget widget_a2a_share_save_widget">
                                                        <div class="a2a_kit a2a_kit_size_20 addtoany_list" style="line-height: 20px;">
                                                            <a class="a2a_button_facebook" href="/#facebook" title="Facebook" rel="nofollow noopener" target="_blank"><span class="a2a_label">Facebook</span></a>
                                                            <a class="a2a_button_twitter" href="/#twitter" title="Twitter" rel="nofollow noopener" target="_blank"><span class="a2a_label">Twitter</span></a>
                                                            <a class="a2a_button_copy_link" href="/#copy_link" title="Copy Link" rel="nofollow noopener" target="_blank"><span class="a2a_label">Copy Link</span></a>
                                                            <a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"><span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Chia sẻ</span></a>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                <?php else : ?>
                                    <div class="video-list col-6 col-md-4 col-lg-3">
                                        <div class="video-item">
                                            <div class="video-thumb">
                                                <a href="<?php echo esc_url($video_url); ?>" target="_blank">
                                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                                                </a>
                                            </div>
                                            <div class="video-title">
                                                <h3>
                                                    <a href="<?php echo esc_url($video_url); ?>" target="_blank"><?php echo esc_html($title); ?></a>
                                                </h3>
                                            </div>
                                            <div class="video-time-cate">
                                                <p>
                                                    <span class="icon-time"><i class="fa-solid fa-timer"></i> <?php echo esc_html($video_duration); ?></span>
                                                    <span class="category-link"><a href="<?php echo esc_url($category_link); ?>">Multimedia</a></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>
                                </div> <!-- end .row -->
                            <?php endif;
                        wp_reset_postdata(); ?>
                </div>
            </section>



        </div><!-- .wrap -->
    </main>
</div>
<!-- #content -->


<style>
    /* Responsive iframe container */
    .video-iframe {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
    }

    /* Responsive iframe */
    .video-iframe iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<?php
get_footer();
