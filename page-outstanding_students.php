<?php

/**
 * Template Name: Gương mặt xuất sắc
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

$lang = '';
if (LANG == 'en') {
    $lang = '_en';
}
?>

<div id="content" class="site-content">
    <main class="archive-template archive-hall-of-greatness">
        <div class="archive-post">
            <?php
            $menu_items = get_field('menu_item' . $lang, 'option') ?? []; // 'option' là theme setting
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

            <!-- Banner Start -->
            <?php
            $section_2 = get_field('banner_section') ?? [];
            // 
            $title = isset($section_2['title']) ? $section_2['title'] : '';
            $content = isset($section_2['content']) ? wp_kses_post($section_2['content']) : '';

            $image_url = isset($section_2['image']['url']) ? esc_url($section_2['image']['url']) : '';
            $image_alt = isset($section_2['image']['alt']) ? esc_attr($section_2['image']['alt']) : '';
            ?>

            <?php if ($title || $content || $image_url): ?>
                <section class="section-1 py-0">
                    <div class="container">
                        <div class="box-wrapper">
                            <div class="box-main">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <div class="page-header w-100">
                                            <?php if ($title): ?>
                                                <h1 class="page-title"><?php echo $title; ?></h1>
                                            <?php endif; ?>
                                            <?php if ($content): ?>
                                                <div class="taxonomy-description">
                                                    <?php echo $content; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <?php if ($image_url): ?>
                                            <div class="box-thumb">
                                                <img width="485" height="283" src="<?php echo $image_url; ?>"
                                                    alt="<?php echo $image_alt; ?>" loading="lazy" decoding="async" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!-- Banner End -->

            <!--  -->
            <?php
            $outstanding_section = get_field('outstanding_section') ?? [];

            $outstanding_title = isset($outstanding_section['title']) ? $outstanding_section['title'] : '';
            $outstanding_posts = isset($outstanding_section['outstanding_post']) && is_array($outstanding_section['outstanding_post'])
                ? $outstanding_section['outstanding_post']
                : [];
            ?>


            <section id="the-stories" class="section-the-stories">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <?php if ($outstanding_title): ?>
                                    <div class="title-blog">
                                        <h2><?php echo $outstanding_title; ?></h2>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (!empty($outstanding_posts)): ?>
                            <div class="row" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                <?php foreach ($outstanding_posts as $post): ?>
                                    <?php
                                    $post_id = $post->ID;
                                    $permalink = get_permalink($post_id);
                                    $title = get_the_title($post_id);
                                    $thumbnail_url = get_the_post_thumbnail_url($post_id, 'medium_large');
                                    $thumbnail_alt = get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
                                    ?>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="blog-main">
                                            <?php if ($thumbnail_url): ?>
                                                <div class="blog-thumbnail">
                                                    <a href="<?php echo esc_url($permalink); ?>">
                                                        <img src="<?php echo esc_url($thumbnail_url); ?>"
                                                            alt="<?php echo esc_attr($thumbnail_alt ?: $title); ?>" loading="lazy"
                                                            decoding="async"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <div class="blog-content">
                                                <div class="blog-content-title">
                                                    <h3>
                                                        <a href="<?php echo esc_url($permalink); ?>">
                                                            <?php echo esc_html($title); ?>
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </section>
            <!--  -->

            <!-- Top Student Start -->
            <?php
            $top_student_section = get_field('top_student') ?? [];
            $top_student_title = isset($top_student_section['title']) ? $top_student_section['title'] : '';
            $top_student_posts = isset($top_student_section['top_student']) && is_array($top_student_section['top_student'])
                ? $top_student_section['top_student']
                : [];
            ?>

            <section id="section-5" class="section-hall-of-greatness">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <?php if ($top_student_title): ?>
                                    <div class="title-blog">
                                        <h2><?php echo $top_student_title; ?></h2>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if (!empty($top_student_posts)): ?>
                            <div class="hall-owl-slider owl-carousel owl-theme">
                                <?php foreach ($top_student_posts as $post): ?>
                                    <?php
                                    setup_postdata($post);
                                    $post_id = $post->ID;
                                    $permalink = get_permalink($post_id);
                                    $title = get_the_title($post_id);
                                    $thumbnail_url = get_the_post_thumbnail_url($post_id, 'medium_large');
                                    $thumbnail_alt = get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
                                    //
                                    $student_center = get_field('school_name', $post_id);
                                    $student_achievement = get_field('achievement', $post_id);
                                    ?>
                                    <div class="hall-item">
                                        <?php if ($thumbnail_url): ?>
                                            <div class="hall-image">
                                                <img src="<?php echo esc_url($thumbnail_url); ?>"
                                                    alt="<?php echo esc_attr($thumbnail_alt ?: $title); ?>" width="448" height="530"
                                                    loading="lazy" decoding="async"
                                                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                            </div>
                                        <?php endif; ?>

                                        <div class="hall-content">
                                            <h3>
                                                <a href="<?php echo esc_url($permalink); ?>">
                                                    <?php echo esc_html($title); ?>
                                                </a>
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
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!-- Top Student Start -->

            <!--  -->
            <section id="banners-archive" class="section-banners-archive">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="box-banner">
                            <div class="banner-content">
                                <a href="">
                                    <img src="" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Post -->
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = [
                'post_type' => 'student_post',
                'posts_per_page' => 6, // số bài trên 1 trang
                'paged' => $paged,
            ];

            $query = new WP_Query($args);
            ?>

            <section id="blog-main" class="section-blog">
                <div class="container">
                    <div class="box-wrapper">
                        <?php if ($query->have_posts()): ?>
                            <div class="row">
                                <?php while ($query->have_posts()):
                                    $query->the_post(); ?>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="box-main">
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="box-thumb">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('medium_large', [
                                                            'alt' => esc_attr(get_the_title()),
                                                            'decoding' => 'async',
                                                            'loading' => 'lazy',
                                                        ]); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="box-title">
                                                <h3>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                            <div class="panigation-archive"
                                style="text-align: center; margin-bottom: 20px; margin-top: 20px">
                                <div class="paginate_links">
                                    <?php
                                    echo paginate_links([
                                        'total' => $query->max_num_pages,
                                        'current' => $paged,
                                        'mid_size' => 1,
                                        'prev_text' => '«',
                                        'next_text' => '»',
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                            <p><?php esc_html_e('Không có bài viết nào.', 'your-text-domain'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!--  -->
        </div>
        <!-- .wrap -->
    </main>
</div>
<!-- #content -->

<?php
get_footer();
