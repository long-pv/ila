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
                        <div class="multimedia-main">
                            <div class="multimedia-nav-list">
                                <div class="row">
                                    <div class="col-md-12 col-xl-8">
                                        <div class="row">
                                            <div class="col-md-4 col-xl-5">
                                                <div class="tile-multimedia aos-init aos-animate" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                                                    <h2><a href="https://ila.edu.vn/video">MULTIMEDIA</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="multimedia-list list-videos active" data-list="1" data-bg="#cb999a">
                                <div class="row">
                                    <div class="col-md-12 col-xl-6">
                                        <div class="video-item video-first">
                                            <a class="open-popup" href="https://www.youtube.com/watch?v=k_xKtmaHY_0">
                                                <img width="885" height="590" src="https://ila.edu.vn/wp-content/uploads/2025/04/ila-khai-truong-ila-thich-quang-duc-nha-trang-website-e1745814336689.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Khai trương ILA Thích Quảng Đức - Nha Trang" decoding="async" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"> </a>
                                            <div class="video-content">
                                                <h3>
                                                    <a href="https://ila.edu.vn/khai-truong-ila-thich-quang-duc-nha-trang">Khai trương ILA Thích Quảng Đức, trung tâm 73 trên toàn quốc</a>
                                                </h3>
                                            </div>
                                            <div class="video-archive">
                                                <span>
                                                    <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-6">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-6">
                                                <div class="video-item">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-12 col-md-12">
                                                            <a class="open-popup" href="https://www.youtube.com/watch?v=EsDi3rUX3RU">
                                                                <img width="885" height="590" src="https://ila.edu.vn/wp-content/uploads/2025/04/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-e1744590456188.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="ILA Bà Rịa – Vũng Tàu đã tổ chức Lễ trao học bổng và chứng chỉ Cambridge 2025." decoding="async" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"> </a>
                                                            <div class="video-content">
                                                                <h3>
                                                                    <a href="https://ila.edu.vn/ila-ba-ria-vung-tau-vinh-danh-200-hoc-sinh-dat-chung-chi-cambridge-va-trao-100-suat-hoc-bong">ILA Bà Rịa – Vũng Tàu vinh danh 200 học sinh đạt chứng chỉ Cambridge và trao 100 suất học bổng</a>
                                                                </h3>
                                                            </div>
                                                            <div class="video-archive">
                                                                <span>
                                                                    <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="video-item">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-12 col-md-12">
                                                            <a class="open-popup" href="https://www.youtube.com/watch?v=9MO7Qn9BEEA">
                                                                <img width="885" height="590" src="https://ila.edu.vn/wp-content/uploads/2025/04/ila-nga-hoi-du-hoc-va-huong-nghiep-ila-2025-1-e1743728221904.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Ngày hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học" decoding="async" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"> </a>
                                                            <div class="video-content">
                                                                <h3>
                                                                    <a href="https://ila.edu.vn/ngay-hoi-du-hoc-ila-2025-co-hoi-thuc-hien-hoa-giac-mo-du-hoc">Ngày hội du học ILA 2025: Cơ hội thực hiện hóa giấc mơ du học</a>
                                                                </h3>
                                                            </div>
                                                            <div class="video-archive">
                                                                <span>
                                                                    <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="video-item">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-12 col-md-12">
                                                            <a class="open-popup" href="https://www.youtube.com/watch?v=sPtu-7yOdq0">
                                                                <img width="1500" height="1000" src="https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-vo-van-kiet-quan-6.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="ILA Võ Văn Kiệt" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-vo-van-kiet-quan-6.jpg 1500w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-vo-van-kiet-quan-6-300x200.jpg 300w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-vo-van-kiet-quan-6-1024x683.jpg 1024w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-vo-van-kiet-quan-6-768x512.jpg 768w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"> </a>
                                                            <div class="video-content">
                                                                <h3>
                                                                    <a href="https://ila.edu.vn/ilo-vo-van-kiet-canh-cua-hoi-nhap-cho-the-he-tre-quan-6-tp-hcm">ILA Võ Văn Kiệt: Cánh cửa hội nhập cho thế hệ trẻ quận 6, TP. HCM</a>
                                                                </h3>
                                                            </div>
                                                            <div class="video-archive">
                                                                <span>
                                                                    <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="video-item">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-12 col-md-12">
                                                            <a class="open-popup" href="https://www.youtube.com/watch?v=E4xBuVOP1YA">
                                                                <img width="1500" height="970" src="https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-nguyen-duy-trinh-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="khai trương ila nguyễn duy trinh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-nguyen-duy-trinh-1.jpg 1500w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-nguyen-duy-trinh-1-300x194.jpg 300w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-nguyen-duy-trinh-1-1024x662.jpg 1024w, https://ila.edu.vn/wp-content/uploads/2025/03/khai-truong-ila-nguyen-duy-trinh-1-768x497.jpg 768w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px"> </a>
                                                            <div class="video-content">
                                                                <h3>
                                                                    <a href="https://ila.edu.vn/ila-khai-truong-trung-tam-thu-70-ila-nguyen-duy-trinh">ILA khai trương trung tâm thứ 70: ILA Nguyễn Duy Trinh</a>
                                                                </h3>
                                                            </div>
                                                            <div class="video-archive">
                                                                <span>
                                                                    <a href="https://ila.edu.vn/video">MULTIMEDIA</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-5" class="section-hall-of-greatness">
                <div class="container">
                    <div class="box-wrapper">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="title-blog">
                                    <h2>GƯƠNG MẶT XUẤT SẮC</h2>
                                    <button><a href="https://ila.edu.vn/guong-mat-xuat-sac">Xem tất cả <i class="fa-regular fa-arrow-right"></i></a></button>
                                </div>
                            </div>
                        </div>
                        <div class="hall-owl-slider owl-carousel owl-theme owl-loaded owl-drag">































































































                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-29596px, 0px, 0px); transition: 4s linear; width: 86969px;">
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Sofia Nguyễn Leboutillier" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Sofia-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Sofia Nguyễn Leboutillier</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Thanh Bình" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Thanh Bình</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Phương Nghi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Phương Nghi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Hoàng Bách" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Hoàng Bách</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hà Lê Nguyên Chương" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hà Lê Nguyên Chương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Nguyễn Ngọc Khuê" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Nguyễn Ngọc Khuê</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hồng Minh Khuê" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hồng Minh Khuê</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Vincom Thủ Đức</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Nguyễn Mai Thy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Nguyễn Mai Thy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Lữ Lâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Lữ Lâm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Ảnh Thủ</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Ngọc Khánh Chi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Ngọc Khánh Chi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Nguyễn Hữu Định" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Nguyễn Hữu Định</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Võ Hồng Ngọc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Võ Hồng Ngọc</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Lạc Hồng Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Lạc Hồng Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tạ Hoàng Danh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tạ Hoàng Danh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Ánh Minh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Ánh Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Lê Bảo Ngọc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Lê Bảo Ngọc</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hữu Bảo Lâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hữu Bảo Lâm</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Minh Bảo Châu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Minh Bảo Châu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não </span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đào Duy Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đào Duy Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Minh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Minh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hoàng Thiên Trang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hoàng Thiên Trang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="INARI Anh Tuấn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">INARI Anh Tuấn</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tông Phan Minh Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tông Phan Minh Bảo </a></h3>
                                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Phạm Quỳnh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Phạm Quỳnh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tô Vận Thanh Phong" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tô Vận Thanh Phong</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Ngọc Khanh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Khanh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Bảo Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Bảo Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hà Bảo Châu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hà Bảo Châu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Vũ Mai Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Vũ Mai Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Xuân Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Xuân Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Ngọc Minh Vy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Minh Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHẠM TIẾN ĐỨC" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Tiến Đức</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="NGUYỄN THUỲ DƯƠNG" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Thùy Dương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="LÊ PHAN HOÀNG MINH" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Phan Hoàng Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="HUỲNH NGỌC PHƯƠNG VY" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Phương Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHÙNG HÀ THU" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phùng Hà Thu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN NGỌC PHƯƠNG AN" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Phương An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN MINH KHOA" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Minh Khoa</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHẠM ĐẶNG GIA AN" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Đặng Gia An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN NGỌC MINH DIỆP" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Minh Diệp</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đoàn Long Hy - ILA Nguyễn Đình Chiểu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đoàn Long Hy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Đình Chiểu</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Minh Thiên - ILA Hoàng Văn Thụ" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Minh Thiên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hoàng Văn Thụ</span></p>
                                                <p>15/15 khiên chứng chỉ Starters, Movers, Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Ong Thụy Sỹ - ILA Gò Vấp" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Ong Thụy Sỹ</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Gò Vấp</span></p>
                                                <p>Bằng IELTS 8.0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Đức Trọng - ILA Thủ Dầu Một" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Đức Trọng</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Thủ Dầu Một</span></p>
                                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Phúc Duyên - ILA Biên Hòa" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Phúc Duyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Biên Hòa</span></p>
                                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    Chứng chỉ KET Cambridge <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Nhật Dương - ILA Hải Phòng" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Nhật Dương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hải Phòng</span></p>
                                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    Giải nhất Festival Trạng nguyên tiếng Anh toàn quốc <br>
                                                    Chứng chỉ B2 Cambridge <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png 448w, https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đỗ Lê Nguyên Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Cư Trinh</span></p>
                                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hồ Tuệ Mẫn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hồ Tuệ Mẫn</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Hoàng Việt Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Hoàng Việt Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tiến Dũng" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tiến Dũng</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Diệp Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Diệp Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Vũng Tàu </span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Tuệ Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Tuệ Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Gia Tường" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Gia Tường</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Minh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Minh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Châu Ngọc Quyên" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Châu Ngọc Quyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Hoàng Bảo An" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Hoàng Bảo An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Võ Thảo Nguyên" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Võ Thảo Nguyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Tường Quân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Tường Quân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Văn Phạm Duệ Trầm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Văn Phạm Duệ Trầm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Huỳnh Tú Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Huỳnh Tú Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Thái Thiên Kim" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Thái Thiên Kim</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Uyên Vy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Uyên Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Minh Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Minh Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Nguyễn Thảo My" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Nguyễn Thảo My</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Trọng Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Trọng Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Phúc Văn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Phúc Văn</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tất Minh Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tất Minh Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Nhật Bảo Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Nhật Bảo Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Minh Triết" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Minh Triết</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lương Ngọc Mai" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lương Ngọc Mai</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lý Mạnh Kỳ" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lý Mạnh Kỳ</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Thanh Phú" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Thanh Phú</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Quân Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Quân Bảo</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Đức Minh Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Đức Minh Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê An Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê An Bảo</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tăng Khánh An" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tăng Khánh An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Ngọc Minh Khánh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Minh Khánh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hồ Mỹ Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hồ Mỹ Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Lê Đức Nghi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Lê Đức Nghi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đinh Lê Uyên Nhi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đinh Lê Uyên Nhi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đào An Bình" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đào An Bình</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Đặng Khoa" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Đặng Khoa</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Bảo Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Bảo Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hoàng Cao Minh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hoàng Cao Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Cao Dương Phước Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Cao Dương Phước Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Ngọc Bích Trâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Ngọc Bích Trâm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Bảo Nam" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Bảo Nam</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Vũ Lộc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Vũ Lộc</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Võ Quỳnh Như" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Võ Quỳnh Như</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Thọ Tòng Quân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Thọ Tòng Quân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Thiên Thanh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Thiên Thanh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tạ Quang Thiên Phúc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tạ Quang Thiên Phúc</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Đặng Quỳnh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Đặng Quỳnh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tấn Đạt" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tấn Đạt</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Sofia Nguyễn Leboutillier" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Sofia-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Sofia Nguyễn Leboutillier</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Thanh Bình" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-thanh-binh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Thanh Bình</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Phương Nghi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/tran-phuong-nghi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Phương Nghi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Hoàng Bách" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Phan-Hoang-Bach-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Hoàng Bách</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Nguyen-Khang-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hà Lê Nguyên Chương" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ha-le-nguyen-chuong-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hà Lê Nguyên Chương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Nguyễn Ngọc Khuê" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/phan-nguyen-ngoc-khue-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Nguyễn Ngọc Khuê</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hồng Minh Khuê" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-hong-minh-khue-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hồng Minh Khuê</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Vincom Thủ Đức</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Nguyễn Mai Thy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/pham-nguyen-mai-thy-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Nguyễn Mai Thy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Lữ Lâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-lu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Lữ Lâm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Ảnh Thủ</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Ngọc Khánh Chi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-ngoc-khanh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Ngọc Khánh Chi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Nguyễn Hữu Định" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/huynh-nguyen-huu-dinh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Nguyễn Hữu Định</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Võ Hồng Ngọc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vo-hong-ngoc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Võ Hồng Ngọc</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Lạc Hồng Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/pham-lac-hong-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Lạc Hồng Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tạ Hoàng Danh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-hoang-danh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tạ Hoàng Danh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Ánh Minh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/le-anh-minh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Ánh Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Lê Bảo Ngọc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Tran-le-bao-ngoc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Lê Bảo Ngọc</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Nhà Bè</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hữu Bảo Lâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-huu-bao-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hữu Bảo Lâm</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Minh Bảo Châu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/dang-minh-bao-chau-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Minh Bảo Châu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não </span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đào Duy Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/dao-duy-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đào Duy Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Minh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/minh-anh-pham-hung-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Minh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Hoàng Thiên Trang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-hoang-thien-trang-pvt-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Hoàng Thiên Trang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="INARI Anh Tuấn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-inari-anh-tuan-cong-hoa-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">INARI Anh Tuấn</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Cộng Hòa</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tông Phan Minh Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-tong-phan-minh-bao-him-lam-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tông Phan Minh Bảo </a></h3>
                                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Phạm Quỳnh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-le-pham-quynh-anh-him-lam-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Phạm Quỳnh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Him Lam</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tô Vận Thanh Phong" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-to-van-thanh-phong-pvd-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tô Vận Thanh Phong</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Ngọc Khanh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-huynh-ngoc-khanh-pvd-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Khanh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Bảo Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-nguyen-tran-bao-han-pvd-1-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Bảo Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Văn Đồng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hà Bảo Châu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-ha-bao-chau-nguyen-xi-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hà Bảo Châu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Vũ Mai Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-vu-mai-anh-nguyen-xi-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Vũ Mai Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Xuân Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/xuan-khang-tan-phu-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Xuân Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Ngọc Minh Vy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung.jpeg 448w, https://ila.edu.vn/wp-content/uploads/2023/09/ila-tran-ngoc-minh-vy-phu-my-hung-254x300.jpeg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Minh Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHẠM TIẾN ĐỨC" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Tien-Duc-Mac-Dinh-Chi-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Tiến Đức</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="NGUYỄN THUỲ DƯƠNG" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Duong-ILA-MDC-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Thùy Dương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="LÊ PHAN HOÀNG MINH" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Hoang-Minh-Le-Van-Viet-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Phan Hoàng Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Lê Văn Việt</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="HUỲNH NGỌC PHƯƠNG VY" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Huynh-Ngoc-Phuong-Vy-Hoa-Binh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Phương Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHÙNG HÀ THU" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Ha-Thu-Hoa-Binh-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phùng Hà Thu</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN NGỌC PHƯƠNG AN" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Phuong-An-Hoa-Binh-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Phương An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN MINH KHOA" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Khoa-Phan-Van-Tri-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Minh Khoa</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Starters </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PHẠM ĐẶNG GIA AN" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Gia-An-Phan-Van-Tri-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Đặng Gia An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="TRẦN NGỌC MINH DIỆP" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1.png 448w, https://ila.edu.vn/wp-content/uploads/2023/08/Minh-Diep-PMH-1-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Ngọc Minh Diệp</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đoàn Long Hy - ILA Nguyễn Đình Chiểu" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/doan-long-hy-ila-nguyen-dinh-chieu-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đoàn Long Hy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Đình Chiểu</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Minh Thiên - ILA Hoàng Văn Thụ" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/le-minh-thien-ila-hoang-van-thu-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Minh Thiên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hoàng Văn Thụ</span></p>
                                                <p>15/15 khiên chứng chỉ Starters, Movers, Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Ong Thụy Sỹ - ILA Gò Vấp" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/ong-thuy-sy-ila-go-vap-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Ong Thụy Sỹ</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Gò Vấp</span></p>
                                                <p>Bằng IELTS 8.0</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Đức Trọng - ILA Thủ Dầu Một" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/truong-duc-trong-ila-thu-dau-mot-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Đức Trọng</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Thủ Dầu Một</span></p>
                                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Phúc Duyên - ILA Biên Hòa" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-phuc-duyen-ila-bien-hoa-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Phúc Duyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Biên Hòa</span></p>
                                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    Chứng chỉ KET Cambridge <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Nhật Dương - ILA Hải Phòng" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong.png 448w, https://ila.edu.vn/wp-content/uploads/2023/06/nguyen-nhat-duong-ila-hai-phong-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Nhật Dương</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hải Phòng</span></p>
                                                <p>Quán quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    Giải nhất Festival Trạng nguyên tiếng Anh toàn quốc <br>
                                                    Chứng chỉ B2 Cambridge <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="448" height="530" src="https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh.png 448w, https://ila.edu.vn/wp-content/uploads/2023/03/do-le-nguyen-khoi-ila-nguyen-cu-trinh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đỗ Lê Nguyên Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Cư Trinh</span></p>
                                                <p>Á quân cuộc thi hùng biện Speak up 2022 tại ILA <br>
                                                    15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hồ Tuệ Mẫn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/ho-Tue-Man-OLA-Ha-Huy-Giap-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hồ Tuệ Mẫn</a></h3>
                                                <p style="font-size: 16px;"><span>OLA Hà Huy Giáp</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Hoàng Việt Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/huynh-hoang-Viet-Han-ILA-Mac-Dinh-Chi-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Hoàng Việt Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tiến Dũng" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-Tien-Dung-Nguyen-Xi-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tiến Dũng</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Diệp Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/Tran-Diep-Anh-VT-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Diệp Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Vũng Tàu </span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Tuệ Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/tran-Tue-Anh-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Tuệ Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Gia Tường" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/truong-gia-tuong-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Gia Tường</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Minh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/nguyen-tran-Minh-Anh-PMH-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Minh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Châu Ngọc Quyên" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh.png 433w, https://ila.edu.vn/wp-content/uploads/2024/02/Chau-Ngoc-Quyen-Hoa-Binh-254x300.png 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Châu Ngọc Quyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Hòa Bình</span></p>
                                                <p>15/15 khiên chứng chỉ Flyers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trương Hoàng Bảo An" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/truong-hoang-bao-an-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trương Hoàng Bảo An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Võ Thảo Nguyên" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/vo-thao-nguyen-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Võ Thảo Nguyên</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Tường Quân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-tuong-quan-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Tường Quân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Văn Phạm Duệ Trầm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/van-pham-due-tram-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Văn Phạm Duệ Trầm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Huỳnh Tú Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/pham-huynh-tu-anh-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Huỳnh Tú Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Thái Thiên Kim" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/thai-thien-kim-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Thái Thiên Kim</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Uyên Vy" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-uyen-vy-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Uyên Vy</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Trần Minh Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tran-minh-khoi-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Trần Minh Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phạm Nguyễn Thảo My" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/pham-nguyen-thao-my-ila-phan-van-tri-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phạm Nguyễn Thảo My</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phan Văn Trị</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Trọng Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-trong-khoi-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Trọng Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Phúc Văn" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-phuc-van-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Phúc Văn</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tất Minh Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tat-minh-khang-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tất Minh Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Nhật Bảo Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-nhat-bao-anh-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Nhật Bảo Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Minh Triết" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-minh-triet-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Minh Triết</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Mạc Đĩnh Chi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lương Ngọc Mai" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/luong-ngoc-mai-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lương Ngọc Mai</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lý Mạnh Kỳ" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/ly-manh-ky-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lý Mạnh Kỳ</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Thanh Phú" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-thanh-phu-ila-nguyen-xi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Thanh Phú</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Xí</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Quân Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-quan-bao-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Quân Bảo</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê Đức Minh Khôi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-duc-minh-khoi-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê Đức Minh Khôi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Lê An Bảo" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/le-an-bao-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Lê An Bảo</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tăng Khánh An" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-tang-khanh-an-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tăng Khánh An</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Ngọc Minh Khánh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/huynh-ngoc-minh-khanh-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Ngọc Minh Khánh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hồ Mỹ Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/ho-my-anh-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hồ Mỹ Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Phan Lê Đức Nghi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/phan-le-duc-nghi-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Phan Lê Đức Nghi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đinh Lê Uyên Nhi" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dinh-le-uyen-nhi-ila-nguyen-trai-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đinh Lê Uyên Nhi</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đào An Bình" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dao-an-binh-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đào An Bình</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Trần Đặng Khoa" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/tran-dang-khoa-ila-pham-hung-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Trần Đặng Khoa</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Bảo Hân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/dang-bao-han-ila-tran-nao-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Bảo Hân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Hoàng Cao Minh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/hoang-cao-minh-ila-mac-dinh-chi-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Hoàng Cao Minh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Cao Dương Phước Khang" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/cao-duong-phuoc-khang-ila-phu-lam-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Cao Dương Phước Khang</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Ngọc Bích Trâm" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/nguyen-ngoc-bich-tram-ila-pmh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Ngọc Bích Trâm</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Mỹ Hưng</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Huỳnh Bảo Nam" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2024/01/huynh-bao-nam-ila-tan-phu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Huỳnh Bảo Nam</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Movers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Vũ Lộc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-vu-loc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Vũ Lộc</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Tân Phú</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Võ Quỳnh Như" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Vo-Quynh-Nhu-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Võ Quỳnh Như</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phạm Hùng</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Thọ Tòng Quân" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/tho-tong-quan-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Thọ Tòng Quân</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Đặng Thiên Thanh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-thien-thanh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Đặng Thiên Thanh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Nguyễn Trãi</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Tạ Quang Thiên Phúc" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/ta-quang-thien-phuc-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Tạ Quang Thiên Phúc</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Đặng Quỳnh Anh" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-dang-quynh-anh-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Đặng Quỳnh Anh</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Phú Lâm</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Nguyễn Tấn Đạt" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/nguyen-tan-dat-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Nguyễn Tấn Đạt</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 431.333px; margin-right: 24px;">
                                        <div class="hall-item">
                                            <div class="hall-image">
                                                <img width="433" height="512" src="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Sofia Nguyễn Leboutillier" decoding="async" srcset="https://ila.edu.vn/wp-content/uploads/2023/12/Sofia.jpg 433w, https://ila.edu.vn/wp-content/uploads/2023/12/Sofia-254x300.jpg 254w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">
                                            </div>
                                            <div class="hall-content">
                                                <h3><a href="#">Sofia Nguyễn Leboutillier</a></h3>
                                                <p style="font-size: 16px;"><span>ILA Trần Não</span></p>
                                                <p>15/15 khiên chứng chỉ Starters</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
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
