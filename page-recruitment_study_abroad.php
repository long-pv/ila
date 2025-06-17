<?php

/**
 * Template Name: Tư vấn du học
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
<div class="page-id-4598">
    <div class="site-content-contain pt-0">
        <div id="content" class="site-content">
            <main class="page-course-ola-ielts">

                <?php
                $banner = get_field('banner');
                if (!empty($banner)) :
                    $thumbnail = $banner['thumbnail'] ?? '';
                    $title = $banner['title'] ?? '';
                    $sub_title = $banner['sub_title'] ?? '';
                    $content = $banner['content'] ?? '';
                    $url = $banner['url'] ?? '';
                    $background = $banner['background'] ?? '';
                ?>
                    <section class="section-2">
                        <?php if ($background): ?>
                            <img width="1920" height="1050" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($background); ?>" alt="banner background" />
                        <?php endif; ?>
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <?php if ($thumbnail): ?>
                                        <p><img decoding="async" class="size-full alignleft" src="<?php echo esc_url($thumbnail); ?>" alt="thumbnail" width="150" height="90" /></p>
                                    <?php endif; ?>

                                    <?php if ($title): ?>
                                        <h1><span style="color: #ffffff"><strong><?php echo esc_html($title); ?></strong></span></h1>
                                    <?php endif; ?>

                                    <?php if ($sub_title): ?>
                                        <h2 style="text-align: left">
                                            <span style="color: #ffffff"><?php echo nl2br(esc_html($sub_title)); ?></span>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if ($content): ?>
                                        <div style="color: #ffffff"><?php echo wp_kses_post($content); ?></div>
                                    <?php endif; ?>

                                    <?php if ($url): ?>
                                        <p>
                                            <button class="discover">
                                                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener"> <?php _e("Xem thêm", "xemer_theme"); ?> </a>
                                            </button>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>


                <?php
                $statistical = get_field('statistical');
                if ($statistical):
                    $bg = $statistical['background'];
                    $section_title = $statistical['title'];
                    $items = $statistical['list'];
                ?>
                    <section class="section-3">
                        <?php if ($bg): ?>
                            <img width="1920" height="1278" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($bg); ?>" alt="<?php echo esc_attr($section_title); ?>" />
                        <?php endif; ?>
                        <div class="banner-content">
                            <div class="container">
                                <div class="banner-content-main text-dark" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                    <?php if ($section_title): ?>
                                        <h2><b><?php echo esc_html($section_title); ?></b></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section-4">
                        <div class="box-main">
                            <div class="container">
                                <div class="box-main_top">
                                    <div class="row justify-content-center list-5-column">
                                        <?php if (!empty($items)): ?>
                                            <?php foreach ($items as $item):
                                                $item_title = $item['title'];
                                                $item_description = $item['description'];
                                            ?>
                                                <div class="col-md-6 col-lg-4 col-xl-4">
                                                    <div class="box-item box-item-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" style="background: #a3b8bf">
                                                        <div class="box-content">
                                                            <h2>
                                                                <span style="font-size: 20pt; color: #ffffff"><b><?php echo esc_html($item_title); ?></b></span>
                                                            </h2>
                                                            <p><span style="font-weight: 400; font-size: 16pt"><?php echo nl2br(esc_html($item_description)); ?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>


                <?php if (have_rows('process')): ?>
                    <?php foreach (get_field('process') as $index => $item): ?>
                        <?php if ($index == 1): // section-6 layout 
                        ?>
                            <section class="section-6">
                                <div class="container">
                                    <div class="box-course-update-2">
                                        <?php if (!empty($item['image'])): ?>
                                            <img width="1920" height="938" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                                        <?php endif; ?>
                                        <div class="banner-content">
                                            <div class="container">
                                                <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                    <?php if (!empty($item['title'])): ?>
                                                        <h2><b><?php echo esc_html($item['title']); ?></b></h2>
                                                    <?php endif; ?>
                                                    <?php
                                                    // Nếu content có dạng <ul><li>...</li></ul> thì in thẳng, còn không thì wrap <p>
                                                    echo wp_kses_post($item['content']);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php else: // section-5 layout 
                        ?>
                            <section class="section-5<?php echo $index === 2 ? ' clone' : ''; ?>">
                                <div class="container">
                                    <div class="box-course-background" style="background: <?php echo $index === 0 ? '#a1aea5' : '#c1afa2'; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="banner-content">
                                                    <div class="banner-content-main" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                        <?php if (!empty($item['title'])): ?>
                                                            <h2><b><?php echo esc_html($item['title']); ?></b></h2>
                                                        <?php endif; ?>
                                                        <?php if (!empty($item['content'])): ?>
                                                            <div><?php echo wp_kses_post($item['content']); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (!empty($item['image'])): ?>
                                                    <img width="616" height="410" class="img-background" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>


                <?php
                $news = get_field('news'); // Lấy group news

                if ($news):
                ?>
                    <section class="section-8 section-gallery-video">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-blog" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                        <div class="title-blog">
                                            <h2><?php echo esc_html($news['title']); ?></h2>
                                            <button>
                                                <a href="<?php echo esc_url($news['view_all']); ?>"><?php _e(" Xem tất cả", "xemer_theme"); ?> <i class="fa-regular fa-arrow-right"></i></a>
                                            </button>
                                        </div>
                                        <span class="quote-heading"><?php echo nl2br(esc_html($news['description'])); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="box-video-top">
                                        <div class="video-item-lg">
                                            <div class="box-video">
                                                <?php
                                                // Lấy post_video ID, hiện video thumbnail + link video (ví dụ youtube)
                                                $video_id = $news['post_video'];
                                                if ($video_id) {
                                                    $video_url = get_permalink($video_id);
                                                    $thumbnail = get_the_post_thumbnail_url($video_id, 'large');
                                                ?>
                                                    <a href="<?php echo esc_url($video_url); ?>" class="popup-youtube">
                                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="" />
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <div class="box-description">
                                                <?php if ($video_id): ?>
                                                    <h3 class="title">
                                                        <a href="<?php echo esc_url(get_permalink($video_id)); ?>" class="box-title"><?php echo get_the_title($video_id); ?></a>
                                                    </h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-video-bottom">
                                        <div class="row">
                                            <?php
                                            // Lặp article_below - max 3 bài
                                            if (!empty($news['article_below'])):
                                                foreach ($news['article_below'] as $post_id):
                                                    $thumb = get_the_post_thumbnail_url($post_id, 'large');
                                                    $title = get_the_title($post_id);
                                                    $link = 'https://www.youtube.com/watch?v=90NMZmXdAT8';
                                            ?>
                                                    <div class="col-xl-4 col-12">
                                                        <div class="video-item">
                                                            <div class="box-video">
                                                                <a href="<?php echo esc_url($link); ?>" class="box-thumb">
                                                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="box-description">
                                                                <h3 class="title">
                                                                    <a href="<?php echo esc_url($link); ?>" class="box-title"><?php echo esc_html($title); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-5">
                                    <div class="related-post">
                                        <div class="row">
                                            <h3 class="related-title"> <?php _e("Bài viết liên quan", "xemer_theme"); ?> </h3>
                                            <?php
                                            // Lặp related_articles - max 4 bài
                                            if (!empty($news['related_articles'])):
                                                foreach ($news['related_articles'] as $post_id):
                                                    $thumb = get_the_post_thumbnail_url($post_id, 'large');
                                                    $title = get_the_title($post_id);
                                                    $link = get_permalink($post_id);
                                            ?>
                                                    <div class="col-md-6 col-xl-12">
                                                        <div class="post-item">
                                                            <div class="thumb-img">
                                                                <a href="<?php echo esc_url($link); ?>">
                                                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" />
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
                                                                <?php
                                                                // Lấy taxonomy category của post
                                                                $categories = get_the_category($post_id);
                                                                if (!empty($categories)):
                                                                ?>
                                                                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="category-name"><?php echo esc_html($categories[0]->name); ?></a>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                <?php endif; ?>

            </main>
        </div>
        <!-- #content -->
    </div>
</div>

<?php
get_footer();
