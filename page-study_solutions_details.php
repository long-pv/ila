<?php

/**
 * Template Name: Chi tiết giải pháp du học
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

<div id="page">
    <div id="content" class="site-content">


        <?php if (have_rows('banner')) : ?>
            <?php while (have_rows('banner')) : the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $certification = get_sub_field('certification');
                $certificate_content = get_sub_field('certificate_content');
                $background = get_sub_field('background');
            ?>
                <section class="section-main-product" id="section-1" style="background-color: #1b3f94">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-12">
                            <div class="image-product">
                                <?php if ($background) : ?>
                                    <img width="1192" height="660"
                                        src="<?php echo esc_url($background); ?>"
                                        alt="<?php echo esc_attr($title); ?>">
                                    <noscript>
                                        <img width="1192" height="660"
                                            src="<?php echo esc_url($background); ?>"
                                            alt="<?php echo esc_attr($title); ?>">
                                    </noscript>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 col-12">
                            <div class="content-main-product">
                                <div class="content-product">
                                    <?php if ($title) : ?>
                                        <h1><?php echo esc_html($title); ?></h1>
                                    <?php endif; ?>

                                    <?php if ($description) : ?>
                                        <p><?php echo esc_html($description); ?></p>
                                    <?php endif; ?>

                                    <div class="intro-airc">
                                        <?php if ($certificate_content) : ?>
                                            <div class="content-airc">
                                                <?php echo $certificate_content; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($certification) : ?>
                                            <div class="logo-airc">
                                                <img width="115" height="115"
                                                    src="<?php echo esc_url($certification); ?>"
                                                    alt="Certification">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Họa tiết cố định -->
                            <div class="img-pattern">
                                <img width="1794" height="603"
                                    src="https://iladuhoc.edu.vn/wp-content/uploads/2024/04/background-pattern-product-list-new.png"
                                    alt="background pattern product list"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>



        <section class="section-core-value" id="section-2">
            <div class="container">
                <div class="content-main-value">
                    <img width="64" height="65" class="pattern pattern-1"
                        src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-16.png"
                        alt="background pattern 16">
                    <h2>
                        <span style="color: #1b3f94;">
                            <?php the_field('core_value_title'); ?>
                        </span>
                    </h2>
                    <p><?php the_field('core_value_description'); ?></p>
                </div>
            </div>
            <div class="list-core-value">
                <img width="1909" height="452" class="pattern pattern-2"
                    src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-11.png"
                    alt="background pattern 11">
                <img width="214" height="194" class="pattern pattern-3"
                    src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-12.png"
                    alt="background pattern 12">
                <div class="container">
                    <div class="list-core-first" style="background-color: #ffee65">
                        <img width="1101" height="508" class="pattern pattern-4"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-10.png"
                            alt="background pattern 10">
                        <div class="core-main">
                            <?php if (have_rows('core_value_list_value')) : ?>
                                <?php while (have_rows('core_value_list_value')) : the_row(); ?>
                                    <div class="core-item">
                                        <div class="core-item-main">
                                            <div class="core-icon">
                                                <?php $icon = get_sub_field('icon'); ?>
                                                <?php if ($icon): ?>
                                                    <img width="72" height="77" src="<?php echo esc_url($icon); ?>" alt="Icon">
                                                <?php endif; ?>
                                            </div>
                                            <div class="core-content">
                                                <p><?php the_sub_field('title'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="content-core-main-first">
                            <div class="content-core">
                                <?php the_field('core_value_content'); ?>
                            </div>
                            <div class="content-thumb">
                                <?php $image1 = get_field('core_value_image_1'); ?>
                                <?php if ($image1): ?>
                                    <img width="569" height="451" src="<?php echo esc_url($image1); ?>" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="list-core-last">
                        <img width="214" height="194" class="pattern pattern-5"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-13.png"
                            alt="background pattern 13">
                        <img width="86" height="88" class="pattern pattern-6"
                            src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-15.png"
                            alt="background pattern 15">
                        <div class="content-thumb">
                            <?php $image2 = get_field('core_value_image_2'); ?>
                            <?php if ($image2): ?>
                                <img width="618" height="465" src="<?php echo esc_url($image2); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="content-core">
                            <p><?php the_field('core_value_description_2'); ?></p>
                            <?php if (have_rows('core_value_todo_list')) : ?>
                                <?php while (have_rows('core_value_todo_list')) : the_row(); ?>
                                    <p>
                                        <img decoding="async" class="size-full wp-image-842 alignleft"
                                            src="https://iladuhoc.edu.vn/wp-content/uploads/2024/05/icon-check.png"
                                            alt="" width="30" height="30" />
                                        <?php the_sub_field('title'); ?>
                                    </p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <img width="235" height="204" class="pattern pattern-7"
                    src="https://iladuhoc.edu.vn/wp-content/themes/fptheme/assets/images/background-pattern-14.png"
                    alt="background pattern 14">
            </div>
        </section>


        <?php
        $cta = get_field('cta');
        if ($cta):
        ?>
            <section class="section-cta-product" id="section-3">
                <div class="cta-product-image">
                    <?php if (!empty($cta['background'])): ?>
                        <img width="1910" height="433"
                            src="<?php echo esc_url($cta['background']); ?>"
                            alt="Banner CTA"
                            data-lazy-src="<?php echo esc_url($cta['background']); ?>"
                            data-ll-status="loaded"
                            class="entered lazyloaded">
                        <noscript>
                            <img width="1910" height="433"
                                src="<?php echo esc_url($cta['background']); ?>"
                                alt="Banner CTA">
                        </noscript>
                    <?php endif; ?>
                </div>
                <div class="cta-content-product">
                    <?php if (!empty($cta['title'])): ?>
                        <div class="cta-desc">
                            <?php echo esc_html($cta['title']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($cta['link'])): ?>
                        <div class="cta-button">
                            <button class="btn-register">
                                <a href="<?php echo esc_url($cta['link']); ?>">Đăng ký ngay</a>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>


        <?php
        $faqs = get_field('faqs');
        if ($faqs):
            $faq_title = $faqs['title'];
            $faq_image = $faqs['image'];
            $faq_list = $faqs['list'];
        ?>
            <section class="section-faq-product" id="section-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="faq-product-content-main">
                                <div class="faq-product-title">
                                    <h2><?php echo nl2br(esc_html($faq_title)); ?></h2>
                                </div>
                                <div class="faq-product-image">
                                    <?php if (!empty($faq_image)): ?>
                                        <img width="463" height="301" src="<?php echo esc_url($faq_image); ?>" alt="FAQ" data-lazy-src="<?php echo esc_url($faq_image); ?>" data-ll-status="loaded" class="entered lazyloaded">
                                        <noscript><img width="463" height="301" src="<?php echo esc_url($faq_image); ?>" alt="FAQ"></noscript>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-faq-product">
                                <?php if (!empty($faq_list)): ?>
                                    <?php foreach ($faq_list as $index => $item): ?>
                                        <?php
                                        $item_title = $item['title'];
                                        $item_content = $item['content'];
                                        $is_active = ($index === 0) ? 'active' : '';
                                        $icon_class = ($index === 0) ? 'fa-chevron-up' : 'fa-chevron-down';
                                        $style = ($index === 0) ? 'style="display: block;"' : '';
                                        ?>
                                        <div class="faq-item <?php echo $is_active; ?>">
                                            <div class="faq-question">
                                                <i class="fa-solid <?php echo $icon_class; ?>"></i>
                                                <h3><?php echo esc_html($item_title); ?></h3>
                                            </div>
                                            <div class="faq-answer" <?php echo $style; ?>>
                                                <?php echo nl2br(esc_html($item_content)); ?>
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


        <section class="section-news" id="section-5">
            <div class="container">
                <div class="news-title">
                    <h2>TIPS DU HỌC</h2>
                    <div class="news-button">
                        <a href="<?php echo get_post_type_archive_link('study_abroad_tips'); ?>">
                            Xem tất cả <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="row news-listing">
                    <?php
                    $args = array(
                        'post_type' => 'study_abroad_tips',
                        'posts_per_page' => 5,
                    );
                    $loop = new WP_Query($args);
                    $index = 0;
                    ?>

                    <?php if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php $index++; ?>

                            <?php if ($index === 1) : ?>
                                <div class="col-xl-6 col-md-6">
                                    <div class="blog-main blog-first">
                                        <div class="blog-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-content-title">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <div class="blog-archive arrow-before">
                                                <span><a href="<?php echo get_post_type_archive_link('study_abroad_tips'); ?>">Tips du học</a></span>
                                            </div>
                                            <div class="blog-content-description">
                                                <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="col-xl-12">
                                        <div class="row">
                                        <?php elseif ($index > 1) : ?>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="blog-main">
                                                    <div class="blog-thumbnail">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-content-title">
                                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        </div>
                                                        <div class="blog-archive arrow-before">
                                                            <span><a href="<?php echo get_post_type_archive_link('study_abroad_tips'); ?>">Tips du học</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                        </div> <!-- .row -->
                                    </div> <!-- .col-xl-12 -->
                                </div> <!-- .col-xl-6 -->
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                </div>
            </div>
        </section>

    </div>


</div><!-- #content -->

<?php
get_footer();
