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
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged,
            // 'category_name' => 'tin-tuc-su-kien', // Đổi nếu bạn có slug khác
        );

        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()): ?>
            <?php
            $posts = $query->posts;
            ?>

            <section class="section-1">
                <div class="archive-post">
                    <div class="container">
                        <div class="box-wrapper">
                            <div class="row">
                                <header class="page-header">
                                    <h1 class="page-title"> <?php the_title(); ?></h1>
                                </header>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <!-- Bài 1: Bài lớn -->
                                        <?php if (!empty($posts[0])):
                                            $post = $posts[0];
                                            setup_postdata($post); ?>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="post-item post-lg">
                                                    <div class="post-thumbnail">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail('full'); ?>
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <div class="post-content-title">
                                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                        </div>
                                                        <div class="post-content-description">
                                                            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Bài 2 và 3: Bài nhỏ bên phải -->
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="row">
                                                <?php
                                                for ($i = 1; $i <= 2; $i++):
                                                    if (!empty($posts[$i])):
                                                        $post = $posts[$i];
                                                        setup_postdata($post);
                                                        ?>
                                                        <div class="col-12">
                                                            <div class="post-item post-sm">
                                                                <div class="post-thumbnail">
                                                                    <a href="<?php the_permalink(); ?>">
                                                                        <?php the_post_thumbnail('full'); ?>
                                                                    </a>
                                                                </div>
                                                                <div class="post-content">
                                                                    <div class="post-content-title">
                                                                        <h3><a
                                                                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    endif;
                                                endfor;
                                                ?>
                                            </div>
                                        </div>

                                        <!-- Các bài còn lại: danh sách ngang -->
                                        <?php if (count($posts) > 3): ?>
                                            <div class="article-multiple">
                                                <?php for ($i = 3; $i < count($posts); $i++):
                                                    $post = $posts[$i];
                                                    setup_postdata($post);
                                                    ?>
                                                    <div class="row article-horizontal">
                                                        <div class="col-4">
                                                            <div class="post-thumbnail">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <?php the_post_thumbnail('full'); ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="post-content">
                                                                <div class="post-content-title">
                                                                    <h3><a
                                                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                    </h3>
                                                                </div>
                                                                <div class="post-content-description">
                                                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <span class="border-bottom"></span>
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Panigation -->
                                        <div class="panigation-archive"
                                            style="text-align: center; margin-bottom: 20px; margin-top: 20px">
                                            <div class="paginate_links">
                                                <?php
                                                echo paginate_links(array(
                                                    'total' => $query->max_num_pages,
                                                    'current' => $paged,
                                                    'mid_size' => 2,
                                                    'prev_text' => '«',
                                                    'next_text' => '»',
                                                ));
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Top News -->
                                <div class="col-lg-4">
                                    <div class="related-post">
                                        <h3 class="related-title">Bài viết phổ biến</h3>
                                        <div class="row">
                                            <?php
                                            $latest_posts = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 4,
                                                'orderby' => 'date',
                                                'order' => 'DESC',
                                            ));

                                            if ($latest_posts->have_posts()):
                                                while ($latest_posts->have_posts()):
                                                    $latest_posts->the_post();
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
                                    <div class="right-sidebar">
                                        <div class="row"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();
